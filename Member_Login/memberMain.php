<?php
    //$memberfname= $_COOKIE["FName"];
    //$memberlname= $_COOKIE["LName"];
    require_once '/fixtures.php';
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="..//CSS/index.css">
        <link rel="stylesheet" type="text/css" href="..//CSS/bootstrap.css">
    </head>
    <body>


        <div id="grad1">
            <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
            </div>

            <div id="fixtures">
                <h1 align="center">FIXTURES</h1>
                <?php
                     echo '<table class="table" align="center">';
                     echo'<tr><td>Date</td><td>Time</td><td>Course</td></tr>';
                    for ($x=0;$x<$length;$x++) {
                        echo '<tr>';
                        echo '<td>'.$array[$x]->R_Date.'</td>';
                        echo '<td>'. date("H:i", strtotime($array[$x]->R_Time)). '</td>';
                        echo '<td>'.$array[$x]->C_Name;'</td>';
                        echo '</tr>';
                    }
                    echo '</table>';
                ?>
            </div>

            <div id="graph">
                <h1 align="center">HANDICAP PROGRESS</h1>
            </div>

            <div id="results">
                <h1 align="center">YOUR LATEST RESULTS</h1>
            </div>

            <div id="latest">
                <h1 align="center">LATEST COMPETITION</h1>
            </div>

        </div>





    </body>
</html>