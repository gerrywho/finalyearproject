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

    $conn = disconnect();

  
    
?>

<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="..//CSS/index.css">
        <link rel="stylesheet" type="text/css" href="..//CSS/bootstrap.css">
        <script src="http://code.jquery.com/jquery-1.11.0.js"></script>
        <script type="text/javascript">
            var jArray= JSON.parse('<?php echo json_encode($array1 ); ?>');

      
        </script>
        <script src="custom.js"></script>
        
    </head>
    <body>
        <div id="grad1">
            <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
               <div class="btn-group" style="margin-left:10px; margin-right: auto; margin-top: 10px">
                    <button name="main" class="btn btn-default" id="main" onclick="parent.location='..//socMain.php'">MAIN MENU</button>
                    <button name="logout" style="margin-left:10px; margin-top: 5px" class="btn btn-default" id="logout" value="LOGOUT" onclick="parent.location='..//logout.php'">LOGOUT</button>

                </div>
            </div>

            <div id="plane">
                <form action="uscalc.php" method="post">
                    <div id="heading"><h2>DAILY HANDICAP</h2></div>

                    <div class="form-group">
                        <h5><label for="members" class="col-sm-2 control-label">Player Name:</label></h5>
                        <div class="col-sm-10">
                            <select name="members" class="form-control" id="members">
                                <?php foreach($array as $option) : ?>
                                <option value="<?php echo $option->M_ID; ?>"><?php echo "$option->M_F_Name $option->M_L_Name"; ?></option>
                                <?php endforeach; ?>
                            </select>
                            </div>
                            <h5><label for="itemslope" class="col-sm-2 control-label">Slope Index:</label></h5>
                        <div class="col-xs-4">
                            <input class="form-control" id="itemslope" name="itemslope" type="number" min="55" max="155" step="1" placeholder="Slope" />
                        </div>
                        <h5><label for="itemscore" class="col-sm-2 control-label">Todays Handicap:</label></h5>
                        <div class="col-xs-4">
                        <input class="form-control" id="itemscore" name="itemscore" value="">
                            </div>
                        
                    </div>
                    <div id="status"></div>
                    
                  
                     <div id="submit">
                        <input type="submit" value="CALCULATE" />
                    </div>
                </form>
            </div>
        </div>
        
    </body>
</html>
