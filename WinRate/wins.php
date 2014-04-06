<?php
include_once '..//Connection/taskmodel.php';

$conn=connect();
$sql = "select  M_ID, M_F_NAME+ ' ' + M_L_NAME as Name, count(*) as Wins from
(select top(10) M.M_ID, M_F_NAME, M_L_NAME from PLAYER_ROUND PR join MEMBER M on (M.M_ID = PR.M_ID) order by M_ID desc) 
as A group by M_ID, M_F_NAME, M_L_NAME;";
$data = $conn->query($sql);

while($array[] = $data->fetch(PDO::FETCH_OBJ))
{
    echo $array->Diff;
    //$newArray.array_push($array->C_ID);
}
array_pop($array);

/*while ($i < count($array)){
$newArray += ($array->C_ID);
$i++;
};

*/
/*$newArray = array(
0 => 32,
1 => 34
)*/
//$newArray = array_column($array, 'C_Name');


?>

<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="..//CSS/index.css">
        <link rel="stylesheet" type="text/css" href="..//CSS/bootstrap.css">
        <meta charset="utf-8" />
        
        <script src="raphael.js"></script>
        <script src="g.raphael-min.js"></script>
        <script src="g.pie-min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.0.js"></script>
        <script src="custom.js"></script>
        <script type="text/javascript">
            var jArray= JSON.parse('<?php echo json_encode($array ); ?>');

      
        </script>
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
          
        <div id="plane">
        <?php echo $newArray->C_Name;?>
       <div id="draw"></div>
            </div>
            </div>
    </body>
</html>
