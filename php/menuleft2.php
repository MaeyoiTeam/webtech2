 <head>
    <link rel="stylesheet" href="css/buttons.css">
        <script type="text/javascript" src="js/buttons.js"></script>
        <script type="text/javascript" src="js/buttons.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php
                  
    $strSQL = "SELECT course_name FROM course WHERE ID = '".$_SESSION['course_ID']."'";
	               $result=mysqli_query($objCon,$strSQL);
                    $row=mysqli_fetch_row($result);           
     if(isset($_SESSION['ID'])){ 

         echo "<h1>Course Name : ".$row[0]."</h1>";
         echo "<h1>Sec :". $_SESSION['sec']."</h1>";
         if($_SESSION["Status"]== "Teacher"){

             
				
                echo  "<a href='timeline_teacher.php' class='button button-pill button-flat-caution'>Timeline</a><br><br>";
                echo  "<a href='lesson_teacher.php' class='button button-pill button-flat-caution'>Lesson</a><br><br>";
				echo  "<a href='homework_teacher.php' class='button button-pill button-flat-caution'>Homework</a><br><br>";
                echo  "<a href='Webboard.php' class='button button-pill button-flat-caution'>Q and A</a><br><br>";
				echo  "<a href='teacher_classroom.php' class='button button-pill button-flat-caution' >Attendance Check </a><br><br>";
                echo  "<a href='teacher_permission.php' class='button button-pill button-flat-caution'>Teacher Permission</a><br><br>";
                echo  "<a href='tech_formseat.php' class='button button-pill button-flat-caution'>Set Seat</a><br><br>";
                echo  "<a href='create_coursedate.php' class='button button-pill button-flat-caution'>Create Coursedate</a><br><br>";
             
         }
         else{
				
                echo  "<a href='timeline.php' class='button button-pill button-flat-caution' >Timeline</a><br><br>";
                echo  "<a href='lesson.php' class='button button-pill button-flat-caution'>Lesson</a><br><br>";
                echo  "<a href='homework_student.php' class='button button-pill button-flat-caution'>Homework</a><br><br>";
				echo  "<a href='Webboard.php' class='button button-pill button-flat-caution'>Q and A</a><br><br>";
				echo  "<a href='stu_selectseat2.php' class='button button-pill button-flat-caution'>Select Seat</a><br><br>";
                echo  "<a href='student_swap.php' class='button button-pill button-flat-caution'>Student swap</a><br><br>";
             
            }
     }
?>
</body>