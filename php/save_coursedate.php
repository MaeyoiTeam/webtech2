<?php
    session_start();
    $CourseID = trim($_POST['CourseID']);
    $DayTime = trim($_POST['DayTime']);
    $Sec = trim($_POST['sec']);
    $Date = trim($_POST['datee']);
    include("config.php");
    if($CourseID == "")
    {
        echo "<script type='text/javascript'>alert('Please input Course ID!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($DayTime == "")
    {
        echo "<script type='text/javascript'>alert('Please input Day Time!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Sec == "")
    {
        echo "<script type='text/javascript'>alert('Please input Sec!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Date == "")
    {
        echo "<script type='text/javascript'>alert('Please input Teacher Date!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
        
        
        $strSQL = "SELECT * FROM `datedate` WHERE datedate.ID = '".$Date."')";
        $objQuery = mysqli_query($objCon,$strSQL);
        if($objQuery)
        {
            $strSQL = "INSERT INTO `datedate`(`ID`) VALUES ('".$Date."')";
            $objQuery = mysqli_query($objCon,$strSQL);
        }

        $strSQL = "INSERT INTO `coursedate`(`course_ID`, `sec`, `date_date`, `daytime_ID`) VALUES ('".$CourseID."','".$Sec."','".$Date."','".$DayTime."')";
        $objQuery = mysqli_query($objCon,$strSQL);
        echo "<script type='text/javascript'>alert('Create Success!$CourseID and$Sec and$Date and$DayTime');</script>";
        //echo "<script type='text/javascript'>window.location='login.php';</script>";
    
    
    echo "<script type='text/javascript'>window.location='../course_teacher.php';</script>";
    
mysqli_close($objCon);
?>