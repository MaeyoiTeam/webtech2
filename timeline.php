<?php
session_start();

?>
<html>
<head>
<title>Notification Board</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container">
    <div id="content" align="center">
		<h1>Annoucement</h1><br><br>
		


<?php
    include('php/config.php');
    date_default_timezone_set("Asia/Bangkok");
    
    $strSQL = "SELECT * FROM noticemsg ";
    $showquery = $mysqli->query($strSQL);


    
 ?>
    <div>
    <table width="600" border="1">
  <tr>
   
      <th width="198"> <div align="center"><h3>Message</h3></div></th>
      <th width="198"> <div align="center"><h3>Date-Time</h3></div></th>
    
  </tr>
     <?php
    $resultshow = array();
while($resultshow = mysqli_fetch_array($showquery,MYSQLI_ASSOC))
{
    ?>
  <tr>
   
      <td><div align="center"><?php echo $resultshow["message"];?></div></td>
      <td><div align="center"><?php echo $resultshow["date_time"];?></div></td>
</tr>
<?php } ?>

<?php
mysqli_close($mysqli);
?>
    </table> 
    </div>
    </body>
</html>