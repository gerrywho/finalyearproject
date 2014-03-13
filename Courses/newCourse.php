<?php
    include_once '..//Connection/taskmodel.php';
?>

<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="..//CSS/index.css">
        <link rel="stylesheet" type="text/css" href="..//CSS/bootstrap.css">
    </head>
    <body>
        <div id="grad1">
            <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
                <button name="logout" id="logout" value="LOGOUT" onclick="parent.location='..//logout.php'">LOGOUT</button>
            </div>

            <div id="plane">
                <form action="addCourse.php" method="post">
                    <div id="heading"><h2>NEW COURSE</h2></div>

                    <div class="form-group">
                        <h5><label for="itemname" class="col-sm-2 control-label">Course Name:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemname" type="text" placeholder="Course Name" autofocus="true" />
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemaddress" class="col-sm-2 control-label">Address:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemaddress" type="text" placeholder="Address" />
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemtown" class="col-sm-2 control-label">Town:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemtown" type="text" placeholder="Town" />
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemcounty" class="col-sm-2 control-label">County:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemcounty" type="text" placeholder="County" />
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemcontact" class="col-sm-2 control-label">Contact No.:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemcontact" type="text" placeholder="Contact No" />
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemscratch" class="col-sm-2 control-label">Standard Scratch:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemscratch" type="number" placeholder="Standard Scratch" />
                        </div>
                    </div>

                  

                    <div id="fixsubmit">
                        <input type="submit" class="btn btn-primary" value="ADD COURSE" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
