 <?php
                    
if(isset($_SESSION['ID'])){
                    
                    if($_SESSION['Status']=="Teacher"){
                        $sql = "teachert";
                    }
                    else{
                        $sql ="studentt";  
                    }

 $strSQL = "SELECT fname,lname FROM ".$sql." WHERE ID = '".$_SESSION['ID']."' ";
	               $result=mysqli_query($objCon,$strSQL);
                     $row=mysqli_fetch_row($result);

echo "<br><img class='imgs' src='images/".$_SESSION['ID'].".jpg' width='60%' float:'center' style='border-radius: 50%;'><br>";
       echo "<a href='edit_profile.php'>Edit</a><br>";
   echo "<p>".$row[0]." ".$row[1]."</p>";        
   echo  "<a href='Annoucement.php'><h1>Annoucement</h1></a>";
                echo  "<a href='Course.php'><h1>Course</h1></a>";
}
?>