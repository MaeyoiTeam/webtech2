<?php
$db_config=array(
    "host"=>"webservhost", 
    "user"=>"sweetpork_moowan",
    "pass"=>"MooWan002", 
    "dbname"=>"sweetpork_moowandatabase",
    "charset"=>"utf8");
$mysqli = @new mysqli($db_config["host"], $db_config["user"], $db_config["pass"], $db_config["dbname"]);
if(mysqli_connect_error()) 
{
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
    exit;
}
if(!$mysqli->set_charset($db_config["charset"])) 
{ 
}
?>