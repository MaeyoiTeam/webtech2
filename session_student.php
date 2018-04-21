<?php

if(session_id()===''){
session_start();
}
$_SESSION['ID']="59010187";
$_SESSION['Status']='Student';
echo $_SESSION['ID']."<br>";
echo $_SESSION['Status']."<br>";

?>