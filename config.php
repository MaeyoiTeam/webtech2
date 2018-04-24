<?php
$db_config=array(
    "servername"=>"webservhost",
    "username"=>"basnamfon_namfon",
    "password"=>"basnamfon27",
    "dbname"=>"basnamfon_basnamfon",
    "charset"=>"utf8");
    $mysqli = @new mysqli($db_config['servername'],$db_config['username'],$db_config['password'],$db_config['dbname']);
 if(mysqli_connect_error())
 {
     die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
     exit;
 } 
 if(!$mysqli->set_charset($db_config["charset"]))

?>