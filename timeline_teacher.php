<?php
session_start();
include('php/config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
			 <?php include 'php/calendar.php';       ?> 
            </div>
            
           
             <article >
             <div class="content">
             
<div class="container">
	<div id="content" align="center">
		<form action="notifyexec.php" method="post">
		<h1>Notice Board</h1><br> 

		Message<br>
		<textarea type="text" name="message" class="ed" rows="15" cols="50" class="form-control"></textarea><br/><br/>
		<input type="submit" class="btn btn-primary" value="Send" id="button1">
		</form>
	</div>
    </div>
                 
                 
<?php
    date_default_timezone_set("Asia/Bangkok");
    
    $strSQL = "SELECT * FROM noticemsg ";
    $showquery = mysqli_query($objCon,$strSQL);

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

<?php
mysqli_close($mysqli);
?>