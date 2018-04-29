<?php
session_start();

	include("config.php");
	$subject=$_SESSION["course_ID"];
	$date=$_POST['date'];
	$sec=$_SESSION["sec"];
    $date2=$_POST['date2'];

//    function swap($subject,$sec,$date,$date2,$ID){    
// for find coursedate.ID
    $class ="SELECT coursedate.ID FROM coursedate WHERE coursedate.course_ID = '".$subject."' AND coursedate.sec = '".$sec."' AND coursedate.date_date = '".$date."' ";
    $result=mysqli_query($objCon,$class);
    $row=mysqli_fetch_row($result);

    // for find sec from subject,date
    $class2 ="SELECT coursedate.sec FROM coursedate WHERE coursedate.course_ID = '".$subject."' AND coursedate.date_date = '".$date2."' ";
    $result=mysqli_query($objCon,$class2);
    $row2=mysqli_fetch_row($result);

     // for find studentcoursedate from subject,sec,ID
    $class3 ="SELECT studentcourse.ID FROM studentcourse WHERE studentcourse.course_ID = '".$subject."' 
    AND studentcourse.student_ID = '".$_SESSION['ID']."' AND studentcourse.sec = '".$sec."'";
    $result=mysqli_query($objCon,$class3);
    $row3=mysqli_fetch_row($result);

    $class4 =   "SELECT studentcoursedate.sec FROM studentcourse , studentcoursedate 
                WHERE studentcourse.ID = studentcoursedate.studentcourse_ID 
                AND studentcourse.ID = '".$row3[0]."' AND studentcoursedate.date_date='".$date."'";
        $result=mysqli_query($objCon,$class4);
        $row4=mysqli_fetch_row($result);


//FIXME มีลัคสักอย่าง
    $sqlWait = "UPDATE studentcoursedate SET studentcoursedate.sec = '".$row2[0]."', studentcoursedate.date_date = '".$date2."' 
        WHERE  studentcoursedate.studentcourse_ID = '".$row[0]."' AND studentcoursedate.date_date = '".$date."' AND studentcoursedate.sec = '".$row4[0]."'";
    $result=mysqli_query($objCon,$sqlWait);
//}

//    swap($subject,$sec,$date,$date2,$_SESSION["ID"]);
     //echo ("<script LANGUAGE='JavaScript'>window.alert('Swap compelete');window.location.href='student_course.php';</script>");
     echo ("<script LANGUAGE='JavaScript'>window.alert('row=$row[0]row2=$row2[0]row4=$row4[0] $date /$date2');;</script>");
	
mysqli_close($objCon);
?>
