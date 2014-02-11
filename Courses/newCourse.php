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
        <form action="addCourse.php" method="post">
            <h2 >NEW COURSE</h2>
        <table border="1">
			<tr>
				<td>Course Name: </td>
				<td><input name="itemname" type="text" autofocus="true"/></td>
			</tr>
			<tr>
				<td>Address 1: </td>
				<td><input name="itemaddress" type="text" placeholder="Address"/></td>
			</tr>
			<tr>
				<td>Town: </td>
				<td><input name="itemtown" type="text" placeholder="Town"/></td>
			</tr>
            <tr>
				<td>County: </td>
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
