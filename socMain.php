<?php
    
    echo $_COOKIE["Name"];
    
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="CSS/index.css">
        <link rel="stylesheet" type="text/css" href="..//CSS/bootstrap.css">
    </head>
    <body>
        <div id="grad1">
            <div id="grad2"><img src="Images/minilogo.png" alt="logo">
                <div class="btn-group" style="margin-left:10px; margin-right: auto; margin-top: 10px">

                    <button name="logout" style="margin-left:10px; margin-top: 5px" class="btn btn-default" id="logout" value="LOGOUT" onclick="parent.location='..//logout.php'">LOGOUT</button>

                </div>
            </div>
            <div id="plane">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-default btn-lg btn-block" onclick="parent.location='Members/newMember.php'">MEMBER</button>
                    </div>
                    <div class="col-md-6">
                        <input type="button" class="btn btn-default btn-lg btn-block" value="COURSES" onclick="parent.location='Courses/newCourse.php'">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-default btn-lg btn-block" value="FIXTURES" onclick="parent.location='Fixtures/newFixture.php'">FIXTURES</button>
                    </div>
                    <div class="col-md-6">
                        <input type="button" class="btn btn-default btn-lg btn-block" value="SCORES" onclick="parent.location='Scores/newScore.php'">
                    </div>
                </div>

            <div class="row">
            <div class="col-md-6">
                      <button type="button" class="btn btn-default btn-lg btn-block" value="FIXTURES" onclick="parent.location='Handicaps/newHandicap.php'">HANDICAPS</button>
                </div>
                <div class="col-md-6">
                    <input type="button"class="btn btn-default btn-lg btn-block" value="WINS" onclick="parent.location='WinRate/wins.php'">
                </div>
            </div>

            <div class="row">
            <div class="col-md-6">
                    <input type="button" class="btn btn-default btn-lg btn-block" value="H/C SHEET" onclick="parent.location='HCap_Sheet/hcapsheet.php'">
                </div>
                <div class="col-md-6">
                    <input type="button" class="btn btn-default btn-lg btn-block" value="S/F CHECKER" onclick="parent.location='Stableford_Scorer/stablefordScorer.php'">
                </div>
            </div>
                <div class="row">
                <div class="col-md-6">
                    <input type="button" class="btn btn-default btn-lg btn-block" value="USGA HANDICAP" onclick="parent.location='Handicaps/ushandicaps.php'">
                </div>
                    </div>

            </div>
        </div>


    </body>
</html>
