<?php
include_once '..//Connection/taskmodel.php';

$courses = $_POST['courses'];
$item_date = $_POST['itemdate'];
$item_time = $_POST['itemtime'];
$item_holes = $_POST['itemholes'];

addFixture($courses, $item_date, $item_time, $item_holes);
header('Location: newFixture.php');
?>
?>


