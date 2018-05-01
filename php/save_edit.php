<?php
    session_start();
    $ID = $_SESSION['ID'];
    $FName = trim($_POST['txtFname']);
    $LName = trim($_POST['txtLname']);
    $Faculty = trim($_POST['txtFaculty']);
    $Major = trim($_POST['txtMajor']);
    $Birthdate = $_POST['txtBirthdate'];
    $Gender = trim($_POST['txtGender']);
    $Phone = trim($_POST['txtPhone']);
    $Mail = trim($_POST['txtEmail']);
    include("config.php");
    if($FName == "")
    {
        echo "<script type='text/javascript'>alert('Please input First Name!$FName');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($LName == "")
    {
        echo "<script type='text/javascript'>alert('Please input Last Name!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Faculty == "")
    {
        echo "<script type='text/javascript'>alert('Please input Faculty!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Major == "")
    {
        echo "<script type='text/javascript'>alert('Please input Major!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Birthdate == "")
    {
        echo "<script type='text/javascript'>alert('Please input Birthdate!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Gender == "")
    {
        echo "<script type='text/javascript'>alert('Please input Gender!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Phone == "")
    {
        echo "<script type='text/javascript'>alert('Please input Phone!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Mail == "")
    {
        echo "<script type='text/javascript'>alert('Please input Mail!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }


        $strSQL = "UPDATE `studentt` SET `Fname`='".$FName."',`Lname`='".$LName."',`Faculty`='".$Faculty."',`Major`='".$Major."',`Birthdate`='".$Birthdate."',`Gender`='".$Gender."',`Phone`='".$Phone."',`Email`='".$Mail."' WHERE ID = '".$ID."'";
        $objQuery = mysqli_query($objCon,$strSQL);
    echo "<script type='text/javascript'>alert('Updated!');</script>";
    echo "<script type='text/javascript'>window.location='../course_student.php';</script>";
    
mysqli_close($objCon);
?>