<?php
//include_once 'Connection/taskmodel.php';
setcookie("ID", "", time()-3600);
setcookie("User", "", time()-3600);
setcookie("Name", "", time()-3600);
?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">
    </head>

<body>

    <div id="grad1">
        <div id="grad2"><img src="../Images/minilogo.png" alt="logo">
        </div>
    <div id="plane">
    <table width="300" border="0" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
        <tr>
            <form name="form1" method="post" action="checklogin.php">
                <td>
    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
            <td colspan="3"><strong>Society Login </strong></td>
        </tr>
        <tr>
            <td width="78">Username</td>
            <td width="6">:</td>
            <td width="294"><input name="username" type="text" id="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input name="password" type="text" id="password"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Login"></td>
        </tr>
    </table>
        </td>
            </form>
    </tr>
    </table>
        </div>
        </div>

    </body>
</html>