<?php
    include_once '..//Connection/taskmodel.php';
    
    //Connection to database
    $conn=connect();
    
    //Get Society ID from cookie
    $society=$_COOKIE["ID"];
    
    
    //Code for array for member dropdown
    //SQL for all members in logged in society
    $sql = "select HCap_Date, HCap_Score, M_F_Name, M_L_Name from Handicap
    join Member on Handicap.M_ID = Member.M_ID WHERE Handicap.HCap_Date = (SELECT max(HCap_Date) from Handicap WHERE Handicap.M_ID = Member.M_ID) AND Member.S_ID = '$society'";
    $data = $conn->query($sql);
    
    while($array[] = $data->fetch(PDO::FETCH_OBJ))
    {
        echo $array->M_F_Name;
    }
    
    array_pop($array);
    $length = count($array);
    
?>

<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="..//CSS/index.css">
        <link rel="stylesheet" type="text/css" href="..//CSS/bootstrap.css">

        <title></title>
    </head>
    <body>
        <div id="grad1">
            <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
                <div class="btn-group" style="margin-left:10px; margin-right: auto; margin-top: 10px">
                    <button name="main" class="btn btn-default" id="main" onclick="parent.location='..//socMain.php'">MAIN MENU</button>
                    <button name="logout" style="margin-left:10px; margin-top: 5px" class="btn btn-default" id="logout" value="LOGOUT" onclick="parent.location='..//logout.php'">LOGOUT</button>

                </div>

            </div>
            <div id="plane">

                <?php
                     echo '<table>';
                     echo'<tr><td>Member</td><td>Handicap</td></tr>';
                    for ($x=0;$x<$length;$x++) {
                        echo '<tr>';
                        echo '<td>'.$array[$x]->M_F_Name. " " . $array[$x]->M_L_Name.'</td>';
                        echo '<td>'.round($array[$x]->HCap_Score, 1).'</td>';
                        echo '<td>'.$item[2].'</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                ?>
                <button onclick="window.print()">Print this page</button>
            </div>
        </div>
    </body>
</html>
