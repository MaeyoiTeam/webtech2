<?php
if(session_id()===''){
session_start();
 
}
        include("php/config.php");
if(isset($_SESSION['ID'])){
	if($_SESSION['Status'] != "Teacher")
	{
		echo "This page for Teacher only!";
		exit();
	}
}
else{
	header("location:index.php");
	}


$sql="SELECT room.student_ID,room.active,studentt.Lname,studentt.Fname FROM room,studentt WHERE studentt.ID=room.student_ID AND room.corusedate_ID='".$_SESSION["coursedate"]."'";
$ID = array();
$x=1;
if ($result=mysqli_query($objCon,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      $ID[$x]=$row[0];
      $active[$x] =$row[1];
      $lname[$x] =$row[2];
      $fname[$x]=$row[3];
      $x++;
    }
  // Free result set
  mysqli_free_result($result);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script type="text/javascript" src="js/mouse.js">  </script>
        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />

    <style>       
    .chaiar td{border-style: solid;
    border-width: 5px;
    align-content: center;
        border-radius: 20px;
     font-size: 20px;
	backgroundColor : #FFFFFF;    
        }
    
    
    </style>


    </head>
    
    <body>
        <nav>
            <div id="tabs" >
             <?php include 'php/menutop.php';?>
                    
            </div>
             <div id="tabs2" >
                   <?php include 'php/menutop3.php';?>
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
                    <h1>Swap Permission</h1>
<?php
                    $sql="SELECT studentcourse.student_ID,
                    (SELECT coursedate.date_date FROM coursedate WHERE coursedate.ID=swap.current_couresedate),
                    (SELECT coursedate.date_date FROM coursedate WHERE coursedate.ID=swap.move_coursedate),swap.note,swap.ID
                    FROM swap,course,studentcourse
                    WHERE swap.studentcourse_ID=studentcourse.ID
                    AND studentcourse.course_ID=course.ID
                    AND course.ID='".$_SESSION['course_ID']."'
                    AND course.teacher_ID='".$_SESSION['ID']."'
                    AND swap.permission IS NULL";
                    $objQuery=mysqli_query($objCon,$sql);
                    
                    if($objQuery){
                    echo "<table class='tbl_permission'><tbody><tr>";
                        echo "<td>Number</td>";
                        echo "<td>Student</td>";
                        echo "<td>Current</td>";
                        echo "<td>move to</td>";
                        echo "<td>note</td>";
                        echo "<td>permission</td>";
                    echo "<tr>";
                    
                    $count=1;
                    while($row = mysqli_fetch_row($objQuery)){
                    echo "<tr>";
                        echo "<td>".$count."</td>";
                        echo "<td>".$row[0]."</td>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "<td>".$row[3]."</td>";
                        echo "<form action='php/save_swap.php' method='post' name='permission'>";
                        echo "<td><label><input type='radio' name='permission' value='Yes/".$row[4]."'</label>Yes";
                        echo "<label><input type='radio' name='permission' value='No/".$row[4]."'</label>No";
                        echo "<input type='submit' value='submit'></td></form>";
                    echo "</tr>";
                    }
                    echo "<tbody></table>";
                    
                    
                    }
?>                       
 <br><br><br>                   
                    <h1>Swap History</h1>
<?php
                    $sql="SELECT studentcourse.student_ID,
                    (SELECT coursedate.date_date FROM coursedate WHERE coursedate.ID=swap.current_couresedate),
                    (SELECT coursedate.date_date FROM coursedate WHERE coursedate.ID=swap.move_coursedate),swap.note,swap.permission
                    FROM swap,course,studentcourse
                    WHERE swap.studentcourse_ID=studentcourse.ID
                    AND studentcourse.course_ID=course.ID
                    AND course.ID='".$_SESSION['course_ID']."'
                    AND course.teacher_ID='".$_SESSION['ID']."'
                    AND swap.permission IS NOT NULL";
                    $objQuery=mysqli_query($objCon,$sql);
                    
                    if($objQuery){
                    echo "<table class='tbl_permission'><tbody><tr>";
                        echo "<td>Number</td>";
                        echo "<td>Student</td>";
                        echo "<td>Current</td>";
                        echo "<td>move to</td>";
                        echo "<td>note</td>";
                        echo "<td>permission</td>";
                    echo "<tr>";
                    
                    $count=1;
                    while($row = mysqli_fetch_row($objQuery)){
                    echo "<tr>";
                        echo "<td>".$count."</td>";
                        echo "<td>".$row[0]."</td>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "<td>".$row[3]."</td>";
                    if($row[4]==0) {echo "<td>No</td>";}
                    else {echo "<td>Yes</td>";}
                    echo "</tr>";
                    }
                    echo "<tbody></table>";
                    
                    
                    }
?>


                </div>
            </article>



            
            <aside >
                <div id=asidemenu>
            <?php include 'php/menuleft2.php';?>
                </div>
           
            </aside>
       
        </div> 
        
        <footer>
            
                <h1>Footer</h1>
            </footer>

        
    </body>    

</html>

<?php
	mysqli_close($objCon);
?>
