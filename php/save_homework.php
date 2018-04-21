<?php
include('config.php');
date_default_timezone_set("Asia/Bangkok");
$course =$_POST["course"];
$txt = explode("/",$course);
$name=$_POST['name'];
$note=$_POST['note'];
$finish=$_POST['finish'];
$time=$_POST['time'];
$start = date('Y-m-d');
$strSQL = "INSERT INTO homework (ID,name,note,course_ID,sec,date_start,date_finish,time_finish) VALUES (null,'".$name."','".$note."', '".$txt[0]."' , '".$txt[1]."' , '".$start."','".$finish."','".$time."')";
		$objQuery = mysqli_query($objCon,$strSQL);
        $objResult = mysqli_fetch_array($objQuery);
//โคตรชิบหาย ตรงเก็บข้อมูลให้ตรงกับ date ที่มี  
if($objResult ){
    echo "<script LANGUAGE='JavaScript'>window.alert('Upload Success');window.location.href='../course.php';</script>";
}
else{
echo "<script LANGUAGE='JavaScript'>window.alert('Upload Fail');window.location.href='../course.php';</script>";
}
?>