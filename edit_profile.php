
<?php
if(session_status() === PHP_SESSION_ACTIVE) {session_start();}
        include("php/config.php");
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
    
    <body onload="startTime()">
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

<?
if($_SESSION["Status"]=="Teacher"){$sql = "teachert";}else{$sql = "studentt";}

$strSQL = "SELECT * FROM ".$sql." WHERE ID = '".$_SESSION['ID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_NUM);

echo $objResult[0];
echo $objResult[1];
echo $objResult[2];
echo $objResult[3];
echo $objResult[4];
?>


<div class="content">
<form name="form1" method="post" action="php/save_edit.php">
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
