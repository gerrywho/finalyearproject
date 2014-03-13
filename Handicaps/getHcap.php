<?php
require_once '..//Connection/taskmodel.php';

$conn=connect();

$members = $_POST['members'];

$sql = "select top(20) H_ID, Hcap_Score from Handicap where M_ID = '$members' order by Hcap_Score";
$data = $conn->query($sql);

while($array[] = $data->fetch(PDO::FETCH_OBJ))
{
    echo $array->H_ID;
}

array_pop($array);
$length = count($array);

if($length < 7){
    $array1 = array(
     "$array[0]->Hcap_Score"
    );
}
?>


