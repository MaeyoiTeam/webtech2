 <head>
    <link rel="stylesheet" href="css/buttons.css">
        <script type="text/javascript" src="js/buttons.js"></script>
        <script type="text/javascript" src="js/buttons.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php
                
                   
     if(isset($_SESSION['ID'])){ 

         echo "<h1>Course ID:".$_SESSION['course_ID']."</h1>";
         echo "<h1>Sec :". $_SESSION['sec']."</h1>";
         if($_SESSION["Status"]== "Teacher"){

             
				
                echo  "<a href='timeline_teacher.php' class='button button-pill button-flat-caution'>Timeline</a><br><br>";
                echo  "<a href='lesson_teacher.php' class='button button-pill button-flat-caution'>Lesson</a><br><br>";
				 echo  "<a href='homework_teacher.php' class='button button-pill button-flat-caution'>Homework</a><br><br>";
				echo  "<a href='teacher_classroom.php' class='button button-pill button-flat-caution' >Attendance Check </a><br><br>";
         }
         else{
				
                echo  "<a href='timeline.php' class='button button-pill button-flat-caution' >Timeline</a><br><br>";
                echo  "<a href='lesson.php' class='button button-pill button-flat-caution'>Lesson</a><br><br>";
                echo  "<a href='homework_student.php' class='button button-pill button-flat-caution'>Homework</a><br><br>";
				echo  "<a href='Webboard.php' class='button button-pill button-flat-caution'>Q and A</a><br><br>";
				echo  "<a href='stu_selectseat2.php' class='button button-pill button-flat-caution'>Select Seat</a><br><br>";
            }
     }
?>
</body>