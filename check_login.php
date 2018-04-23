<?php
	session_start();
        include("php/config.php");
	$strSQL = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
	and Password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
            echo "<script type='text/javascript'>alert('Username or Password Incorrect!');</script>";
            echo "<script type='text/javascript'>window.history.go(-1);</script>";
	}
	else
	{
			$_SESSION["ID"] = $objResult["ID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "Teacher")
			{
				header("location:course_teacher.php");
			}
			else
			{
				header("location:course_student.php");
			}
	}
	mysqli_close($objCon);
?>
				