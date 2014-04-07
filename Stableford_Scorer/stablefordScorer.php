<?php
    /** Gerard Nugent 
            *C10711059
            *Final Year Project 2014
        */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="..//CSS/index.css">
        <link rel="stylesheet" type="text/css" href="..//CSS/bootstrap.css">
        <script src="http://code.jquery.com/jquery-1.11.0.js"></script>
        <script src="js/indexes.js" type="text/javascript"></script>
        <script src="js/pars.js" type="text/javascript"></script>
        <script src="js/scores.js" type="text/javascript"></script>
        <script src="js/myScript.js" type="text/javascript"></script>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <div id="grad1">
            <div id="grad2"><img src="..//Images/minilogo.png" alt="logo">
                <div class="btn-group" style="margin-left:10px; margin-right: auto; margin-top: 10px">
                    <button name="main" class="btn btn-default" id="main" onclick="parent.location='..//socMain.php'">MAIN MENU</button>
                    <button name="logout" style="margin-left:10px; margin-top: 5px" class="btn btn-default" id="logout" value="LOGOUT" onclick="parent.location='..//logout.php'">LOGOUT</button>

                </div>
            </div>

            <div id="scorerplane">

                <table style="float: left">
                    <tr>
                        <td><h5><label for="hole1" class="col-sm-2 control-label">Hole</label></h5></td>
                        <td><h5><label for="par1" class="col-sm-2 control-label">Par</label></h5></td>
                        <td><h5><label for="index1" class="col-sm-2 control-label">Index</label></h5></td>
                        <td><h5><label for="score1" class="col-sm-2 control-label">Score</label></h5></td>
                        <td><h5><label for="net1" class="col-sm-2 control-label">Net</label></h5></td>
                    </tr>
                    <tr>
                        <td><span id="hole1" class="label label-info">1</span></td>
                        <td><select id="par1" class="form-control"></select></td>
                        <td><select id="index1" class="form-control"></select></td>
                        <td><select id="score1" class="form-control"></select></td>
                        <td><input class="input-sm" id="net1" name="net1" type="text" disabled="disabled"></td>

                    </tr>
                    <tr>
                        <td><span id="hole2" class="label label-info">2</span></td>
                        <td><select id="par2" class="form-control"></select></td>
                        <td><select id="index2" class="form-control"></select></td>
                        <td><select id="score2" class="form-control"></select></td>
                        <td><input class="input-sm" id="net2" name="net2" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole3" class="label label-info">3</span></td>
                        <td><select id="par3" class="form-control"></select></td>
                        <td><select id="index3" class="form-control"></select></td>
                        <td><select id="score3" class="form-control"></select></td>
                        <td><input class="input-sm" id="net3" name="net3" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole4" class="label label-info">4</span></td>
                        <td><select id="par4" class="form-control"></select></td>
                        <td><select id="index4" class="form-control"></select></td>
                        <td><select id="score4" class="form-control"></select></td>
                        <td><input class="input-sm" id="net4" name="net4" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole5" class="label label-info">5</span></td>
                        <td><select id="par5" class="form-control"></select></td>
                        <td><select id="index5" class="form-control"></select></td>
                        <td><select id="score5" class="form-control"></select></td>
                        <td><input class="input-sm" id="net5" name="net5" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole6" class="label label-info">6</span></td>
                        <td><select id="par6" class="form-control"></select></td>
                        <td><select id="index6" class="form-control"></select></td>
                        <td><select id="score6" class="form-control"></select></td>
                        <td><input class="input-sm" id="net6" name="net6" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole7" class="label label-info">7</span></td>
                        <td><select id="par7" class="form-control"></select></td>
                        <td><select id="index7" class="form-control"></select></td>
                        <td><select id="score7" class="form-control"></select></td>
                        <td><input class="input-sm" id="net7" name="net7" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole8" class="label label-info">8</span></td>
                        <td><select id="par8" class="form-control"></select></td>
                        <td><select id="index8" class="form-control"></select></td>
                        <td><select id="score8" class="form-control"></select></td>
                        <td><input class="input-sm" id="net8" name="net8" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole9" class="label label-info">9</span></td>
                        <td><select id="par9" class="form-control"></select></td>
                        <td><select id="index9" class="form-control"></select></td>
                        <td><select id="score9" class="form-control"></select></td>
                        <td><input class="input-sm" id="net9" name="net9" type="text" disabled="disabled"></td>
                    </tr>

                </table>

                <table style="float: left">
                    <tr>
                        <td><h5><label for="hole10" class="col-sm-2 control-label">Hole</label></h5></td>
                        <td><h5><label for="par10" class="col-sm-2 control-label">Par</label></h5></td>
                        <td><h5><label for="index10" class="col-sm-2 control-label">Index</label></h5></td>
                        <td><h5><label for="score10" class="col-sm-2 control-label">Score</label></h5></td>
                        <td><h5><label for="net10" class="col-sm-2 control-label">Net</label></h5></td>
                    </tr>
                    <tr>
                        <td><span id="hole10" class="label label-info">10</span></td>
                        <td><select id="par10" class="form-control"></select></td>
                        <td><select id="index10" class="form-control"></select></td>
                        <td><select id="score10" class="form-control"></select></td>
                        <td><input class="input-sm" id="net10" name="net10" type="text" disabled="disabled"></td>

                    </tr>
                    <tr>
                        <td><span id="hole11" class="label label-info">11</span></td>
                        <td><select id="par11" class="form-control"></select></td>
                        <td><select id="index11" class="form-control"></select></td>
                        <td><select id="score11" class="form-control"></select></td>
                        <td><input class="input-sm" id="net11" name="net11" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole12" class="label label-info">12</span></td>
                        <td><select id="par12" class="form-control"></select></td>
                        <td><select id="index12" class="form-control"></select></td>
                        <td><select id="score12" class="form-control"></select></td>
                        <td><input class="input-sm" id="net12" name="net12" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole13" class="label label-info">13</span></td>
                        <td><select id="par13" class="form-control"></select></td>
                        <td><select id="index13" class="form-control"></select></td>
                        <td><select id="score13" class="form-control"></select></td>
                        <td><input class="input-sm" id="net13" name="net13" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole14" class="label label-info">14</span></td>
                        <td><select id="par14" class="form-control"></select></td>
                        <td><select id="index14" class="form-control"></select></td>
                        <td><select id="score14" class="form-control"></select></td>
                        <td><input class="input-sm" id="net14" name="net14" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole15" class="label label-info">15</span></td>
                        <td><select id="par15" class="form-control"></select></td>
                        <td><select id="index15" class="form-control"></select></td>
                        <td><select id="score15" class="form-control"></select></td>
                        <td><input class="input-sm" id="net15" name="net15" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole16" class="label label-info">16</span></td>
                        <td><select id="par16" class="form-control"></select></td>
                        <td><select id="index16" class="form-control"></select></td>
                        <td><select id="score16" class="form-control"></select></td>
                        <td><input class="input-sm" id="net16" name="net16" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole17" class="label label-info">17</span></td>
                        <td><select id="par17" class="form-control"></select></td>
                        <td><select id="index17" class="form-control"></select></td>
                        <td><select id="score17" class="form-control"></select></td>
                        <td><input class="input-sm" id="net17" name="net17" type="text" disabled="disabled"></td>
                    </tr>
                    <tr>
                        <td><span id="hole18" class="label label-info">18</span></td>
                        <td><select id="par18" class="form-control"></select></td>
                        <td><select id="index18" class="form-control"></select></td>
                        <td><select id="score18" class="form-control"></select></td>
                        <td><input class="input-sm" id="net18" name="net18" type="text" disabled="disabled"></td>
                    </tr>

                </table>
                <div style="float: left">

                    <div class="form-group">
                        <h5><label for="handicap" class="col-sm-2 control-label">HANDICAP:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" id="handicap" name="handicap" type="number" min="0" max="36" step="1" />
                        </div>
                    </div>



                    <div class="form-group">
                        <h5><label for="endscore" class="col-sm-2 control-label">POINT SCORE:</label></h5>
                        <div class="col-sm-10">
                            <input class="form-control" id="endscore" name="endscore" type="number" min="0" max="64" step="1" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10">
                            <button type="button" id="submitbutton" class="btn btn-primary" onclick="myFunction()">CALCULATE</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
