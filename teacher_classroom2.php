<?php
if(session_id()===''){
session_start();
 
}
        include("php/config.php");
if(isset($_SESSION['ID'])){
		

	if($_SESSION['Status'] != "Teacher")
	{
		echo "This page for Teacher only!";
		exit();
	}
    if(!isset($_SESSION["num1"])&&!isset($_SESSION["coursedate"])){
        header("location:teacher_classroom.php");
}
}
else{
	header("location:index.php");
	}


$sql="SELECT room.student_ID,room.active,studentt.Lname,studentt.Fname FROM room,studentt WHERE studentt.ID=room.student_ID AND room.corusedate_ID='".$_SESSION["coursedate"]."'";
$ID = array();
$x=1;
if ($result=mysqli_query($objCon,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      $ID[$x]=$row[0];
      $active[$x] =$row[1];
      $lname[$x] =$row[2];
      $fname[$x]=$row[3];
      $x++;
    }
  // Free result set
  mysqli_free_result($result);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <script type="text/javascript" src="js/mouse.js">  </script>
        <script type="text/javascript" src="js/time.js">  </script>
        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />

    <style>       
    .chaiar td{border-style: solid;
    border-width: 5px;
    align-content: center;
        border-radius: 20px;
     font-size: 20px;
	backgroundColor : #FFFFFF;    
        }
    
    
    </style>

        <script language="javascript">
setTimeout(function(){
   window.location.reload(1);
}, 10000);
</script>
    </head>
    
    <body onload="startTime()">
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
<?php
$temp=1;
$x=$_SESSION["num1"];


echo  "<table cellspacing=25 cellpadding=25>";
    for($j=0;$j<$x/5;$j++){
        echo "<tr class='chair'>";

            for($i=0;$i<5;$i++){
        

                if($active[$temp]=='present'){$color='#00FF00';}
                else if($active[$temp]=='Late'){$color='#FF8000';}
                else if($active[$temp]=='miss'){$color='#FF0000';}
                else{$color='#FFFFFF'; }
        echo "<td id='tes".$temp."'";
        echo "style='background-color:".$color.";'";
        echo "onmouseover='onOver1(".$temp.")'"; 
        echo "onmouseout='onOut1(".$temp.")' >".$temp."<br>";
        echo $ID[$temp];
        echo    "<div id='t".$temp."' style='display:none'>";
                if(isset($ID[$temp])){
                    
                    echo "<br><img class='imgs' src='images/".$ID[$temp].".jpg' width='100%' float:center'>";
                    echo "<p>".$fname[$temp]." ".$lname[$temp]."</p>";        
                }
            echo    "</div>";

                echo "</td>";
                $temp++;
                if($temp==$x+1)
                    break;
                            }
        echo "</tr>";
    }
echo  "</table>";
?>

</article>


<script>
    
    
function onOver1(obj){
var x = document.getElementById("t"+obj);
        x.style.display = "block";
    }
function onOut1(obj){
var y = document.getElementById("t"+obj);
     y.style.display = "none";
    }
    
    
</script>
            
            <aside >
                <div id=asidemenu>
            <?php include 'php/menuleft2.php';?>
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
