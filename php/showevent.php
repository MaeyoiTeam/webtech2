<?php
session_start();
include("config.php");
date_default_timezone_set('Asia/Bangkok');
?>
<html>
<title>EVENT</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
   
    <link rel="stylesheet" href="casssssss.css" />
   
</head>
<body>





</body>
<?php
				$idcompare = $_SESSION["ID"];
			    $userquery = "SELECT `Username`,`Password` FROM member WHERE ID = '".$idcompare."'";//กำลังแก้ตรงนี้ 5/1/2018
				$resultuser = mysqli_query($objCon,$userquery);
				$userpass = mysqli_fetch_array($resultuser);
			    $userinsert = $userpass['Username'];
				$passwordinsert = $userpass['Password'];
    $sqlshowevent = "SELECT   `eventDate`,`Title`, `Detail` FROM `eventcalendar` WHERE Username ='".$userinsert."' and Password='".$passwordinsert."' ORDER BY  `eventDate` ASC ";
    $showquery = mysqli_query($objCon,$sqlshowevent);
?>
<div class="w3-responsive">
    <table width="600" border="1" class="w3-table-all w3-hoverable">
  <tr class="w3-lime">
    <th width="20%"> <div align="center">Event Date </div></th>
    <th width="30%"> <div align="center">Title </div></th>
    <th width="50%"> <div align="center">Detail </div></th>
 </tr>
<?php
while($resultshow=mysqli_fetch_array($showquery,MYSQLI_ASSOC))
{
?>
<tr>
    <td><?php echo $resultshow["eventDate"];?></td>
    <td><?php echo $resultshow["Title"];?></td>
    <td><?php echo $resultshow["Detail"];?></td>
</tr>
<?php
}
?>
</table>
    </div>
</html>


