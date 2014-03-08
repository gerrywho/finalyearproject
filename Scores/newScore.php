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
        <link rel="stylesheet" type="text/css" href="..//CSS/bootstrap.css">
        <script src="http://code.jquery.com/jquery-1.11.0.js"></script>
        <script src="js/myScript.js" type="text/javascript"></script>

    </head>
    <body>
        <div id="grad1">
            <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
                <button name="logout" id="logout" value="LOGOUT" onclick="parent.location='./logout.php'">LOGOUT</button>
            </div>

            <div id="plane">
                <form action="addScore.php" method="post">
                    <div id="heading"><h2>NEW SCORES</h2></div>

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

                    <div class="form-group">
                        <h5><label for="rounds" class="col-sm-2 control-label">Round Date:</label></h5>
                        <div class="col-sm-10">
                            <select name="rounds" class="form-control">
                                    <?php foreach($array1 as $option) : ?>
                                    <option value="<?php echo $option->R_ID; ?>"><?php echo "$option->R_Date"; ?></option>
                                    <?php endforeach; ?>
                                </select>
                        </div>
                    </div>

                     <div class="form-group">
                        <h5><label for="prizes" class="col-sm-2 control-label">Prize:</label></h5>
                        <div class="col-sm-10">
                            <select name="prizes" class="form-control">
                                <option value="No Prize">No Prize</option>
                                    <option value="First Net">First Net</option>
                                    <option value="Second Net">Second Net</option>
                                    <option value="Third Net">Third Net</option>
                                    <option value="Class 1">Class 1</option>
                                    <option value="Class 2">Class 2</option>
                                    <option value="Class 3">Class 3</option>
                                    <option value="Nearest the Pin">Nearest the Pin</option>
                                    <option value="Longest Drive">Longest Drive</option>
                                </select>
                            </div>
                         </div>

                    <div class="form-group">
                        <h5><label for="itemscore" class="col-sm-2 control-label">Score:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemscore" type="number" placeholder="Score" required="required" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="checkboxname" class="col-sm-2 control-label">Manually Adjust:</label></h5>
                        <div class="col-sm-10">
                            <input type="checkbox" class="form-control" name="checkboxname" value="unchecked" id="manual"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemadjust" class="col-sm-2 control-label">Manual Adjustment:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" id="itemadjust" name="itemadjust" type="number" min="-10" max="0.1" step="0.1" placeholder="H/C Adustment" disabled="disabled" />
                        </div>
                    </div>

                    
                    <span id="ifchecked"> </span>
                    <div id="submit">
                    <input type="submit" class="btn btn-primary" value="Add item" />
                </div>
            </div>
        </div>
    </body>
</html>
