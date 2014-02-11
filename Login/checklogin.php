<?php
include_once '..//Connection/taskmodel.php';
$conn = connect();
//Get credentials from form
$username = $_POST['username'];
$password = $_POST['password'];
//print


$sql = $conn->query("SELECT count(*) AS sum FROM Society WHERE S_Email = '$username' AND S_Password = '$password'");
//$stmt = sqlsrv_prepare($conn, $sql, array( &$username, &$password));
$result=$sql->fetch();
echo $result['sum'];

if ($result['sum'] === '0') {
    header("location:/");
    //return FALSE;
} else {
    echo $result['sum'];
    $sql->closeCursor();
    $data = $conn->query("SELECT * FROM Society WHERE S_Email = '$username' AND S_Password = '$password'");
    $result1 = $data->fetch();
    $name = $result1['S_Name'];
    //echo $result['sum'];
    if ($result1['S_Email'] === $username && $result1['S_Password'] === $password) {
        setcookie("ID", $result1['S_ID']);
        setcookie("User", $username);
        setcookie("Name", $name);
        //session_register("username");
        //session_register("password");
        header("location:login_success.php");
    }
}
?>


