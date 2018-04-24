<?php
if(session_id()===''){
session_start();
 
}
include('config.php');

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
<a href="NewQuestion.php">New Topic</a>
<?php
$objConnect = mysql_connect("webservhost","basnamfon_namfon","basnamfon27") or die("Error Connect to Database");
$objDB = mysql_select_db("basnamfon_basnamfon");
$strSQL = "SELECT * FROM webboard ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$Num_Rows = mysql_num_rows($objQuery);

$Per_Page = 10;   // Per Page

$Page = $_GET["Page"];
if(!$_GET["Page"])
{
	$Page=1;
}

$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
	$Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
	$Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
	$Num_Pages =($Num_Rows/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}

$strSQL .=" order  by QuestionID DESC LIMIT $Page_Start , $Per_Page";
$objQuery  = mysql_query($strSQL);
?>
<table width="800" border="1">
  <tr>
    <td width="400"> <div align="center">QuestionID</div></td>
    <td width="458"> <div align="center">Question</div></td>
    <td width="90"> <div align="center">Name</div></td>
    <td width="130"> <div align="center">CreateDate</div></td>
    <td width="20"> <div align="center">View</div></td>
    <td width="20"> <div align="center">Reply</div></td>
  </tr>
<?php
while($objResult = mysql_fetch_array($objQuery))
{
?>
  <tr>
    <td><div align="center"><?php echo $objResult["QuestionID"];?></div></td>
    <td><a href="ViewWebboard.php?QuestionID=<?php echo $objResult["QuestionID"];?>"><?php echo $objResult["Question"];?></a></td>
    <td><?php echo $objResult["Name"];?></td>
    <td><div align="center"><?php echo $objResult["CreateDate"];?></div></td>
    <td align="right"><?php echo $objResult["View"];?></td>
    <td align="right"><?php echo $objResult["Reply"];?></td>
  </tr>
<?php
}
?>
</table>

<br>
Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
<?php
if($Prev_Page)
{
	echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
}

for($i=1; $i<=$Num_Pages; $i++){
	if($i != $Page)
	{
		echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
	}
	else
	{
		echo "<b> $i </b>";
	}
}
if($Page!=$Num_Pages)
{
	echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
}
mysql_close($objConnect);
?>
          
                 
                 
                 
                 
                 </div>
              </article>
            
            
            <aside >
                <div id=asidemenu>
            <?php include 'php/menuleft3.php';?>
                </div>
           
            </aside>
       
        </div>
        
        <footer>
               <p>Footer</p>
            </footer>

        
    </body>    

</html>
