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
					
                    if($_SESSION['Status']=="Teacher"){
                        $sql = "teachert";
                    }
                    else{
                        $sql ="studentt";  
                    }

 $strSQL = "SELECT fname,lname FROM ".$sql." WHERE ID = '".$_SESSION['ID']."'";
	               $result=mysqli_query($objCon,$strSQL);
                     $row=mysqli_fetch_row($result);
    $img="images/".$_SESSION['ID'].".jpg";
	if(isset($img)){ 
      echo "<br><img class='imgs' src='images/".$_SESSION['ID'].".jpg' width='60%' float:'center' style='border-radius: 50%;'><br>";
       
      
    } else { 
      
         echo "<br><img class='imgs' src='images/defalut.jpg' width='60%' float:'center' style='border-radius: 50%;'><br>";
      
    }
   	echo "<p align='center'>".$idtest."</p>"; 
   	echo "<p align='center'>".$row[0]." ".$row[1]."</p><br>";
    echo "<p align='center'> <a href='edit_profile.php' class='button button-pill button-flat'>Edit</a></p><br><br><br>";
   
   	echo  "<a href='Annoucement.php' class='button button-pill button-flat-caution' style='padding-right:32%' >Annoucement</a><br><br>";
	
	if($_SESSION['Status']=="Teacher"){
                       echo  "<a href='course_teacher.php'  class='button button-pill button-flat-caution' style='padding-right:52%' >Course</a><br><br>";
                    }
                    else{
                       echo  "<a href='course.php' class='button button-pill button-flat-caution' style='padding-right:52%'>Course</a><br><br>";
                    }
	
}
?>
      </body>