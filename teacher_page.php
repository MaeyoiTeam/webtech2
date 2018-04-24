
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
        include("config.php");
if(isset($_SESSION['ID'])){
		

	if($_SESSION['Status'] != "Teacher")
	{
		echo "This page for Teacher only!";
		exit();
	}
}
else{
	header("location:index.php");
	}
	
	

	$strSQL = "SELECT * FROM teachert WHERE ID = '".$_SESSION['ID']."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
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
            <?php include 'php/head.php';?>
        </header>
         
        <div id="container">
            
            
            <div class="closeFloating" >
             <a onclick="onOffbar()"><button id="textCloseFloating">Close</button></a>
            </div>
            
            <div id="floatingMenu">
                
           <?php include'php/timeInClass.php';?>
            </div>
            
           
             <article >
                  <div class="content">
             Welcome to Teacher Page! <br><br>
			 <table border="1" style="width: 350px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;ID</td>
        <td width="220"><?php echo '&nbsp;',$objResult["ID"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Name</td>
        <td><?php echo '&nbsp;',$objResult["Fname"]." ".$objResult["Lname"];?></td>
      </tr>
	  <tr>
        <td> &nbsp;Faculty</td>
        <td><?php echo '&nbsp;',$objResult["Faculty"];?></td>
      </tr>
	  <tr>
        <td> &nbsp;Major</td>
        <td><?php echo '&nbsp;',$objResult["Major"];?></td>
      </tr>
	  <tr>
        <td> &nbsp;Birthdate</td>
        <td><?php echo '&nbsp;',$objResult["Birthdate"];?></td>
      </tr>
	  <tr>
        <td> &nbsp;Gender</td>
        <td><?php echo '&nbsp;',$objResult["Gender"];?></td>
      </tr>
	  <tr>
        <td> &nbsp;Phone</td>
        <td><?php echo '&nbsp;',$objResult["Phone"];?></td>
      </tr>
	  <tr>
        <td> &nbsp;E-mail</td>
        <td><?php echo '&nbsp;',$objResult["Email"];?></td>
      </tr>
    </tbody>
  </table>
  <br>
  <a href="edit_profile_teacher.php">Edit profile</a><br>
  <br>
                 </div>
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

