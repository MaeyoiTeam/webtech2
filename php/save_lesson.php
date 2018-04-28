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
                $fileDestination ='../images/uploads/lesson/'.$fileNameNew;
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


$strSQL = "INSERT INTO lesson (ID,name,note,file,course_ID,sec,date) VALUES (null,'".$name."','".$note."','".$fileDestination."', '".$txt[0]."' , '".$txt[1]."' , '".$start."')";
		$objQuery = mysqli_query($objCon,$strSQL);
if($objQuery){
    echo "<script LANGUAGE='JavaScript'>window.alert('Upload Success');window.location.href='../course_teacher.php';</script>";
}
else{
echo "<script LANGUAGE='JavaScript'>window.alert('Upload Fail');window.location.href='../course_teacher.php';</script>";
}
//TODO : ถ้ามีปัญหา ให้ไปสร้าง โฟลเดอร์ lesson ใน uploads เปิด permissionด้วย

?>

