<?php
if(session_id()===''){
session_start();
 
}
include('php/config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script type="text/javascript" src="js/mouse.js">  </script>
        <script type="text/javascript" src="js/time.js">  </script>
        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />

    </head>
  
    <body>
        <nav>
            <div id="tabs" >
                    
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

    
<form id="form1" method="post" action="php/save_course.php">
    <h1><center>Create Course</center></h1>
    <center><table width="420" border="0" style="width: 420px" align="center">
        <tbody>
            <tr>
                <td width="500">&nbsp;Course ID</td>
                <td width="180">
                    <input name="CourseID" type="text" id="CourseID" size="20">
                </td>
            </tr>
            <tr>
                <td> &nbsp;Course Name</td>
                <td><input name="CourseName" type="text" id="CourseName"></td>
            </tr>
            <tr>
                <td> &nbsp;Credit</td>
                <td><input name="credit" type="text" id="credit"></td>
            </tr>
            <tr>
                <td> &nbsp;Sec</td>
                <td><input name="sec" type="text" id="sec"></td>
            </tr>
        </tbody>
        </table></center>   
    <br><center><button type="Submit">Create</button></center>  
</form>
        

<!--
    <Br><center><button>Go Home</button></center>
</form>
-->
                 
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