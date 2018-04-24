<?php
$course =$_POST["course"];
$txt = explode("/",$course);
//echo $txt[0]; //course_ID
//echo $txt[1]; // sec
$strSQL = "SELECT course.*,teachert.* FROM course,teachert WHERE course.ID='".$txt[0]."' AND  teachert.ID=course.Teacher_ID";
echo $row[1];
//if ($result=mysqli_query($objCon,$strSQL))
//  {
//  while ($row=mysqli_fetch_row($result))
//    {
//      
//      
//      
//    }
//
//}
  // Free result set
  //mysqli_free_result($result);
	
	 echo "<a href='php/logout.php'>Log out</a><br>";

?>