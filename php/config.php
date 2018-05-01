<?php
define('servername','webservhost');
define('username','basnamfon_namfon');
define('password','basnamfon27');
define('dbname','basnamfon_basnamfon');
$objCon=mysqli_connect(servername,username,password,dbname);
mysqli_query($objCon,"set character set utf8");
mysqli_query($objCon,"SET NAMES UTF8");
?>