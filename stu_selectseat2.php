<?php
if(session_id()===''){
session_start();
 
}
include('php/config.php');

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
             
                 <?php

$strSQL = "SELECT coursedate.date_date FROM coursedate WHERE coursedate.course_ID = '".$_SESSION['course_ID']."' AND coursedate.sec = '".$_SESSION['sec']."'";



$query = "SELECT * FROM seat WHERE seat.course_ID='".$_SESSION['course_ID']."'";
$tresult = $objCon->query($query);


//$objResult = mysqli_fetch_array($objCon,MYSQLI_ASSOC);

while($success_seat = mysqli_fetch_array($tresult)){
if (!$tresult) {
    printf("Error1");
    exit();
}
$multipleseat = $success_seat["seat_row"]*$success_seat["seat_col"];
$row = $success_seat["seat_row"];
$column = $success_seat["seat_col"];
$seat = $success_seat["seat_num"];
$allseat = $row*$seat;
$l = 1;
$n = 1;    
    
echo "<form method='post' action='save_seat.php' name='radio_selectseat'>";     
echo"<center><table width='100%' height='95' border='2' cellspacing='4' cellpadding='10'>";
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
    echo "<select name='subject'>";
    
    $subject = "SELECT coursedate.date_date FROM coursedate WHERE coursedate.course_ID = '".$_SESSION['course_ID']."' AND coursedate.sec = '".$_SESSION['sec']."'";
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

    echo "<button type='submit' name='course' value='".$_SESSION['course_ID']."/".$_SESSION['sec']."'>Submit</button>";
    echo"<br><center><button type='button' onclick='history.go(-1);'>Back </button></center>";
echo"</form>";
        

}	


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

<?php
	mysqli_close($objCon); 
?>