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

function addCourse($name,$address,$town, $county,$contact)
{
    $conn = connect();
    $sql1 = "SELECT C_ID from Course where C_ID =
    (SELECT max(C_ID) from Course)";
    $data = $conn->query($sql1);
    $result1 = $data->fetch();
    $id = $result1['C_ID'] + 1;
    echo $id;
    $sql = "INSERT INTO COURSE (C_ID, C_Name, C_Address, C_Town, C_County, C_Contact)  VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->bindValue(2, $name);
    $stmt->bindValue(3, $address);
    $stmt->bindValue(4, $town);
    $stmt->bindValue(5, $county);
    $stmt->bindValue(6, $contact);
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

    $sql2 = "SELECT HCap_Score from Handicap where HCap_Date = (SELECT max(HCap_Date) from Handicap WHERE M_ID = 101) AND M_ID = 101";
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

function random()
{
        $len = 8;
        return substr(str_shuffle("qwertyuioplkjhgfdsazxcvbnmMNBVCXZASDFGHJKLPOIUYTREWQ0123456789!£$%&*?#"), 0, $len);
}




?>
