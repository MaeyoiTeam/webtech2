<?php
    session_start();
    $ID = $_SESSION['ID'];
    $course =$_POST["course"];
    $txt = explode("/",$course);
    $date = $_SESSION['coursedateID'];
	include("config.php");
	/*if(trim($_POST["stu_id"])==""){
	echo "กรุณากรอกรหัสนักศึกษา";
	exit();
	}*/
	if(isset($_POST['RG1'])){
	$stu_seat = trim($_POST['RG1']);
    $sit = explode(".",$stu_seat); 
    }else if(isset($txt[2])){
	$stu_seat = $txt[2];
    }else{
		echo "<script type='text/javascript'>alert('กรุณาเลือกที่นั่ง!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
		
    $strSQL = "SELECT * FROM room WHERE Seat = '".$sit[1]."' AND room.Group = '".$sit[0]."'";
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
        
        
        
	   //$objQuery = mysqli_query($objCon,$strSQL);
         //   if($objQuery){
                if(isset($txt[2])){
	               echo "<script type='text/javascript'>alert('You are In Class');</script>";
                echo "<script type='text/javascript'>window.location='../course_student.php';</script>";
                    
                    }else{
                    
                $strSQL = "UPDATE room SET Seat='".$sit[1]."' , room.Group ='".$sit[0]."', active ='present' WHERE student_ID = '".$ID."' AND coursedate_ID = '".$row[0]."'";
                $objQuery = mysqli_query($objCon,$strSQL);    
                echo "<script type='text/javascript'>alert('Your Seat is $sit[0] $sit[1]');</script>";
                $_SESSION['seat'] = $sit[0]$.sit[1];
                echo "<script type='text/javascript'>window.location='../course_student.php';</script>";
                }
            }
            /*else{
                echo "<script type='text/javascript'>alert('Can not Join!');</script>";
                echo "<script type='text/javascript'>window.history.go(-1);</script>";
            }*/
    

	mysqli_close($objCon);
?>