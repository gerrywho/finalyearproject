<?php
include_once '..//Connection/taskmodel.php';

$conn=connect();
$sql = "select M_ID, count(*) as Wins from
(select top(3) M_ID from Player_Round order by M_ID desc) as a group by (M_ID);";
$data = $conn->query($sql);

while($array[] = $data->fetch(PDO::FETCH_OBJ))
{
    echo $array->M_ID;
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
            <button name="logout" id="logout" value="LOGOUT" onclick="parent.location='..//logout.php'">LOGOUT</button>
        </div>
          
        <div id="plane">
        <?php echo $newArray->C_Name;?>
       <div id="draw"></div>
            </div>
            </div>
    </body>
</html>
