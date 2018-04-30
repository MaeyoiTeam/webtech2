<?php
    session_start();
    $CourseID = trim($_POST['CourseID']);
    $CourseName = trim($_POST['CourseName']);
    $credit = trim($_POST['credit']);
    $TeacherID = trim($_POST['TeacherID']);
    include("config.php");
    if($CourseID == "")
    {
        echo "<script type='text/javascript'>alert('Please input Course ID!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($CourseName == "")
    {
        echo "<script type='text/javascript'>alert('Please input Course Name!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($credit == "")
    {
        echo "<script type='text/javascript'>alert('Please input Credit!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($TeacherID == "")
    {
        echo "<script type='text/javascript'>alert('Please input Teacher ID!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }

    $strSQL = "SELECT course.ID , course.course_name FROM course WHERE course.ID = '".$CourseID."' AND course.course_name = '".$CourseName."'";
    $objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if($objResult)
    {
        echo "<script type='text/javascript'>alert('This Course is already exists!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
    }
    else
    {
        $strSQL = "INSERT INTO `course`(`ID`, `course_name`, `Credit`, `teacher_ID`) VALUES ('".$CourseID."','".$CourseName."','".$credit."','".$TeacherID."')";
        $objQuery = mysqli_query($objCon,$strSQL);
        echo "<script type='text/javascript'>alert('Create Success!');</script>";
        //echo "<script type='text/javascript'>window.location='login.php';</script>";
    }
    
    echo "<script type='text/javascript'>window.location='../course_teacher.php';</script>";
    
mysqli_close($objCon);
?>