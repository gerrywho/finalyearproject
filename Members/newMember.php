<?php
include_once '..//Connection/taskmodel.php';
?>

<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="..//CSS/index.css">
    </head>
    <body>
       <div id="grad1">
        <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
        </div>
          
        <div id="plane">
        <form action="addMember.php" method="post">
            <h2 >NEW MEMBER</h2>
        <table border="1">
			<tr>
				<td>Member First Name: </td>
				<td><input name="itemfname" type="text" autofocus="true"/></td>
			</tr>
            <tr>
				<td>Member Last Name: </td>
				<td><input name="itemlname" type="text" /></td>
			</tr>
			<tr>
				<td>Member Email: </td>
				<td><input name="itememail" type="email" placeholder="Email"/></td>
			</tr>
			<tr>
				<td>Member Address: </td>
				<td><input name="itemaddress" type="text" placeholder="Address"/></td>
			</tr>
            <tr>
				<td>Member Town: </td>
				<td><input name="itemtown" type="text" placeholder="Town"/></td>
			</tr>
            <tr>
				<td>Member County: </td>
				<td><input name="itemcounty" type="text" placeholder="County"/></td>
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
