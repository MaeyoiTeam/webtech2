<?php
include("config.php");
if(isset($_POST['class_id'])){
	$class_id= $_POST['class_id'];
	if($class_id==""){
        echo "<script type='text/javascript'>alert('กรุณากรอกห้องเรียน!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();}
	}
if(isset($_POST['seat_row'])){
	$stu_row= $_POST['seat_row'];
	if($stu_row==""){
        echo "<script type='text/javascript'>alert('กรุณากรอกแถว!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();}
	}	
if(isset($_POST['seat_col'])){
	$stu_col= $_POST['seat_col'];
	if($stu_col==""){
        echo "<script type='text/javascript'>alert('กรุณากรอกหลัก!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();}
	}
if(isset($_POST['seat_num'])){
	$stu_num= $_POST['seat_num'];
	if($stu_num==""){
        echo "<script type='text/javascript'>alert('กรุณากรอกที่นั่ง!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();}
}
//test test


//if(trim($_POST["seat_col"])){
//	echo "กรุณากรอกจำนวนหลัก";
//	exit();
//}
//if(trim($_POST["seat_num"])){
//	echo "กรุณากรอกจำนวนที่นั่งต่อ 1 โต๊ะ";
//	exit();
//}


if($class_id!="" && $stu_row!="" && $stu_col!="" && $stu_num!=""){
    $strSQL = "SELECT * FROM `seat` WHERE seat.course_ID = '".$class_id."'";
    $objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if($objResult)
    {
        $strSQL = "UPDATE `seat` SET `seat_row`='$stu_row' , `seat_col`='$stu_col' , `seat_num`='$stu_num' WHERE seat.course_ID = '$class_id'";
	   $objQuery = mysqli_query($objCon,$strSQL);
        echo "<script type='text/javascript'>alert('Updated Seat');</script>";
        echo "<script type='text/javascript'>window.location='../course_teacher.php';</script>";	
    }
    else
    {
        $strSQL="INSERT INTO `seat`(`course_ID`, `seat_row`, `seat_col`, `seat_num`) VALUES ('".$class_id."','".$stu_row."','".$stu_col."','".$stu_num."')";
        $objQuery = mysqli_query($objCon,$strSQL);
        echo "<script type='text/javascript'>alert('Created Seat');</script>";
        echo "<script type='text/javascript'>window.location='../course_teacher.php';</script>";	
    }
    
   
}

	mysqli_close($objCon);
?>