<?php
        /** Gerard Nugent 
                *C10711059
                *Final Year Project 2014
            */
    include_once 'Connection/taskmodel.php';
    setcookie("ID", "", time()-3600, '/', 'azurewebsites.net');
    setcookie("User", "", time()-3600, '/', 'azurewebsites.net');
    setcookie("Name", "", time()-3600, '/', 'azurewebsites.net');
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/index.css">
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
        <link rel="stylesheet" href="CSS/responsive.css" media="screen and (max-device-width: 601px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 2) and (device-aspect-ratio: 25/38)">
    </head>
    <body>


        <div id="grad1">
            <div id="grad2"><img src="Images/minilogo.png" alt="logo">

            </div>
            <div id="buttonplane">
                <div id="go" class="btn-group btn-group-lg"><button type="button" class="btn btn-primary" onclick="parent.location='Login/login.php'">SOCIETY LOGIN</button>
                </div>
                <div id="keep" class="btn-group btn-group-lg"><button type="button" class="btn btn-primary" onclick="parent.location='Member_Login/memberLogin.php'">MEMBER LOGIN</button>
                </div>
                <div id="go1" class="btn-group btn-group-lg"><button type="button" class="btn btn-primary" onclick="parent.location='Society/newSociety.php'">NEW SOCIETY</button>
                </div>


            </div>
        </div>




    </body>
</html>
