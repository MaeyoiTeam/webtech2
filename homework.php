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

            </div>
            
           
             <article >
                 <div class="content">














    <table border="1" >
    <tbody>
        <tr>
        <td> &nbsp;Homework ID</td>
        <td> &nbsp;homework name </td>
            <td> &nbsp;note</td>

            <td> &nbsp;start</td>
            <td> &nbsp;finish</td>
            <td> &nbsp;time</td>
      </tr>
        <br>
                     
<?php
                     
$course =$_POST["course"];
$txt = explode("/",$course);

$strSQL = "SELECT * FROM homework WHERE homework.course_ID='".$txt[0]."' AND homework.sec='".$txt[1]."'";


if ($result=mysqli_query($objCon,$strSQL))
  {
  while ($row=mysqli_fetch_row($result))
    {
      echo "<tr>";
      echo "<td>".$row[0]."</td>";
      echo "<td>".$row[1]."</td>";
      echo "<td>".$row[2]."</td>";

      echo "<td>".$row[5]."</td>";
      echo "<td>".$row[6]."</td>";
      echo "<td>".$row[7]."</td>";

      echo "</tr>";
    }
}
mysqli_free_result($result);



?>
            </tbody>
  </table>

<?php

echo   "<form  action='create_homework.php' method='post'>";
echo "<button type='submit' name='course' value='".$txt[0]."/".$txt[1]."'>Create Homework</button></form>";

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
               <p>Footer</p>
            </footer>

        
    </body>    

</html>