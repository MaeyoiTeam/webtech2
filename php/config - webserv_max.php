<?php
define('servername','webservhost');
define('username','jakapatb_max');
define('password','ichigo2654');
define('dbname','jakapatb_59010187');
$objCon=mysqli_connect(servername,username,password,dbname);
mysqli_query($objCon,"set character set utf8");
mysqli_query($objCon,"SET NAMES UTF8");
?>