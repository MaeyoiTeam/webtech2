<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	
	include("config.php");
$student = "STUDENT";
$query = "SELECT * FROM Members ORDER BY UserID asc" or die("Error :" .mysqli_error());
$result = mysqli_query($objCon,$query);
//$objResult = mysqli_fetch_array($objCon,MYSQLI_ASSOC);

echo "<h1><center>Student's Seat<center></h1>";
echo "<br><br>";
echo "<table border='1' align='center' width='400'  ";
echo "<tr><td align=CENTER bgcolor=#CCCCCC width='130'>UserID</td><td align=CENTER bgcolor=#CCCCCC >Name and Surname</td><td align=CENTER bgcolor=#CCCCCC >Seat</td></tr>";
    while($row = mysqli_fetch_array($result)) {
        if($row["Status"] == "STUDENT"){
    echo "<tr>";
    echo "<td>" .$row["UserID"] .  "</td> ";
    echo "<td>" .$row["NameSurname"] .  "</td> ";
    echo "<td>" .$row["Seat"] .  "</td> ";
    echo "</tr>";
	}
    }
  echo "</table>";

  mysqli_close($objCon); 
?>
<html>
    <body>
        <Br><center><button onclick="history.go(-1);">Back </button></center>
    </body>
</html>



