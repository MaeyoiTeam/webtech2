<?php
session_start();

	include("config.php");
	$subject=$_SESSION["course_ID"];
	$date=$_POST['date'];
	$sec=$_SESSION["sec"];
    $date2=$_POST['date2'];
    // for find coursedate.ID
    $class ="SELECT coursedate.ID FROM coursedate WHERE coursedate.course_ID = '".$subject."' AND coursedate.sec = '".$sec."' AND coursedate.date_date = '".$date."' ";
    $result=mysqli_query($objCon,$class);
    $row=mysqli_fetch_row($result);

    // for find sec from subject,date
    $class2 ="SELECT coursedate.ID FROM coursedate WHERE coursedate.course_ID = '".$subject."' AND coursedate.date_date = '".$date2."' ";
    $result=mysqli_query($objCon,$class2);
    $row2=mysqli_fetch_row($result);

     // for find studentcoursedate from subject,sec,ID
    $class3 ="SELECT studentcourse.ID FROM studentcourse WHERE studentcourse.course_ID = '".$subject."' AND studentcourse.student_ID = '".$_SESSION["ID"]."'
    AND studentcourse.ID = '".$sec."'";
    $result=mysqli_query($objCon,$class3);
    $row3=mysqli_fetch_row($result);


    $sqlWait = "UPDATE studentcoursedate SET studentcoursedate.sec = '".$row2[0]."', studentcoursedate.date_date = '".$date2."' 
        WHERE  studentcoursedate.studentcourse_ID = '".$row[0]."' AND studentcoursedate.date_date = '".$date."' AND studentcoursedate.sec = '".$sec."'";
    $result=mysqli_query($objCon,$sqlWait);
    


     echo ("<script LANGUAGE='JavaScript'>window.alert('Swap compelete');window.location.href='student_course.php';</script>");
	
mysqli_close($objCon);
?>
