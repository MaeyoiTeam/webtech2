<?php
session_start();

	include("config.php");
	$permission=$_POST["permission"];
    $idper=explode("/",$permission);



    if($idper[0]=="Yes"){
    $sql="UPDATE swap SET permission='1' WHERE swap.ID='".$idper[1]."' ";
    $objQuery=mysqli_query($objCon,$sql);

        $sql="SELECT swap.* FROM swap WHERE swap.ID='".$idper[1]."'";
        $objQuery=mysqli_query($objCon,$sql);
        $row = mysqli_fetch_row($objQuery);
        
        $swap="UPDATE studentcoursedate SET coursedate_ID='".$row[3]."'
        WHERE studentcoursedate.coursedate_ID ='".$row[2]."'
        AND studentcoursedate.studentcourse_ID='".$row[1]."'";
        $objQuery=mysqli_query($objCon,$swap);

        if($objQuery)
            echo ("<script LANGUAGE='JavaScript'>window.alert('Swap Succuss');window.location.href='../teacher_permission.php';</script>");
        else 
            echo ("<script LANGUAGE='JavaScript'>window.alert('Swap Failed')window.location.href='../teacher_permission.php';;</script>");
    }
    else{
        $sql="UPDATE swap SET permission='0' WHERE swap.ID='".$idper[1]."' ";
        $objQuery=mysqli_query($objCon,$sql);
        echo ("<script LANGUAGE='JavaScript'>window.alert('permission denied')window.location.href='../teacher_permission.php';;</script>");
}



     
	
mysqli_close($objCon);
?>
