<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Notification Board</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
	<div id="content" align="center">
		<form action="notifyexec.php" method="post">
		<h1>Notice Board</h1><br> 

		Message<br>
		<textarea type="text" name="message" class="ed" rows="15" cols="50" class="form-control"></textarea><br/><br/>
		<input type="submit" class="btn btn-primary" value="Send" id="button1">
		</form>
	</div>
    </div>
<?php
    include('php/config.php');
    date_default_timezone_set("Asia/Bangkok");
    
    $strSQL = "SELECT * FROM noticemsg ";
    $showquery = $this->db->query($strSQL);


    
 ?>
    <div>
    <table width="300" border="1">
  <tr>
   
      <th width="198"> <div align="center"><h3>Message</h3></div></th>
      <th width="198"> <div align="center"><h3>Date-Time</h3></div></th>
    
  </tr>
     <?php
    $resultshow = array();
			while($resultshow = mysqli_fetch_array($showquery,MYSQLI_ASSOC)){
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
    </body>
</html>