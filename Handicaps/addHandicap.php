<?php
require_once '..//Connection/taskmodel.php';

$members = $_POST['members'];
$itemadjust = $_POST['itemadjust'];

addHandicap($members, $itemadjust);
header('Location: newHandicap.php');
?>

