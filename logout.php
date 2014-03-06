<?php
include_once '..//Connection/taskmodel.php';

setcookie("ID", "", time()-3600, '/', 'azurewebsites.net');
setcookie("User", "", time()-3600, '/', 'azurewebsites.net');
setcookie("Name", "", time()-3600, '/', 'azurewebsites.net');
header('Location: ..//index.php');
?>


