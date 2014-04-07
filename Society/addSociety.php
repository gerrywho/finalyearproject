<?php
        /** Gerard Nugent 
                *C10711059
                *Final Year Project 2014
            */
    include_once '..//Connection/taskmodel.php';
    
    $item_name = $_POST['itemname'];
    $item_email = $_POST['itememail'];
    $item_pwd = $_POST['itempwd'];
    $item_contact = $_POST['itemcontact'];
    
    addSociety($item_name, $item_email, $item_pwd, $item_contact);
    header('Location: newSociety.php');
?>


