<?php
    /** Gerard Nugent 
        *C10711059
        *Final Year Project 2014
    */
    
    function connect()
    {
    
        $host = "szs51v5v49.database.windows.net,1433";
        $user = "gerrywho";
        $pwd = "Westside1";
        $db = "societyAMXhvkfpT";
    
        try{
            $conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
            $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch(Exception $e){
            die(print_r($e));
        }
        return $conn;
    }
    
    function addSociety($name, $email, $pwd, $contact)
    {
        $conn = connect();
         $sql1 = "SELECT S_ID from Society where S_ID =
        (SELECT max(S_ID) from Society)";
        $data = $conn->query($sql1);
        $result1 = $data->fetch();
        $id = $result1['S_ID'] + 1;
        $sql = "INSERT INTO Society (S_ID, S_Email, S_Password, S_Name, S_Contact)  VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $pwd);
        $stmt->bindValue(4, $name);
        $stmt->bindValue(5, $contact);
        $stmt->execute();
    }
    
    function addCourse($name,$address,$town, $county,$contact,$scratch)
    {
        $conn = connect();
        $sql1 = "SELECT C_ID from Course where C_ID =
        (SELECT max(C_ID) from Course)";
        $data = $conn->query($sql1);
        $result1 = $data->fetch();
        $id = $result1['C_ID'] + 1;
        echo $id;
        $sql = "INSERT INTO COURSE (C_ID, C_Name, C_Address, C_Town, C_County, C_Contact, C_Std_Scratch )  VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->bindValue(2, $name);
        $stmt->bindValue(3, $address);
        $stmt->bindValue(4, $town);
        $stmt->bindValue(5, $county);
        $stmt->bindValue(6, $contact);
        $stmt->bindValue(7, $scratch);
        $stmt->execute();
    }
    
    function addFixture($courses, $item_date, $item_time, $item_holes)
    {
        $conn = connect();
        $sql1 = "SELECT R_ID from Round where R_ID =
        (SELECT max(R_ID) from Round)";
        $data = $conn->query($sql1);
        $result1 = $data->fetch();
        $id = $result1['R_ID'] + 1;
    
        $sid = $_COOKIE["ID"];
    
    
        $sql = "INSERT INTO Round (R_ID, C_ID, S_ID, R_Date, R_Time, R_Holes)  VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->bindValue(2, $courses);
        $stmt->bindValue(3, $sid);
        $stmt->bindValue(4, $item_date);
        $stmt->bindValue(5, $item_time);
        $stmt->bindValue(6, $item_holes);
        $stmt->execute();
    }
    
    
    function addMember($item_fname, $item_lname, $item_email, $item_address, $item_town, $item_county, $item_contact)
    {
        $conn = connect();
        $sql1 = "SELECT M_ID from Member where M_ID =
        (SELECT max(M_ID) from Member)";
        $data = $conn->query($sql1);
        $result1 = $data->fetch();
        $id = $result1['M_ID'] + 1;
        $society = $_COOKIE["ID"];
        $len = 8;
        $pwd = random();
        $sql = "INSERT INTO Member (M_ID, S_ID, M_Email, M_Password, M_F_Name, M_L_Name, M_Address, M_Town, M_County, M_Contact) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->bindValue(2, $society);
        $stmt->bindValue(3, $item_email);
        $stmt->bindValue(4, $pwd);
        $stmt->bindValue(5, $item_fname);
        $stmt->bindValue(6, $item_lname);
        $stmt->bindValue(7, $item_address);
        $stmt->bindValue(8, $item_town);
        $stmt->bindValue(9, $item_county);
        $stmt->bindValue(10, $item_contact);
        $stmt->execute();
    }
    
    function addHandicap($members, $itemadjust)
    {
        $conn = connect();
        $sql1 = "SELECT H_ID from Handicap where H_ID =
        (SELECT max(H_ID) from Handicap)";
        $data = $conn->query($sql1);
        $result1 = $data->fetch();
        $id = $result1['H_ID'] + 1;
    
        $sql2 = "SELECT HCap_Score from Handicap where HCap_Date = (SELECT max(HCap_Date) from Handicap WHERE M_ID = '$members') AND M_ID = '$members'";
        $data1 = $conn->query($sql2);
        $hcapdate = $data1->fetch();
        $currenthcap = $hcapdate['HCap_Score'] + $itemadjust;
    
       /* $sql3 = "SELECT HCap_Score from Handicap WHERE M_ID = '$members' AND HCap_Date = '$hcapdate'";
        $data2 = $conn->query($sql3);
        $currenthcap = $data2->fetch();*/
    
        //$currenthcap = 1;
    
        $itemadjust1 = floatval($hcapdate) + $itemadjust;
        $society = $_COOKIE["ID"];
        $sql = "INSERT INTO Handicap (H_ID, M_ID, S_ID, HCap_Date, HCap_Score) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->bindValue(2, $members);
        $stmt->bindValue(3, $society);
        $stmt->bindValue(4, date("Y/m/d"));
        $stmt->bindValue(5, $currenthcap);
        $stmt->execute();
    }
    
    function addScore($item_member, $item_rounddate, $item_prize, $item_score) {
    
         $conn = connect();
    
        $society = $_COOKIE["ID"];
    
    
        $sql2 = "SELECT C_ID from Round where R_ID = '$item_rounddate'";
        $data1 = $conn->query($sql2);
        $result2 = $data1->fetch();
        $courses=$result2['C_ID'];
    
        $sql3 = "INSERT INTO Player_Round (R_ID, C_ID, S_ID, M_ID, P_R_Score, prize) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql3);
        $stmt->bindValue(1, $item_rounddate);
        $stmt->bindValue(2, $courses);
        $stmt->bindValue(3, $society);
        $stmt->bindValue(4, $item_member);
        $stmt->bindValue(5, $item_score);
        $stmt->bindValue(6, $item_prize);
        $stmt->execute();
    
    
    }
    
    function calcHandicap($item_member, $item_rounddate, $item_score)
    {
        $conn = connect();
        $society = $_COOKIE["ID"];
    
        $sql2 = "SELECT H_ID from Handicap where H_ID =
        (SELECT max(H_ID) from Handicap)";
        $data2 = $conn->query($sql2);
        $result2 = $data2->fetch();
        $id = $result2['H_ID'] + 1;
    
         $sq = "SELECT HCap_Score from Handicap where HCap_Date = (SELECT max(HCap_Date) from Handicap WHERE M_ID = '$item_member') AND M_ID = '$item_member'";
        $dat = $conn->query($sq);
        $hcapdate = $dat->fetch();
        $currenthcap = $hcapdate['HCap_Score'];
    
        $sql = "SELECT C_ID from Round where R_ID = '$item_rounddate'";
        $data = $conn->query($sql);
        $result = $data->fetch();
        $courses=$result['C_ID'];
    
        $sql1 = "SELECT C_Std_Scratch from Course where C_ID = '$courses'";
        $data1 = $conn->query($sql1);
        $result1 = $data1->fetch();
        $scratch=$result1['C_Std_Scratch'];
    
        if($currenthcap >= 28.5 && $currenthcap <= 36)
        {
            if($item_score == $scratch)
            {
                $newHandicap = $currenthcap;
            }
            elseif($item_score < $scratch)
            {
                if(($scratch - $item_score)>5)
                {
                    $newHandicap = floatval($currenthcap + 0.1);
                }
                else
                {
                    $newHandicap = $currenthcap;    
                }
            }
            else
            {
                $difference = $item_score - $scratch;
                $newHandicap = floatval($currenthcap - ($difference * 0.5));
            }
    
        }elseif($currenthcap >= 20.5 && $currenthcap <= 28.4){
    
            if($item_score == $scratch)
            {
                $newHandicap = $currenthcap;
            }
            elseif($item_score < $scratch)
            {
                if(($scratch - $item_score)>4)
                {
                    $newHandicap = floatval($currenthcap + 0.1);
                }
                else
                {
                    $newHandicap = $currenthcap;    
                }
            }
            else
            {
                $difference = $item_score - $scratch;
                $newHandicap = floatval($currenthcap - ($difference * 0.4));
            }
    
        }elseif($currenthcap >= 12.5 && $currenthcap <= 20.4){
    
            if($item_score == $scratch)
            {
                $newHandicap = $currenthcap;
            }
            elseif($item_score < $scratch)
            {
                if(($scratch - $item_score)>3)
                {
                    $newHandicap = floatval($currenthcap + 0.1);
                }
                else
                {
                    $newHandicap = $currenthcap;    
                }
            }
            else
            {
                $difference = $item_score - $scratch;
                $newHandicap = floatval($currenthcap - ($difference * 0.3));
            }
        }elseif($currenthcap >= 5.5 && $currenthcap <= 12.4){
    
          if($item_score == $scratch)
            {
                $newHandicap = $currenthcap;
            }
            elseif($item_score < $scratch)
            {
                if(($scratch - $item_score)>2)
                {
                    $newHandicap = floatval($currenthcap + 0.1);
                }
                else
                {
                    $newHandicap = $currenthcap;    
                }
            }
            else
            {
                $difference = $item_score - $scratch;
                $newHandicap = floatval($currenthcap - ($difference * 0.2));
            }  
        }elseif($currenthcap >= 0.1 && $currenthcap <= 5.4){
    
          if($item_score == $scratch)
            {
                $newHandicap = $currenthcap;
            }
            elseif($item_score < $scratch)
            {
                if(($scratch - $item_score)>1)
                {
                    $newHandicap = floatval($currenthcap + 0.1);
                }
                else
                {
                    $newHandicap = $currenthcap;    
                }
            }
            else
            {
                $difference = $item_score - $scratch;
                $newHandicap = floatval($currenthcap - ($difference * 0.1));
            }  
        }
        else{
    
        }
    
    
        $sql4 = "INSERT INTO Handicap (H_ID, M_ID, S_ID, HCap_Date, HCap_Score) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql4);
        $stmt->bindValue(1, $id);
        $stmt->bindValue(2, $item_member);
        $stmt->bindValue(3, $society);
        $stmt->bindValue(4, date("Y/m/d"));
        $stmt->bindValue(5, $newHandicap);
        $stmt->execute();
    
    
    }
    
    function usHandicap($item_member, $item_rounddate, $item_score, $item_slope)
    {
         $conn = connect();
        $society = $_COOKIE["ID"];
        $sql1 = "SELECT H_ID from Handicap where H_ID =
        (SELECT max(H_ID) from Handicap)";
        $data = $conn->query($sql1);
        $result1 = $data->fetch();
        $id = $result1['H_ID'] + 1;
    
        $sql7 = "SELECT D_ID from Differential where D_ID =
        (SELECT max(D_ID) from Differential)";
        $data1 = $conn->query($sql7);
        $result2 = $data1->fetch();
        $did = $result2['D_ID'] + 1;
    
        $sql = "SELECT C_ID from Round where R_ID = '$item_rounddate'";
        $data = $conn->query($sql);
        $result = $data->fetch();
        $courses=$result['C_ID'];
    
        $sql1 = "SELECT C_Std_Scratch from Course where C_ID = '$courses'";
        $data1 = $conn->query($sql1);
        $result1 = $data1->fetch();
        $scratch=$result1['C_Std_Scratch'];
    
        $differential = round(($item_score -  $scratch) * 113/$item_slope,1);
    
        $sql6 = "INSERT INTO Differential (D_ID, M_ID, Diff) VALUES (?,?,?)";
        $data3 = $conn->prepare($sql6);
        $data3->bindValue(1, $did);
        $data3->bindValue(2, $item_member);
        $data3->bindValue(3, $differential);
        $data3->execute();
    
         $sql8 = "SELECT top(20) * from Differential where M_ID ='$item_member' order by D_ID desc";
         $diffdata = $conn->query($sql8);
         while($diffarray[] = $diffdata->fetch(PDO::FETCH_OBJ))
        {
        echo $diffarray->D_ID;
    
        }
        array_pop($diffarray);
    
        $length = count($diffarray);
    
    
    
         $b = array();
          /*foreach ($diffarray as $row){
                $b[] = $row['Diff'];
            }
    
    
            */
            
    for( $i=0; $i<$length; $i++){
        $b[$i] = floatval($diffarray[$i]->Diff);
    }
    sort($b);
    
    
    //$sorted = sorting($diffarray, 'Diff');
        if($length == 20){
           $hcap = round((($b[0] + $b[1] + $b[2] + $b[3] + $b[4] + $b[5] + $b[6] + $b[7] + $b[8] + $b[9])/2)*0.96); 
        }
        else if($length ==19){
           $hcap = round((($b[0] + $b[1] + $b[2] + $b[3] + $b[4] + $b[5] + $b[6] + $b[7] + $b[8])/2)*0.96); 
        }
         else if($length ==18){
            $hcap = round((($b[0] + $b[1] + $b[2] + $b[3] + $b[4] + $b[5] + $b[6] + $b[7])/2)*0.96); 
        }
         else if($length ==17){
            $hcap = round((($b[0] + $b[1] + $b[2] + $b[3] + $b[4] + $b[5] + $b[6])/2)*0.96); 
        }
         else if($length == 16 || $length == 15){
           $hcap = round((($b[0] + $b[1] + $b[2] + $b[3] + $b[4] + $b[5])/2)*0.96); 
        }
         else if($length == 14 || $length == 13){
            $hcap = round((($b[0] + $b[1] + $b[2] + $b[3] + $b[4])/2)*0.96);
        }
         else if($length == 12 || $length == 11){
           $hcap = round((($b[0] + $b[1] + $b[2] + $b[3])/2)*0.96); 
        }
         else if($length == 10 || $length == 9){
            $hcap = round((($b[0] + $b[1] + $b[2])/2)*0.96);
        }
         else if($length == 8 || $length == 7){
            $hcap = round((($b[0] + $b[1])/2)*0.96);
        }

        else if($length < 6){
            $hcap = round($b[0] * 0.96, 1);
            //stdout($sorted[1]);
    
        }
        else{
            $hcap = NULL;
        }
    
    
    
    
        $sql5 = "INSERT INTO Handicap (H_ID, M_ID, S_ID, HCap_Date, HCap_Score) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql5);
        $stmt->bindValue(1, $id);
        $stmt->bindValue(2, $item_member);
        $stmt->bindValue(3, $society);
        $stmt->bindValue(4, date("Y/m/d"));
        $stmt->bindValue(5, $hcap);
        $stmt->execute();
    
    
    
    }
    
    function random()
    {
            $len = 8;
            return substr(str_shuffle("qwertyuioplkjhgfdsazxcvbnmMNBVCXZASDFGHJKLPOIUYTREWQ0123456789!£$%&*?#"), 0, $len);
    }
    
    
    
    
    
    
?>
