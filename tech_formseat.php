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
        
        <script type="text/javascript" src="js/mouse.js">  </script>
        <script type="text/javascript" src="js/time.js">  </script>
        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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



                 <H1><p align="center">Set Seat</p></H1>
<center><form  name="form1" method="post" action="php/tech_createseat.php">
    <table width="396" border="0" align="center" style="width: 400px">
    <tbody>
      <tr>
        <td width="245"> &nbsp;Course ID</td>
        <td width="141"><input type="text" name="class_id" id="class_id"></td>
      </tr>
      <tr>
        <td> &nbsp;Row</td>
        <td><input type="text" name="seat_row" id="seat_row"></td>
      </tr>
      <tr>
        <td width="245"> &nbsp;Column </td>
        <td><input type="text" name="seat_col" id="seat_col"></td>
      </tr>
    <tr>
        <td width="245"> &nbsp;Seat(1-10)  </td>
        <td><input type="text" name="seat_num" id="seat_num"></td>
      </tr>
    </tbody>
  </table>
  <p align="center"><br><input type="submit" name="submit" id="submit" value="Submit"></p></center>

</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
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

