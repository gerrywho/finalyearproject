<?php
    setcookie("ID", "", time()-3600);
    setcookie("User", "", time()-3600);
    setcookie("Name", "", time()-3600);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../CSS/index.css">
        <link rel="stylesheet" type="text/css" href="..//CSS/bootstrap.css">
        <link rel="stylesheet" href="..//CSS/responsive.css" media="screen and (max-device-width: 601px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 2) and (device-aspect-ratio: 25/38)">
    </head>

    <body>

        <div id="grad1">
            <div id="grad2"><img src="../Images/minilogo.png" alt="logo">
            </div>
            <div id="plane">

                <form action="checkmemberlogin.php" method="post">
                    <div id="heading"><h2>Member Login</h2></div>

                    <div class="form-group">
                        <h5><label for="username" class="col-sm-2 control-label">Username:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="username" type="text" placeholder="Username" autofocus="true" /></td>
                        </div>
                    </div>

                    <div class="form-group">
                        <h5><label for="password" class="col-sm-2 control-label">Password:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" name="password" type="password" placeholder="password" /></td>
                        </div>
                    </div>
                    <div id="submit">
                        <input type="submit" class="btn btn-primary" value="LOGIN" />
                    </div>


                </form>

            </div>
        </div>

    </body>
</html>