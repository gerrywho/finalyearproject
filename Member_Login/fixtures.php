<?php
include_once '..//Connection/taskmodel.php';

 $conn=connect();
 $memberfname= $_COOKIE["FName"];
 $memberlname= $_COOKIE["LName"];
 $society = $_COOKIE["Society"];

 $sql = "select top(3) * from Round 
join Course on Round.C_ID = Course.C_ID 
where R_Date > CURRENT_TIMESTAMP AND S_ID = '$society' order by R_Date ;";
 $data = $conn->query($sql);

while($array[] = $data->fetch(PDO::FETCH_OBJ))
{
    echo $array->M_ID;
}

array_pop($array);
$length = count($array);


?>

