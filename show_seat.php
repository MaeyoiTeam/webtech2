<?php
if(session_id()===''){
session_start();
 
}
include('config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

<?php
	
$student = "STUDENT";
$query = "SELECT * FROM Members ORDER BY UserID asc" or die("Error :" .mysqli_error());
$result = mysqli_query($objCon,$query);
//$objResult = mysqli_fetch_array($objCon,MYSQLI_ASSOC);

echo "<h1><center>Student's Seat<center></h1>";
echo "<br><br>";
echo "<table border='1' align='center' width='400'  ";
echo "<tr><td align=CENTER bgcolor=#CCCCCC width='130'>UserID</td><td align=CENTER bgcolor=#CCCCCC >Name and Surname</td><td align=CENTER bgcolor=#CCCCCC >Seat</td></tr>";
    while($row = mysqli_fetch_array($result)) {
        if($row["Status"] == "STUDENT"){
    echo "<tr>";
    echo "<td>" .$row["UserID"] .  "</td> ";
    echo "<td>" .$row["NameSurname"] .  "</td> ";
    echo "<td>" .$row["Seat"] .  "</td> ";
    echo "</tr>";
	}
    }
  echo "</table>";

  mysqli_close($objCon); 
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





