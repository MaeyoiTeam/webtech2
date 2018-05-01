<?php
    session_start();
    $CourseID = trim($_POST['CourseID']);
    $sec = trim($_POST['sec']);
    $studentID = $_SESSION['ID'];
    include("config.php");
    if($CourseID == "")
    {
        echo "<script type='text/javascript'>alert('Please input Course ID!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($sec == "")
    {
        echo "<script type='text/javascript'>alert('Please input Sec!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }

        $strSQL = "INSERT INTO `studentcourse`(`course_ID`, `student_ID`, `sec`) VALUES ('".$CourseID."','".$studentID."','".$sec."')";
        $objQuery = mysqli_query($objCon,$strSQL);
        echo "<script type='text/javascript'>alert('Join Success!');</script>";
        //echo "<script type='text/javascript'>window.location='login.php';</script>";
    
    echo "<script type='text/javascript'>window.location='../course_student.php';</script>";
    
mysqli_close($objCon);
?>