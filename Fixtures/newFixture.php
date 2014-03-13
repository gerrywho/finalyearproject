<?php
    include_once '..//Connection/taskmodel.php';
    
    $conn=connect();
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
                <form action="addFixture.php" method="post">
                    <div id="heading"><h2>NEW FIXTURE</h2></div>

                    <div class="form-group">
                        <h5><label for="courses" class="col-sm-2 control-label">Society Name:</label></h5>
                        <div class="col-sm-10">
                            <select name="courses" class="form-control">
                                <?php foreach($array as $option) : ?>
                                <option value="<?php echo $option->C_ID; ?>"><?php echo $option->C_Name; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemdate" class="col-sm-2 control-label">Date:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemdate" type="date" placeholder="Date" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemtime" class="col-sm-2 control-label">Start Time:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemtime" type="time" placeholder="Time" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemholes" class="col-sm-2 control-label">Holes:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemholes" type="number" placeholder="Holes" /></td>
                        </div>
                    </div>
                    <div id="fixsubmit">
                        <input type="submit" class="btn btn-primary" value="ADD FIXTURE" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>