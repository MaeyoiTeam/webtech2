<?php
define('servername','localhost');
define('username','root');
define('password','root');
define('dbname','webtech-project');
$objCon=mysqli_connect(servername,username,password,dbname);
mysqli_query($objCon,"set character set utf8");
mysqli_query($objCon,"SET NAMES UTF8");
?>