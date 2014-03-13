<?php
    //$memberfname= $_COOKIE["FName"];
    //$memberlname= $_COOKIE["LName"];
    include_once '/fixtures.php';
    require_once '/memberscores.php';
    require_once '/lastround.php';
    require_once '/progress.php';
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="..//CSS/index.css">
        <link rel="stylesheet" type="text/css" href="..//CSS/bootstrap.css">
        <link rel="stylesheet" href="..//CSS/responsive.css" media="screen and (max-device-width: 601px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 2) and (device-aspect-ratio: 25/38)">
        <script src="http://code.jquery.com/jquery-1.11.0.js"></script>
        <script src="..//WinRate/raphael.js" type="text/javascript"></script>
        <script src="..//WinRate/g.raphael-min.js" type="text/javascript"></script>
        <script src="..//WinRate/g.line-min.js" type="text/javascript"></script>
        <script src="..//WinRate/g.pie-min.js" type="text/javascript"></script>
        <script src="js/myScript.js" type="text/javascript"></script>
        <script type="text/javascript">
            var jArray= JSON.parse('<?php echo json_encode($array3 ); ?>');
        </script>
    </head>
    <body>


        <div id="grad1">
            <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
            </div>

            <div id="fixtures">
                <h2 align="center">FIXTURES</h2>
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
                <h2 align="center">HANDICAP PROGRESS</h2>
                <?php //echo $newArray->C_Name;?>
                <div id="draw"></div>
            </div>

            <div id="results">
                <h2 text-align="center">YOUR LATEST RESULTS</h2>
                <?php
                     echo '<table class="table" align="center">';
                     echo'<tr><td>Course</td><td>Score</td><td>Prize</td></tr>';
                    for ($x=0;$x<$length;$x++) {
                        echo '<tr>';
                        echo '<td>'. $array1[$x]->C_Name. '</td>';
                        echo '<td>'.$array1[$x]->P_R_Score.'</td>';
                        echo '<td>'. $array1[$x]->prize; '</td>';
                    
                        echo '</tr>';
                    }
                    echo '</table>';
                ?>
            </div>

            <div id="latest">
                <h2 align="center">LATEST COMPETITION</h2>
                <?php
                     echo '<table class="table" align="center">';
                     echo'<tr><td>Course</td><td>Score</td><td>Prize</td></tr>';
                    for ($x=0;$x<$length;$x++) {
                        echo '<tr>';
                        echo '<td>'. $array2[$x]->M_F_Name . " " . $array2[$x]->M_L_Name. '</td>';
                        echo '<td>'.$array2[$x]->P_R_Score.'</td>';
                        echo '<td>'. $array2[$x]->prize; '</td>';
                    
                        echo '</tr>';
                    }
                    echo '</table>';
                ?>
            </div>

        </div>





    </body>
</html>