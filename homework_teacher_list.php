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














    <table border="1" >
    <tbody>
        <tr>
            <td> &nbsp;homework ID</td>
            <td> &nbsp;student ID</td>
            <td> &nbsp;send</td>
            <td> &nbsp;data</td>
            <td> &nbsp;file</td>
      </tr>
        <br>
                     
<?php
$id=$_POST["homeworkid"];
$strSQL = "SELECT studenthomework.* FROM studenthomework WHERE  studenthomework.homework_ID='".$id."'";


if ($result=mysqli_query($objCon,$strSQL))
  {
  while ($row=mysqli_fetch_row($result))
    {
      echo "<tr>";
      echo "<td>".$row[1]."</td>";//homework id
      echo "<td>".$row[2]."</td>";//student id
      echo "<td>".$row[3]."</td>";//date send
      echo "<td>".$row[4]."</td>";//data
      echo "<td><a href='webtech2-master/".$row[5]."'><img src='images/icon/file.png'></a></td>";
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
            <?php include 'php/menuleft2.php';?>
                </div>
           
            </aside>
       
        </div>
        
        <footer>
               <p>Footer</p>
            </footer>

        
    </body>    

</html>