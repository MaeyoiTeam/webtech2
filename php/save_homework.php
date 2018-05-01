<?php
include('config.php');
date_default_timezone_set("Asia/Bangkok");
$course =$_POST["course"];
$txt = explode("/",$course);
$name=$_POST['name'];
$note=$_POST['note'];
$finish=$_POST['finish'];
$time=$_POST['time'];
$start = date('Y-m-d');


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
                $fileDestination ='../images/uploads/homework/'.$fileNameNew;
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


$strSQL = "INSERT INTO homework (ID,name,note,file,course_ID,sec,date_start,date_finish,time_finish) VALUES (null,'".$name."','".$note."','".$fileDestination."', '".$txt[0]."' , '".$txt[1]."' , '".$start."','".$finish."','".$time."')";
		$objQuery = mysqli_query($objCon,$strSQL);
        $objResult = mysqli_fetch_array($objQuery);
//โคตรชิบหาย ตรงเก็บข้อมูลให้ตรงกับ date ที่มี  
if($objQuery){
    echo "<script LANGUAGE='JavaScript'>window.alert('Upload Success');window.location.href='../homework_teacher.php';</script>";
}
else{
echo "<script LANGUAGE='JavaScript'>window.alert('Upload Fail');window.location.href='../homework_teacher.php';</script>";
}
//TODO : ถ้ามีปัญหา ให้ไปสร้างโฟลเดอร์homework ใน uploads เปิด permissionด้วย
?>