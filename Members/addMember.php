<?php
        /** Gerard Nugent 
                *C10711059
                *Final Year Project 2014
            */
            
    //Prepares inputs from newMember to go to taskmodel function
    require_once '..//Connection/taskmodel.php';
    
    $item_fname = $_POST['itemfname'];
    $item_lname = $_POST['itemlname'];
    $item_email = $_POST['itememail'];
    $item_address = $_POST['itemaddress'];
    $item_town = $_POST['itemtown'];
    $item_county = $_POST['itemcounty'];
    $item_contact = $_POST['itemcontact'];
    $item_handicap = $_POST['itemhandicap'];
    
    addMember($item_fname, $item_lname, $item_email, $item_address, $item_town, $item_county, $item_contact, $item_handicap);
    header('Location: newMember.php');
?>


