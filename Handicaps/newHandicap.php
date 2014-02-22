<?php
include_once '..//Connection/taskmodel.php';

//Connection to database
$conn=connect();

//Get Society ID from cookie
$society=$_COOKIE["ID"];


//Code for array for member dropdown
//SQL for all members in logged in society
$sql = "SELECT * FROM Member WHERE S_ID = '$society' ORDER BY M_L_Name";
$data = $conn->query($sql);

while($array[] = $data->fetch(PDO::FETCH_OBJ))
{
    echo $array->M_F_Name;
}
array_pop($array);
?>

<html lang="en">
    <head>
       <link rel="stylesheet" type="text/css" href="..//CSS/index.css">
        <script src="http://code.jquery.com/jquery-1.11.0.js"></script>
        <script src="myScript.js"></script>
    </head>
    <body>
       <div id="grad1">
        <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
        </div>
          
        <div id="plane">
        <form action="addHandicap.php" method="post">
            <h2 >HANDICAP ADJUSTMENT</h2>
        <table border="1">
			<tr>
				<td>Course Name: </td>
				<td><select name="members">
                    <?php foreach($array as $option) : ?>
                    <option value="<?php echo $option->M_ID; ?>"><?php echo "$option->M_F_Name $option->M_L_Name"; ?></option>
                    <?php endforeach; ?>
                </select>
                </td>
			</tr>
            <tr>
				<td>H/C  Adjustment: </td>
				<td><input name="itemadjust" type="number" min="-10" max="4.0" step="0.1" placeholder="H/C Adustment" /></td>
			</tr>
            
            </table>
		<input type="submit" value="Add item"/>
	    </form>
        </div>
      </div> 
    </body>
</html>