<?php
if(session_id()===''){
session_start();
 
}
include('config.php');
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