<?php
include_once 'Connection/taskmodel.php';
setcookie("ID", "", time()-3600, '/', 'azurewebsites.net');
setcookie("User", "", time()-3600, '/', 'azurewebsites.net');
setcookie("Name", "", time()-3600, '/', 'azurewebsites.net');
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/index.css">
</head>
<body>


<div id="grad1">
    <div id="grad2"><img src="Images/minilogo.png" alt="logo">
   
</div>
    <div id="plane">
        <table>
        <tr><td><input type="image" src="Images/player.png" onClick="parent.location='Member_Login/memberLogin.php'"></td></tr>
        <tr><td><input type="image" src="Images/society.png" onClick="parent.location='Login/login.php'"></td></tr>
        <tr><td><input type="image" src="Images/newSociety.png" onClick="parent.location='Society/newSociety.php'"></td></tr>
        </table>
</div>
    </div>
    

     

</body>
</html>
