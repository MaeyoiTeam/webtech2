<?php
include("connect.php");
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
    $sqlshowevent = "SELECT   `eventDate`,`Title`, `Detail` FROM `eventcalendar` ORDER BY  `eventDate` ASC ";
    $showquery = $mysqli->query($sqlshowevent);
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


