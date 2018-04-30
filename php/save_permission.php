<?php
session_start();

include('config.php');

    $subject=$_SESSION["course_ID"];
	$date=$_POST['date'];
    $date2=$_POST['date2'];
    $note = $_POST['note'];

$sql = "SELECT studentcourse.ID FROM studentcourse
WHERE studentcourse.course_ID='".$subject."'
AND studentcourse.student_ID='".$_SESSION['ID']."'";
$objQuery = mysqli_query($objCon,$sql);
$row = mysqli_fetch_row($objQuery);






$sql = "INSERT INTO swap(ID,swap.studentcourse_ID,swap.current_couresedate,swap.move_coursedate,swap.note)
VALUES(null,'".$row[0]."','".$date."','".$date2."','".$note."')";
$objQuery = mysqli_query($objCon,$sql);
if($objQuery){
    echo "<script LANGUAGE='JavaScript'>window.alert('Permission Success');window.location.href='../course_student.php';</script>";
}
else{
echo "<script LANGUAGE='JavaScript'>window.alert('Permission Fail');window.location.href='../course_student.php';</script>";
}

?>