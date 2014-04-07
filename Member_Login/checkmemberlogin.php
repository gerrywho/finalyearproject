<?php
    /** Gerard Nugent 
            *C10711059
            *Final Year Project 2014
        */
include_once '..//Connection/taskmodel.php';
$conn = connect();
//Get credentials from form
$username = $_POST['username'];
$password = $_POST['password'];
//print


$sql = $conn->query("SELECT count(*) AS sum FROM Member WHERE M_Email = '$username' AND M_Password = '$password'");
//$stmt = sqlsrv_prepare($conn, $sql, array( &$username, &$password));
$result=$sql->fetch();
echo $result['sum'];

if ($result['sum'] === '0') {
    header("location:loginError.php");
    //return FALSE;
} else {
    echo $result['sum'];
    $sql->closeCursor();
    $data = $conn->query("SELECT * FROM Member WHERE M_Email = '$username' AND M_Password = '$password'");
    $result1 = $data->fetch();
    $fname = $result1['M_F_Name'];
    $lname = $result1['M_L_Name'];
    //echo $result['sum'];
    if ($result1['M_Email'] === $username && $result1['M_Password'] === $password) {
        setcookie("ID", $result1['M_ID'], time()+3600, '/', 'azurewebsites.net');
        setcookie("Society", $result1['S_ID'], time()+3600, '/', 'azurewebsites.net');
        setcookie("User", $username, time()+3600, '/', 'azurewebsites.net');
        setcookie("FName", $fname, time()+3600, '/', 'azurewebsites.net');
        setcookie("LName", $lname, time()+3600, '/', 'azurewebsites.net');
        //session_register("username");
        //session_register("password");
        header("location:memberMain.php");
    }
}
?>

<html></html>


