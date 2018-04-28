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
                     <h1>Create Lesson</h1>

 <?php


$course =$_POST["course"];
$txt = explode("/",$course);
echo "Course ID :".$txt[0]."<br>"; //course_ID
echo "Sec :".$txt[1]; // sec


?>

     
                     <form action='php/save_lesson.php' method='post' enctype="multipart/form-data">

                         <span >name</span>
                         <span style="padding-left: 6em">note</span>
                         <span style="padding-left: 13.2em">date</span>
                         <span style="padding-left: 5.2em">time</span>
<br>
<input type="text" name="name"> 
<input type="text" name="note" style="padding-bottom: 6.5em; padding-right: 10em">

<br>
<input type="file" name="file" >
<?php
                    echo    "<button type='submit' name='course' value='".$txt[0]."/".$txt[1]."'>Submit</button></form>";
?>







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