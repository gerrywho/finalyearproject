<?php
include_once '..//Connection/taskmodel.php';

$conn=connect();
$course = $_GET['course'];
$sql = "SELECT C_Name from Course where C_Name like '$course%' ORDER BY C_Name";
$res = $conn->query($sql);
echo $res;

if(!res)
    echo mysqli_error($conn);
else
    while( $row = $res->fetch_object() )
        echo "<option value='".$row->C_Name."'>";
?>


