<head>
    <link rel="stylesheet" href="css/buttons.css">
        <script type="text/javascript" src="js/buttons.js"></script>
        <script type="text/javascript" src="js/buttons.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body> 
<?php
                    
              
				echo  "<a href='timeline_teacher.php' class='button button-pill button-flat-caution'>Timeline</a><br><br>";
                echo  "<a href='lesson_teacher.php' class='button button-pill button-flat-caution'>Lesson</a><br><br>";
				echo   "<form  action='homework_teacher.php' method='post' class='button button-pill button-flat-caution'>  ";
                echo "<button type='submit' name='course' value='".$txt[0]."/".$txt[1]."'>Homework</button></form><br><br>";
				echo  "<a href='show_seat.php' class='button button-pill button-flat-caution' >Attendance Check </a><br><br>";
                echo   "<form  action='classmate.php' method='post' class='button button-pill button-flat-caution' >";
				echo  "<button type='submit' name='course' value='".$txt[0]."/".$txt[1]."'>Classmate</button></form>";
?>
</body>