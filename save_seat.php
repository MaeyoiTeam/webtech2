<?php
    session_start();
    $UserID = $_SESSION['UserID'];
	include("config.php");
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
        $strSQL = "UPDATE `room` SET `Seat`='$stu_seat' WHERE ID = '$UserID'";
	$objQuery = mysqli_query($objCon,$strSQL);
        
        echo "<script type='text/javascript'>alert('Your Seat is $stu_seat');</script>";
        echo "<script type='text/javascript'>window.location='user_page.php';</script>";
    }

	mysqli_close($objCon);
?>
