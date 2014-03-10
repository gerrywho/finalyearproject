<?php 
 
include_once '..//Connection/taskmodel.php';
 
 $conn=connect();
 $memberfname= $_COOKIE["FName"];
 $memberlname= $_COOKIE["LName"];
 $society = $_COOKIE["Society"];
 $member = $_COOKIE["ID"];

 $sql = "select top(3) * from Handicap 
where M_ID = '$member';";
 $data = $conn->query($sql);

while($array3[] = $data->fetch(PDO::FETCH_OBJ))
{
    echo $array3->M_ID;
    //$newArray.array_push($array->C_ID);
}
array_pop($array3);
?>