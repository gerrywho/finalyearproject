<?php
include_once '..//Connection/taskmodel.php';

$item_name = $_POST['itemname'];
$item_address = $_POST['itemaddress'];
$item_town = $_POST['itemtown'];
$item_county = $_POST['itemcounty'];
$item_contact = $_POST['itemcontact'];

addCourse($item_name, $item_address, $item_town, $item_county, $item_contact);
header('Location: newCourse.php');
?>

