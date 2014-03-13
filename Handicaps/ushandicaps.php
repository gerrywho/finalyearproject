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
        <link rel="stylesheet" type="text/css" href="..//CSS/bootstrap.css">
        <script src="http://code.jquery.com/jquery-1.11.0.js"></script>
        <script src="myScript.js"></script>
    </head>
    <body>
        <div id="grad1">
            <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
                <button name="logout" id="logout" value="LOGOUT" onclick="parent.location='..//logout.php'">LOGOUT</button>
            </div>

            <div id="plane">
                <form action="getHcap.php" method="post">
                    <div id="heading"><h2>HANDICAP ADJUSTMENT</h2></div>

                    <div class="form-group">
                        <h5><label for="members" class="col-sm-2 control-label">Player Name:</label></h5>
                        <div class="col-sm-10">
                            <select name="members" class="form-control" id="members">
                                <?php foreach($array as $option) : ?>
                                <option value="<?php echo $option->M_ID; ?>"><?php echo "$option->M_F_Name $option->M_L_Name"; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    
                  
                     <div id="submit">
                        <input type="submit" value="Add item" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
