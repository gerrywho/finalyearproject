<?php
    /** Gerard Nugent 
            *C10711059
            *Final Year Project 2014
        */
require_once '..//Connection/taskmodel.php';

$members = $_POST['members'];
$itemadjust = $_POST['itemadjust'];

addHandicap($members, $itemadjust);
header('Location: newHandicap.php');
?>

