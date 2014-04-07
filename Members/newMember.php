<?php
    /** Gerard Nugent 
            *C10711059
            *Final Year Project 2014
        */
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
                <div class="btn-group" style="margin-left:10px; margin-right: auto; margin-top: 10px">
                    <button name="main" class="btn btn-default" id="main" onclick="parent.location='..//socMain.php'">MAIN MENU</button>
                    <button name="logout" style="margin-left:10px; margin-top: 5px" class="btn btn-default" id="logout" value="LOGOUT" onclick="parent.location='..//logout.php'">LOGOUT</button>

                </div>
            </div>

            <div id="plane">
                <form action="addmember.php" method="post">
                    <div id="heading"><h2>NEW MEMBER</h2></div>

                    <div class="form-group">
                        <h5><label for="itemfname" class="col-sm-2 control-label">First Name:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemfname" type="text" placeholder="First Name" autofocus="true" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemlname" class="col-sm-2 control-label">Last Name:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemlname" type="text" placeholder="Last Name" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itememail" class="col-sm-2 control-label">Email:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itememail" type="email" placeholder="Email" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemaddress" class="col-sm-2 control-label">Address:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemaddress" type="text" placeholder="Address" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemtown" class="col-sm-2 control-label">Town:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemtown" type="text" placeholder="Town" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemcounty" class="col-sm-2 control-label">County:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemcounty" type="text" placeholder="County" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemcontact" class="col-sm-2 control-label">Contact No.:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemcontact" type="text" placeholder="Contact No." /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemhandicap" class="col-sm-2 control-label">Handicap:</label></h5>
                        <div class="col-xs-2">
                            <input class="form-control" name="itemhandicap" type="number" min="0" max="36" /></td>
                        </div>
                    </div>

                    <div id="fixsubmit">
                        <input type="submit" class="btn btn-primary" value="ADD MEMBER" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
