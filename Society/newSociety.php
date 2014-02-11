<?php
include_once '..//Connection/taskmodel.php';
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="..//CSS/index.css">
        <meta charset="utf-8" />
        <title>LOGIN PAGE</title>
    </head>
    
<body>
    <div id="grad1">
        <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
        </div>
          
        <div id="plane">
        <form action="addSociety.php" method="post">
            <h2 >NEW SOCIETY</h2>
        <table border="1">
            <tr>
				<td>Society Name: </td>
				<td><input name="itemname" type="text" placeholder="Society Name"/></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input name="itememail" type="email" placeholder="Email"/></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input name="itempwd" type="password" placeholder="Password"/></td>
			</tr>
            <tr>
				<td>Contact No.: </td>
				<td><input name="itemcontact" type="text" placeholder="Contact No."/></td>
			</tr>
		</table>
		<input type="submit" value="Add item"/>
	    </form>
        </div>
      </div>
</body>
</html>
