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
        <meta charset="UTF-8">
        
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




                 <table border="1" style="width: 350px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;ID</td>
        <td width="220"><?php echo '&nbsp;',$objResult["ID"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Name</td>
        <td><?php echo '&nbsp;',$objResult["Fname"]." ".$objResult["Lname"];?></td>
      </tr>
         </tbody>
     



  </table>
                      
    <table border="1" style="width: 500px">
    <tbody>
        <tr>
        <td> &nbsp;Course Name</td>
        <td> &nbsp;Name teacher </td>
            <td> &nbsp;Email</td>
            <td> &nbsp;Phone</td>
      </tr>
        <br>
                 <?php


$course =$_POST["course"];
$txt = explode("/",$course);
//echo $txt[0]; //course_ID
//echo $txt[1]; // sec
$strSQL = "SELECT course.*,teachert.* FROM course,teachert WHERE course.ID='".$txt[0]."' AND  teachert.ID=course.Teacher_ID";


if ($result=mysqli_query($objCon,$strSQL))
  {
  while ($row=mysqli_fetch_row($result))
    {
      echo "<tr>";
      echo "<td>".$row[1]."</td>";
      echo "<td>".$row[5]." ".$row[6]."</td>";
      echo "<td>".$row[12]." </td>";
      echo "<td>".$row[11]."</td>";
      echo "</tr>";
    }
}
mysqli_free_result($result);
?>
            </tbody>
  </table>
                  
    <table border="1" style="width: 500px">
    <tbody>
        <tr>
        <td> &nbsp;Student ID</td>
        <td> &nbsp;Name Student </td>
            <td> &nbsp;Email</td>
            <td> &nbsp;Phone</td>
      </tr>
        <br>
                     
<?php
                     
$strSQL = "SELECT studentcourse.*,course.*,studentt.* FROM course,studentcourse,studentt WHERE course.ID='".$txt[0]."' AND studentcourse.sec='".$txt[1]."' AND studentcourse.course_ID=course.ID AND studentcourse.studnet_ID=studentt.ID";


if ($result=mysqli_query($objCon,$strSQL))
  {
  while ($row=mysqli_fetch_row($result))
    {
      echo "<tr>";
      echo "<td>".$row[8]."</td>";
      echo "<td>".$row[9]." ".$row[10]."</td>";
      echo "<td>".$row[16]." </td>";
      echo "<td>".$row[15]."</td>";
      echo "</tr>";
    }
}
mysqli_free_result($result);
?>
            </tbody>
  </table>
<?php
$course =$_POST["course"];
$txt = explode("/",$course);
                     echo   "<form  action='homework_teacher.php' method='post'>";
                     echo "<button type='submit' name='course' value='".$txt[0]."/".$txt[1]."'>Homework</button></form>";
?>

        

                 </div>

              </article>
            
            
            <aside >
                <div id=asidemenu>
            <?php include 'php/menuleft3.php';?>
                </div>
           
            </aside>
       
        </div>
        
        <footer>
               <p>Footer</p>
            </footer>

        
    </body>    

</html>