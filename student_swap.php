<?php
if(session_id()===''){
session_start();
 
}
include('php/config.php');
	$strSQL = "SELECT * FROM studentt WHERE ID = '".$_SESSION['ID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script type="text/javascript" src="js/mouse.js">  </script>
        <script type="text/javascript" src="js/time.js">  </script>
        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />

    </head>
    
    <body >
        <nav>
            <div id="tabs" >
             <?php include 'php/menutop.php';?>
                    
            </div>
             <div id="tabs2" >
                    
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
                      
            <h1>Welcome to Student Swap Class!</h1> <br>
                      <p>Your permission will send to your teacher</p>
            <form name="num" method="post" action="php/save_permission.php">
                    
                Date :<select name='date'><?php $start = date('Y-m-d'); $date = "SELECT coursedate.date_date,coursedate.sec,coursedate.ID
FROM coursedate,studentcoursedate,studentcourse
WHERE coursedate.course_ID = '".$_SESSION['course_ID']."'
AND studentcoursedate.coursedate_ID=coursedate.ID
AND studentcoursedate.studentcourse_ID= studentcourse.ID
AND studentcourse.student_ID='".$_SESSION['ID']."'";
                     if($result=mysqli_query($objCon,$date)){
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option  value='".$row[2]."'> Time:".$row[0]." Sec:".$row[1]."</option>";
    }
  // Free result set
  mysqli_free_result($result);
}
                     
                     ?>
                     </select>
<br><h2>Swap Class to..</h2>
                Date :<select name='date2'><?php $date2 = "SELECT DISTINCT coursedate.date_date,coursedate.sec,coursedate.ID
FROM coursedate,studentcoursedate,studentcourse
WHERE coursedate.course_ID = '".$_SESSION['course_ID']."'
AND studentcoursedate.coursedate_ID=coursedate.ID
AND studentcoursedate.studentcourse_ID= studentcourse.ID
AND studentcourse.student_ID!='".$_SESSION['ID']."'";
                     if($result=mysqli_query($objCon,$date2)){
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option  value='".$row[2]."'> Time:".$row[0]." Sec:".$row[1]."</option>";
    }
  // Free result set
  mysqli_free_result($result);
}
                     
                     ?>
                     </select>
   
<br>
                Note :<input type="text" name="note">
<br>
            <input type="submit" name="Submit" value="Save">

            </form>

                 </div>
            </article>
            
            
            <aside >
                <div id=asidemenu>
            <?php include 'php/menuleft2.php';?>
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
