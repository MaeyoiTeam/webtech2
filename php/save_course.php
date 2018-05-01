<?php
    session_start();
    $CourseID = trim($_POST['CourseID']);
    $CourseName = trim($_POST['CourseName']);
    $credit = trim($_POST['credit']);
    $sec = trim($_POST['sec']);
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

    $strSQL = "SELECT coursesec.* FROM coursesec WHERE coursesec.course_ID = '".$CourseID."' AND coursesec.sec = '".$sec."'";
    $objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if($objResult)
    {
        echo "<script type='text/javascript'>alert('This Course and sec is already exists!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
    }
    else
    {
        $strSQL = "INSERT INTO `course`(`ID`, `course_name`, `Credit`, `teacher_ID`) VALUES ('".$CourseID."','".$CourseName."','".$credit."','".$_SESSION['ID']."')";
        $objQuery = mysqli_query($objCon,$strSQL);
        $strSQL = "INSERT INTO `coursesec`(course_ID,sec) VALUES ('".$CourseID."','".$sec."')";
        $objQuery = mysqli_query($objCon,$strSQL);
        echo "<script type='text/javascript'>alert('Create Success!');</script>";
        //echo "<script type='text/javascript'>window.location='login.php';</script>";
    }
    
    echo "<script type='text/javascript'>window.location='../course_teacher.php';</script>";
    
mysqli_close($objCon);
?>