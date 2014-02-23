<?php
require_once '..//Connection/taskmodel.php';

$item_member = $_POST['members'];
$item_rounddate = $_POST['rounds'];
$item_prize = $_POST['prizes'];
$item_score = $_POST['itemscore'];
$item_adjust = $_POST['itemadjust'];

addScore($item_member, $item_rounddate, $item_prize, $item_score);
addHandicap($item_member, $item_adjust);
header('Location: newScore.php');
?>


