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



//Code for array for round date
//SQL for all round dates for logged in society
$sql1 = "SELECT * FROM Round WHERE S_ID = '$society'";
$data1 = $conn->query($sql1);

while($array1[] = $data1->fetch(PDO::FETCH_OBJ))
{
    echo $array1->R_Date;
}
array_pop($array1);

?>

<html lang="en">
    <head>
       <link rel="stylesheet" type="text/css" href="..//CSS/index.css">
        <script src="http://code.jquery.com/jquery-1.11.0.js"></script>
        <script type="text/javascript">
            $(function () {
                document.getElementById('manual').onclick =
                function () {
                    if (($("#manual").val() == "unchecked")) {
                        $("#manual").val("checked");
                        $("#manadjust").prop('disabled', false);
                        alert($("#manual").val());
                    }
                    else {
                        $("#manual").val("unchecked");
                        $("#manadjust").prop('disabled', true);
                        alert($("#manual").val());
                    }
                };
            });
        </script>

    </head>
    <body>
       <div id="grad1">
        <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
        </div>
          
        <div id="plane">
        <form action="addScore.php" method="post">
            <h2 >NEW SCORES</h2>
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
				<td>Round Date: </td>
				<td><select name="rounds">
                    <?php foreach($array1 as $option) : ?>
                    <option value="<?php echo $option->R_ID; ?>"><?php echo "$option->R_Date"; ?></option>
                    <?php endforeach; ?>
                </select></td>
			</tr>
			<tr>
				<td>Prize: </td>
				<td><select name="prizes">
                    <option value="No Prize">No Prize</option>
                    <option value="First Net">First Net</option>
                    <option value="Second Net">Second Net</option>
                    <option value="Third Net">Third Net</option>
                    <option value="Class 1">Class 1</option>
                    <option value="Class 2">Class 2</option>
                    <option value="Class 3">Class 3</option>
                    <option value="Nearest the Pin">Nearest the Pin</option>
                    <option value="Longest Drive">Longest Drive</option>
                </select></td>
			</tr>
            <tr>
				<td>Score: </td>
				<td><input name="itemscore" type="number" placeholder="Score"/></td>
			</tr>
            <tr>
            <td><input type="checkbox" value="unchecked" id="manual">Adjust Handicap Manually</td>
            </tr>
             <tr>
				<td>H/C  Adjustment: </td>
				<td><input name="itemadjust" id="manadjust" type="number" min="-10" max="0.1" step="0.1" placeholder="H/C Adustment" disabled="disabled"/></td>
			</tr>
            
            </table>
            <span id="ifchecked"> </span>
		<input type="submit" value="Add item"/>
	    </form>
        </div>
      </div> 
    </body>
</html>
