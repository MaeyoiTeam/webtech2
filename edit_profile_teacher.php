
<?php
	session_start();
        include("config.php");
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
    
    <body onload="startTime()">
        <nav>
            <div id="tabs">
                <?php include 'php/menutop.php';?>
            </div>
            </nav>
        
        <header class="header">
            <br>
            <h1>Header</h1>
        </header>
         
        <div id="container">
            
            
            <div class="closeFloating" >
             <a onclick="onOffbar()"><button id="textCloseFloating">Close</button></a>
            </div>
            
            <div id="floatingMenu">
                
            <h1 class="txttime"><div id="txt">    </div> </h1>
  
            <button id="control_up" onclick="changeState_up();">START</button>
            <form action="php/record_time.php" method="post">  
            <h1 class="txttime" id="uptxt"><div id="timer_up" >00:00:00</div></h1>
                    <input id="testtt" name="record_time" style="display:none">
    
            <button id="reset"  value="Insert" onclick="getValue();"  >Finish</button>
            </form>
            <button  type="button" onclick="breaktime()">Break Time</button><br>
      
    
    
            <div id="breakbar" style="display:none"><h1 class="txttime" ><div id ="timer_down" >00:00:10</div></h1>
        
            <button onclick="changeState_down();" id="control_down">START</button>
        
            </div>
            </div>
            
           
             <article >
<div class="content">
<form name="form2" method="post" action="save_edit_teacher.php">
  Edit Profile! <br><br>
  <table width="450" border="1" style="width: 450px">
    <tbody>
      
      <tr>
        <td> &nbsp;Name</td>
        <td>
          <input name="txtFname" type="text" id="txtFname" size="20">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Lastname</td>
        <td><input name="txtLname" type="text" id="txtLname">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Faculty</td>
        <td><input name="txtFaculty" type="text" id="txtFaculty">
        </td>
      </tr>
      <tr>
        <td>&nbsp;Major</td>
        <td><input name="txtMajor" type="text" id="txtMajor">
		</td>
      </tr>
      <tr>
        <td> &nbsp;Birthdate <font size="-1" color="gray"><I>(YYYY-MM-DD)</I></font></td>
        <td> <input name="txtBirthdate" type="text" id="txtBirthdate">
        </td>
      </tr>
	  <tr>
        <td> &nbsp;Gender</td>
        <td> <select name="txtGender" id="txtGender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </td>
      </tr>
	  <tr>
        <td> &nbsp;Phone <font size="-1" color="gray"><I>(0800000000)</I></font></td>
        <td> <input name="txtPhone" type="text" id="txtPhone">
        </td>
      </tr>
	  <tr>
        <td> &nbsp;E-mail</td>
        <td> <input name="txtEmail" type="text" id="txtEmail">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Save">
</form>
</article>
            
            
            <aside >
                <div id=asidemenu>
                <?php include 'php/menuright.php';?>
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
