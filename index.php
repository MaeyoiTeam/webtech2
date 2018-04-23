<?php
if(session_id()==''){
session_start();
 
}
include('php/config.php');  

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <script type="text/javascript" src="js/mouse.js">  </script>
        <script type="text/javascript" src="js/time.js">  </script>
        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body >
        <nav>
            <div id="tabs" ></div>
             <div id="tabs2" >
                    
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
                 <div class="container">
    <div id="content" align="center">
		<h1>Annoucement</h1><br><br>
		


<?php
    date_default_timezone_set("Asia/Bangkok");
    
    $strSQL = "SELECT * FROM noticemsg ";
    $showquery = $mysqli->query($strSQL);


    
 ?>
    <div>
    <table width="600" border="1">
  <tr>
   
      <th width="198"> <div align="center"><h3>Message</h3></div></th>
      <th width="198"> <div align="center"><h3>Date-Time</h3></div></th>
    
  </tr>
     <?php
    $resultshow = array();
while($resultshow = mysqli_fetch_array($showquery,MYSQLI_ASSOC))
{
    ?>
  <tr>
   
      <td><div align="center"><?php echo $resultshow["message"];?></div></td>
      <td><div align="center"><?php echo $resultshow["date_time"];?></div></td>
</tr>
<?php } ?>

<?php
mysqli_close($mysqli);
?>
    </table> 
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

