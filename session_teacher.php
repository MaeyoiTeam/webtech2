<?php

if(session_id()===''){
session_start();
}
$_SESSION['ID']="90000001";
$_SESSION['Status']='Teacher';
echo $_SESSION['ID']."<br>";
echo $_SESSION['Status']."<br>";

?>