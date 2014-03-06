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
                <form action="addMember.php" method="post">
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
                        <h5><label for="itememail" class="col-sm-2 control-label">Member Email:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itememail" type="email" placeholder="First Name" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemaddress" class="col-sm-2 control-label">Member Address:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemaddress" type="text" placeholder="Address" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemtown" class="col-sm-2 control-label">Member Town:</label></h5>
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
                    <div id="submit">
                        <input type="submit" class="btn btn-primary" value="SUBMIT" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
