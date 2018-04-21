<?php

if(isset($_POST['submit'])){
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
            if($fileSize < 1000000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination ='uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName,$fileDestination);
include 'config.php';
                mysqli_query($objCon,"INSERT INTO images (image) VALUES ('$fileDestination')");
	       





            }else{
                echo "Your file is too big!(Limit 100mb)";
            }

        }else{
                echo "There was an error uploading your file!";
        }
    }else{
        echo "You cannot upload files of this type!";
    }

}