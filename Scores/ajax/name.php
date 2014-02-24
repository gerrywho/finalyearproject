<?php
require_once '..//..//Connection/taskmodel.php';
if (isset($_POST['name']) === true && empty($_POST['name']) === false) {
    

    $conn = connect();
    $name = $_POST['name'];
    $sql = "SELECT HCap_Score from Handicap where HCap_Date = (SELECT max(HCap_Date) from Handicap) AND M_ID = '$name'";
    $data = $conn->query($sql);
    $hcapdate = $data->fetch();
    $currenthcap = $hcapdate['HCap_Score'];

} 
echo round($currenthcap,1);

?>


