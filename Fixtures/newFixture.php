<?php
//include_once '..//Connection/taskmodel.php';

 $host = "szs51v5v49.database.windows.net,1433";
    $user = "gerrywho";
    $pwd = "Westside1";
    $db = "societyAMXhvkfpT";

try{
		$conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch(Exception $e){
		die(print_r($e));
	}	
$sql = "SELECT * FROM Course";
$data = $conn->query($sql);

while($array[] = $data->fetch(PDO::FETCH_OBJ))
{
    echo $array->C_Name;
}
array_pop($array);

//print_r_html($array);
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
        <form action="addFixture.php" method="post">
            <h2 >NEW FIXTURE</h2>
        <table border="1">
			<tr>
				<td>Course Name: </td>
				<td><select name="courses">
                    <?php foreach($array as $option) : ?>
                    <option value="<?php echo $option->C_ID; ?>"><?php echo $option->C_Name; ?></option>
                    <?php endforeach; ?>
                </select>
                </td>
			</tr>
			<tr>
				<td>Date: </td>
				<td><input name="itemdate" type="date" placeholder="Date"/></td>
			</tr>
			<tr>
				<td>Start Time: </td>
				<td><input name="itemtime" type="time" placeholder="Time"/></td>
			</tr>
            <tr>
				<td>Number of Holes: </td>
				<td><input name="itemholes" type="number" placeholder="Holes"/></td>
			</tr>
            </table>
		<input type="submit" value="Add item"/>
	    </form>
        </div>
      </div> 
    </body>
</html>