<?php

if(session_id()===''){
session_start();
 
}


include('config.php');
date_default_timezone_set("Asia/Bangkok");
$note=$_POST['note'];
$homeworkid=$_POST['homeworkid'];
$send = date('Y-m-d');
    $file =$_FILES['file']; 
    $fileName      = $_FILES['file']['name'];
    $fileTmpName  = $_FILES['file']['tmp_name'];
    $fileType      = $_FILES['file']['type'];
    $fileError     = $_FILES['file']['error'];
    $fileSize      = $_FILES['file']['size'];


    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    
    $allowed = array('jpg','jpeg','png','gif','pdf');
    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if($fileSize < 10000000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination ='../images/uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
            }else{
                echo "Your file is too big!(Limit 10mb)";
            }

        }else{
                echo "There was an error uploading your file!";
        }
    }else{
        echo "You cannot upload files of this type!";
    }
$strSQL = "SELECT * FROM studenthomework WHERE studenthomework.student_ID='".$_SESSSION['ID']."' AND studenthomework.homework_ID='".$homeworkid."'  ";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery);
/*
           $strSQL = "UPATE  studenthomework SET date_send= '".$send."' ,data= '".$note."' ,file='".$fileDestination."' WHERE homework_ID='".$homeworkid."' AND student_ID='".$_SESSION['ID']."'";
		$objQuery = mysqli_query($objCon,$strSQL);
        echo "<script LANGUAGE='JavaScript'>window.alert('Update Success');window.location.href='../homework_student.php';</script>";*/

        
$strSQL = "INSERT INTO studenthomework (ID,homework_ID,student_ID,date_send,data,file) VALUES (null,'".$homeworkid."','".$_SESSION['ID']."','".$send."','".$note."','".$fileDestination."')";
		$objQuery = mysqli_query($objCon,$strSQL);
        echo "<script LANGUAGE='JavaScript'>window.alert('Insert Success');window.location.href='../homework_student.php';</script>";




mysqli_close($objCon);
?>