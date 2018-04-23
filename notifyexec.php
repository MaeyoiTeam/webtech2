<?php

session_start();

include('php/config.php');
date_default_timezone_set("Asia/Bangkok");
?>
<?php
$txt=@$_POST["message"];
$idtest = @$_SESSION["ID"];
$strSQL="INSERT INTO noticemsg (Teacher_ID,message,date_time) VALUES ('".$idtest."','".$txt."','".date("Y-m-d H:i:s")."')" ;
$result=$mysqli->query($strSQL);
if($result)
{
header("location:timeline_teacher.php");
}
?>
