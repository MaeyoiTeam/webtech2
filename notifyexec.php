<?php
include('php/config.php');
date_default_timezone_set("Asia/Bangkok");
?>
<?php
$txt=@$_POST["message"];
$idtest = @$_SESSION["ID"]="90000001";
$strSQL="INSERT INTO noticemsg (teacher_ID,message,date_time) VALUES ('".$idtest."','".$txt."','".date("Y-m-d H:i:s")."')" ;
$result=$objCon->query($strSQL);
if($result)
{
header("location:timeline_teacher.php");
}
?>
