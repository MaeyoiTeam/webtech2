<?php

$username=$_POST["username"];
$_SESSION["username"]=$username;

if(isset($_SESSION["username"]))        
        echo $_SESSION["username"];

?>