<?php
    session_start();
    $CourseID = $_SESSION['course_ID'];
    $DayTime = trim($_POST['DayTime']);
    $Sec = $_SESSION['sec'];
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
        if(!$objQuery)
        {
            $strSQL = "INSERT INTO `datedate`(`ID`) VALUES ('".$Date."')";
            $objQuery = mysqli_query($objCon,$strSQL);
        }

        $strSQL = "INSERT INTO `coursedate`(`course_ID`, `sec`, `date_date`, `daytime_ID`) VALUES ('".$CourseID."','".$Sec."','".$Date."','".$DayTime."')";
        $objQuery = mysqli_query($objCon,$strSQL);
        echo "<script type='text/javascript'>alert('Create Success!$CourseID and$Sec and$Date and$DayTime');</script>";
        //echo "<script type='text/javascript'>window.location='login.php';</script>";
    
         $strSQL = "SELECT coursedate.ID FROM coursedate
        WHERE coursedate.course_ID='".$CourseID."' AND coursedate.sec = '".$Sec."' 
        AND coursedate.date_date = '".$Date."' AND coursedate.daytime_ID = '".$DayTime."'";
        $objQuery = mysqli_query($objCon,$strSQL);
        $coursedate = mysqli_fetch_row($objQuery);

        $strSQL = "SELECT studentcourse.ID FROM studentcourse
        WHERE studentcourse.course_ID='".$CourseID."' AND studentcourse.sec='".$Sec."'";
        
        if($objQuery2 = mysqli_query($objCon,$strSQL)){
        while($row = mysqli_fetch_row($objQuery2)){
            $sql = "INSERT INTO studentcoursedate( `studentcourse_ID`, `coursedate_ID`) VALUES ('".$row[0]."','".$coursedate[0]."')";
            $objQuery3 = mysqli_query($objCon,$sql);
        }
            mysqli_free_result($objQuery2);
}
        
    echo "<script type='text/javascript'>window.location='../course_teacher.php';</script>";
    
mysqli_close($objCon);
?>