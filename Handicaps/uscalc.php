<?php
    /** Gerard Nugent 
            *C10711059
            *Final Year Project 2014
        */
    include_once '..//Connection/taskmodel.php';
    $members = $_POST['member'];
    $itemslope = $_POST['itemslope'];
    
   $conn = connect();
          $sql8 = "SELECT top(20) * from Differential where M_ID ='$members' order by D_ID desc";
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

            $today = round(($hcap * $itemslope)/113, 1);
    echo $today;
?>
