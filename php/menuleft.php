<?php
	  session_start();
?>
<head>
    <link rel="stylesheet" href="css/buttons.css">
        <script type="text/javascript" src="js/buttons.js"></script>
        <script type="text/javascript" src="js/buttons.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>

<?php
                    
if(isset($_SESSION['ID'])){
                    $idtest = $_SESSION['ID'];
					
                    if($_SESSION["Status"]=="Teacher"){
                        $sql = "teachert";
                    }
                    else{
                        $sql ="studentt";  
                    }

                   $strSQL = "SELECT * FROM ".$sql." WHERE ID = '".$_SESSION['ID']."'";
	               $result=mysqli_query($objCon,$strSQL);
                    $row=mysqli_fetch_row($result);
    $img="images/".$_SESSION['ID'].".jpg";
    if($row[9]!=null){

        echo "<br><img class='imgs' src='webtech2/".$row[9]."' width='60%' float:'center' style='padding-left:20%' style='border-radius: 50%;'><br>";
      }
    else { 

        echo "<br><img class='imgs' src='images/icon/".$_SESSION["Status"]."_".$row[6].".png' width='100%' float:'center' z style='border-radius: 50%;'><br>";
      
    }

   	echo "<p align='center'><br> ID : ".$idtest."</p>"; 
   	echo "<p align='center'> Name : ".$row[1]." ".$row[2]."</p><br>";
    echo "<p align='center'> <a href='edit_profile.php' class='button button-pill button-flat'>Edit</a></p><br><br><br>";
   
   	echo  "<a href='index.php' class='button button-pill button-flat-caution' style='padding-right:32%' >Annoucement</a><br><br>";
	
	if($_SESSION['Status']=="Teacher"){
                       echo  "<a href='course_teacher.php'  class='button button-pill button-flat-caution' style='padding-right:52%' >Course</a><br><br>";
                        echo  "<a href='create_course.php' class='button button-pill button-flat-caution' style='padding-right:32%' >Create Course</a><br><br>";
                    }
                    else{
                       echo  "<a href='course_student.php' class='button button-pill button-flat-caution' style='padding-right:52%'>Course</a><br><br>";
                        echo  "<a href='join_course.php' class='button button-pill button-flat-caution' style='padding-right:40%' >Join Course</a><br><br>";
                    }
	
}
else{
 echo  "<a href='login.php'  class='button button-pill button-flat-caution' style='padding-right:52%' >Login</a><br><br>";
 echo  "<a href='register.php'  class='button button-pill button-flat-caution' style='padding-right:52%' >Register</a><br><br>";
}
?>
      </body>