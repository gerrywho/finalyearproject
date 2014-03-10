<?php
include_once '..//Connection/taskmodel.php';

 $conn=connect();
 $memberfname= $_COOKIE["FName"];
 $memberlname= $_COOKIE["LName"];
 $society = $_COOKIE["Society"];

 $sql = "select * from Player_Round
join Member on Player_Round.M_ID = Member.M_ID
where R_ID in (select max(R_ID) from Player_Round where prize = 'First Net' or prize = 'Second Net' or prize = 'Third Net');";
 $data = $conn->query($sql);

while($array2[] = $data->fetch(PDO::FETCH_OBJ))
{
    echo $array2->M_ID;
}

array_pop($array2);
$length = count($array2);


?>