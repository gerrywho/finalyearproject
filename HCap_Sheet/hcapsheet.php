<?php
include_once '..//Connection/taskmodel.php';

//Connection to database
$conn=connect();

//Get Society ID from cookie
$society=$_COOKIE["ID"];


//Code for array for member dropdown
//SQL for all members in logged in society
$sql = "select M_F_Name, M_L_Name, HCap_Date, HCap_Score from Member
join Handicap on Member.M_ID = Handicap.M_ID";
$data = $conn->query($sql);

while($array[] = $data->fetch(PDO::FETCH_OBJ))
{
    echo $array->M_F_Name;
}
array_pop($array);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        BLah<br>
        <table>
        <tr>
            <td>Member</td>
            <td>  </td> 
            <td>Handicap</td>
        </tr>
         <tr>
             <td><?php echo $array[1]->M_F_Name . " " . $array[1]->M_L_Name?></td> 
             <td>  </td>
             <td><?php echo $array[1]->HCap_Score ?></td> 
         </tr>
            </table>
        <button onclick="window.print()">Print this page</button>
    </body>
</html>
