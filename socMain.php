<?php

echo $_COOKIE["Name"];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <link rel="stylesheet" type="text/css" href="CSS/index.css">
    </head>
    <body>
       <div id="grad1">
    <div id="grad2"><img src="Images/minilogo.png" alt="logo">
   <button name="logout" id="logout" value="LOGOUT" onclick="parent.location='logout.php'">LOGOUT</button>
</div>
    <div id="plane">
        <table>
        <tr>
            <td><input type="button" value="Members" onClick="parent.location='Members/newMember.php'"></td>
            <td><input type="button" value="Courses" onClick="parent.location='Courses/newCourse.php'"></td>
        </tr>

        <tr>
            <td><input type="button" value="Fixtures" onClick="parent.location='Fixtures/newFixture.php'"></td>
            <td><input type="button" value="Scores" onClick="parent.location='Scores/newScore.php'"></td>
        </tr>

        <tr>
            <td><input type="button" value="Handicaps" onClick="parent.location='Handicaps/newHandicap.php'"></td>
            <td><input type="button" value="Win Rate" onClick="parent.location='WinRate/wins.php'"></td>
        </tr>

        <tr>
            <td><input type="button" value="Handicap Sheet" onClick="parent.location='HCap_Sheet/hcapsheet.php'"></td>
            <td><input type="button" value="Stableford Checker" onClick="parent.location='Stableford_Scorer/stablefordScorer.php'"></td>
        </tr>
            <tr>
            <td><input type="button" value="Get USGA Handicap" onClick="parent.location='Handicaps/ushandicaps.php'"></td>
            </tr>
        </table>
</div>
    </div>
    

    </body>
</html>
