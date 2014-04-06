<?php
    include_once '..//Connection/taskmodel.php';
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="..//CSS/index.css">
        <link rel="stylesheet" type="text/css" href="..//CSS/bootstrap.css">
        <meta charset="utf-8" />
        </head>

    <body>
        <div id="grad1">
            <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
                <div class="btn-group" style="margin-left:10px; margin-right: auto; margin-top: 10px">
                    
                    <button name="logout" style="margin-left:10px; margin-top: 5px" class="btn btn-default" id="logout" value="LOGOUT" onclick="parent.location='..//logout.php'">LOGIN</button>

                </div>
            </div>

            <div id="plane">
                <form action="addSociety.php" method="post">
                    <div id="heading"><h2>NEW SOCIETY</h2></div>

                    <div class="form-group">
                        <h5><label for="itemname" class="col-sm-2 control-label">Society Name:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemname" type="text" placeholder="Society Name" autofocus="true" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itememail" class="col-sm-2 control-label">Email:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itememail" type="email" placeholder="Email" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itempwd" class="col-sm-2 control-label">Password:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itempwd" type="password" placeholder="Password" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="itemcontact" class="col-sm-2 control-label">Contact No.:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="itemcontact" type="text" placeholder="Contact No." /></td>
                        </div>
                    </div>
                    <div id="socsubmit">
                        <input type="submit" class="btn btn-primary" value="ADD SOCIETY" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
