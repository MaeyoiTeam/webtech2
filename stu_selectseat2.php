<?php
//echo"<html> meta http-equiv="Content-Type" content="text/html; charset=utf-8" />";
	include("php/config.php");


$course =$_POST["course"];
$txt = explode("/",$course);
//echo $txt[0]; //course_ID
//echo $txt[1]; // sec

$strSQL = "SELECT coursedate.date_date FROM coursedate WHERE coursedate.course_ID = '".txt[0]."' AND coursedate.sec = '".txt[1]."'";



$query = "SELECT * FROM seat WHERE seat.course_ID='".$txt[0]."'";
$tresult = $objCon->query($query);


//$objResult = mysqli_fetch_array($objCon,MYSQLI_ASSOC);

while($success_seat = mysqli_fetch_array($tresult)){
if (!$tresult) {
    printf("Error1");
    exit();
}
$multipleseat = $success_seat["seat_row"]*$success_seat["seat_col"];
echo "$multipleseat<br>";
$row = $success_seat["seat_row"];
$column = $success_seat["seat_col"];
$seat = $success_seat["seat_num"];
$allseat = $row*$seat;
$l = 1;
$n = 1;    
    
echo "<form method='post' action='save_seat.php' name='radio_selectseat'>";     
echo"<center><table width='1000' height='95' border='2' cellspacing='4' cellpadding='10'>";
    for($i=1 ; $i<=$row ; $i++){
        echo"<tr>";
        for($j=1 ; $j<=$column ; $j++){
            echo"<td height='45' colspan='$seat' align='center' valign='middle'>กลุ่ม $l</td>";
            $l++;
        }
        echo"</tr>";
        echo"<tr>";
        for($k=1 ; $k<=$column ; $k++){
            
            for($m=1 ; $m<=$seat ; $m++){
                if($active[$temp]=='present'){$color='#00FF00';}
                else if($active[$temp]=='Late'){$color='#FF8000';}
                else if($active[$temp]=='miss'){$color='#FF0000';}
                else{$color='#FFFFFF'; }
                echo"<td style='background-color:".$color." 'height='45' width='100'><label><input type='radio' name='RG1' value='G$n.S$m' id='RG1_0'>$m</label></td>";
            }
            $n++;
        }
        echo"</tr>";
    }
      echo"</table></center>";
    echo "<select name='subject'>" ?>
<?php
    
    $subject = "SELECT coursedate.date_date FROM coursedate WHERE coursedate.course_ID = '".$txt[0]."' AND coursedate.sec = '".$txt[1]."'";
    if($result=mysqli_query($objCon,$subject)){
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      echo "<option name ='date' value='$row[0]'> ".$row[0]."</option>";
    }
  // Free result set
  mysqli_free_result($result);
}
echo "</select>";
?>    
<?php
    echo "<button type='submit' name='course' value='".$txt[0]."/".$txt[1]."'>Submit</button>";
    echo"<br><center><button type='button' onclick='history.go(-1);'>Back </button></center>";
echo"</form>";
        

}	

	mysqli_close($objCon); 
?>

