<?php
if(session_id()===''){
session_start();
}
if(isset($_SESSION['ID'])){
	if($_SESSION['Status'] != "Student")
	{
		echo "This page for Student only!";
		exit();
	}
}
else{
	header("location:index.php");
	}


include('php/config.php');  
$sql="SELECT course.ID,course.course_name,studentcourse.sec
FROM course,studentcourse
WHERE course.ID=studentcourse.course_ID AND studentcourse.student_ID='".$_SESSION["ID"]."'";
$ID = array();
$x=1;
if ($result=mysqli_query($objCon,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      $ID[$x]=$row[0];
      $course_name[$x] =$row[1];
      $sec[$x]=$row[2];
      $x++;
    }
  // Free result set
  mysqli_free_result($result);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <script type="text/javascript" src="js/mouse.js">  </script>
        <script type="text/javascript" src="js/time.js">  </script>
        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />
<style>       
    .chair td{border-style: solid;
    border-width: 5px;
    align-content: center;
        border-radius: 20px;
     font-size: 20px;
	background-color : #FFFFFF;    
        }
    #add{

position: fixed;
    bottom: 5%;
    right: 25%;


}


</style>   

    </head>
    
    <body >
        <nav>
            <div id="tabs" ></div>
            <div id="tabs2">
    <?php include 'php/menutop2.php';?>
            </div>
            </nav>

     
        <div id="container">
            
            
            <div class="closeFloating" >
             <a onclick="onOffbar()"><button id="textCloseFloating">Close</button></a>
            </div>
            
            <div id="floatingMenu">
                <?php include 'php/calendar.php';?>
            </div>
            
           
             <article >
                  <div class="content">
                      

           <?php
$temp=1;


echo  "<table cellspacing=25 cellpadding=25>";
echo   "<form  action='save_course_student.php' method='post'>";
    for($j=0;$j<$x/5;$j++){
        echo "<tr class='chair'>";

            for($i=0;$i<5;$i++){
        echo "<td id='tes".$temp."'>";
        echo    "<button type='submit' name='course' value='".$ID[$temp]."/".$sec[$temp]."'>";
                if(isset($ID[$temp])){
                    echo "<p>Subject:".$course_name[$temp]."<br>sec:".$sec[$temp]."</p></a>";        
                }
            echo    "</div>";

                echo "</td>";
                $temp++;
                if($temp==$x)
                    break;
                            }
        echo "</tr>";
    }


echo  "</form></table>";
?>

                 </div>
            </article>
            
            
            <aside >
                <div id=asidemenu>
            <?php include 'php/menuleft.php';?>

    
                </div>
           
            </aside>
       
        </div>
        
        <footer>
               <p>Footer</p>
            </footer>

        
    </body>    

</html>

<?php
	mysqli_close($objCon);
?>