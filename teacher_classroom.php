<?php
if(session_id()===''){
session_start();
 
}
include('php/config.php');

if(isset($_SESSION['ID'])){
		

	if($_SESSION['Status'] != "Teacher"){
		exit();
	}
}
else{
	header("location:index.php");
	}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Demo Webtech Project</title>

        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />
        <script type="text/javascript" src="js/mouse.js">  </script>
        <script type="text/javascript" src="js/time.js">  </script>
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

                 <div class="content" >


                     <form name="num" method="post" action="php/save_classroom.php">

                     Date :<select name='date'>
                         <?php $date = "SELECT coursedate.date_date FROM coursedate WHERE coursedate.sec='".$_SESSION['sec']."' AND coursedate.course_ID ='".$_SESSION['course_ID']."' AND AND coursedate.date_date >= '".$start."'";
                     if($result=mysqli_query($objCon,$date)){
                    // Fetch one and one rosec='".$_SESSION['']."'
                    while ($row=mysqli_fetch_row($result))
                    {
                    echo "<option  value='".$row[0]."'> ".$row[0]."</option>";
                }
        // Free result set
                mysqli_free_result($result);
                     }
                     
                     ?>
                     </select>


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
            
                <h1>Footer</h1>
            </footer>

        
    </body>    

</html>

<?php
	mysqli_close($objCon);
?>
