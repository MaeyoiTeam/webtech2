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

    
<form id="form1" method="post" action="php/save_coursedate.php">
    <h1><center>Create CourseDate</center></h1>
    <center><table width="420" border="0" style="width: 420px" align="center">
        <tbody>
            <tr>
                <td width="500">&nbsp;Course ID</td>
                <td width="180">
                    <input name="CourseID" type="text" id="CourseID" size="20">
                </td>
            </tr>
            <tr>
                <td> &nbsp;Day Time</td>
                <td><select name="DayTime" id="DayTime">
                        <option value="1">เช้า</option>
                        <option value="2">บ่าย</option>
                        <option value="3">เย็น</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td> &nbsp;Sec</td>
                <td><select name="sec" id="sec">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>&nbsp;Date</td>
                <td><input name="datee" type="date" id="datee" size="20"></td>
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