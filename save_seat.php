<?php
    session_start();
    $ID = $_SESSION['ID'];
    $course =$_POST["course"];
    $txt = explode("/",$course);
    $date = $_POST["subject"];
	include("php/config.php");
	/*if(trim($_POST["stu_id"])==""){
	echo "กรุณากรอกรหัสนักศึกษา";
	exit();
	}*/
	if(isset($_POST['RG1'])){
	$stu_seat = trim($_POST['RG1']);
    }else{
		echo "<script type='text/javascript'>alert('กรุณาเลือกที่นั่ง!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
		
    $strSQL = "SELECT * FROM room WHERE Seat = '".$stu_seat."'";
    $objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);

    if($objResult)
    {
        echo "<script type='text/javascript'>alert('This seat has been selected!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
    }
    else
    {


        $strSQL = "SELECT coursedate.ID FROM coursedate WHERE coursedate.course_ID='".$txt[0]."' AND coursedate.sec ='".$txt[1]."' AND coursedate.date_date = '".$date."'";
        $result=mysqli_query($objCon,$strSQL);
        $row=mysqli_fetch_row($result);

        $strSQL = "UPDATE room SET Seat='$stu_seat', active ='present' WHERE student_ID = '".$ID."' AND corusedate_ID = '".$row[0]."'";
	   //$objQuery = mysqli_query($objCon,$strSQL);
         //   if($objQuery){
                echo "<script type='text/javascript'>alert('Your Seat is $stu_seat $row[0]');</script>";
                echo "<script type='text/javascript'>window.location='course.php';</script>";
         /*   }
            else{
                echo "<script type='text/javascript'>alert('Can not Join!');</script>";
                //echo "<script type='text/javascript'>window.history.go(-1);</script>";
            }*/
    }

	mysqli_close($objCon);
?>