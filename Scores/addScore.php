<?php
require_once '..//Connection/taskmodel.php';

$item_member = $_POST['members'];
$item_rounddate = $_POST['rounds'];
$item_prize = $_POST['prizes'];
$item_score = $_POST['itemscore'];
$item_adjust = $_POST['itemadjust'];
$item_slope = $_POST['itemslope'];
$item_handicap = $_POST['itemhandicap'];

if(isset($_POST['checkbox_name']))
{
    addScore($item_member, $item_rounddate, $item_prize, $item_score);
    addHandicap($item_member, $item_adjust);
   
}
else if(isset($_POST['uscheck']))
{
    addScore($item_member, $item_rounddate, $item_prize, $item_score); 
    usHandicap($item_member, $item_rounddate, $item_score, $item_slope);
}
else{
    addScore($item_member, $item_rounddate, $item_prize, $item_score); 
    calcHandicap($item_member, $item_rounddate, $item_score);
}


header('Location: newScore.php');
?>


