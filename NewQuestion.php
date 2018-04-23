
<?php
//if(session_id()===''){
//session_start();
// 
//}
include('php/config.php');
date_default_timezone_set("Asia/Bangkok");
?>
<?php
$objConnect = mysql_connect("webservhost","basnamfon_namfon","basnamfon27") or die("Error Connect to Database");
$objDB = mysql_select_db("basnamfon_basnamfon");

if($_GET["Action"] == "Save")
{
	//*** Insert Question ***//
	$strSQL = "INSERT INTO webboard ";
	$strSQL .="(CreateDate,Question,Details,Name) ";
	$strSQL .="VALUES ";
	$strSQL .="('".date("Y-m-d H:i:s")."','".$_POST["txtQuestion"]."','".$_POST["txtDetails"]."','".$_POST["txtName"]."') ";
	$objQuery = mysql_query($strSQL);
	if($objResult ){
     echo "<script LANGUAGE='JavaScript'>window.alert('Question Fail');window.location.href='NewQuestion.php';</script>";
}
else{
echo "<script LANGUAGE='JavaScript'>window.alert('Question Success');window.location.href='Webboard.php';</script>";
}
	
}
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



<form action="NewQuestion.php?Action=Save" method="post" name="frmMain" id="frmMain">
  <table width="621" border="1" cellpadding="1" cellspacing="1">
    <tr>
      <td>Question</td>
      <td><input name="txtQuestion" type="text" id="txtQuestion" value="" size="70"></td>
    </tr>
    <tr>
      <td width="78">Details</td>
      <td><textarea name="txtDetails" cols="50" rows="5" id="txtDetails"></textarea></td>
    </tr>
    <tr>
      <td width="78">Name</td>
      <td width="647"><input name="txtName" type="text" id="txtName" value="" size="50"></td>
    </tr>
  </table>
  
  <input name="btnSave" type="submit" id="btnSave" value="Submit">
</form>
<?php
mysql_close($objConnect);
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
