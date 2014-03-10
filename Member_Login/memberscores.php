<?php
include_once '..//Connection/taskmodel.php';

 $conn=connect();
 $memberfname= $_COOKIE["FName"];
 $memberlname= $_COOKIE["LName"];
 $society = $_COOKIE["Society"];
 $member = $_COOKIE["ID"];

 $sql = "select top(2) * from Player_Round 
 join Course on Player_Round.C_ID = Course.C_ID
where M_ID = '$member' order by R_ID desc ;";
 $data = $conn->query($sql);

while($array1[] = $data->fetch(PDO::FETCH_OBJ))
{
    echo $array1->M_ID;
}

array_pop($array1);
$length = count($array1);


?>