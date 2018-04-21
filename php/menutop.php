<?php
$course =$_POST["course"];
$txt = explode("/",$course);
echo $txt[0]; //course_ID
echo $txt[1]; // sec
$strSQL = "SELECT studentcourse.*,course.Teacher_ID,homework.* FROM studentcourse,course,homework WHERE studentcourse.course_ID='".$txt[0]."' AND studentcourse.sec='".$txt[1]."'AND studentcourse.course_ID=course.ID AND studentcourse.sec=homework.sec AND studentcourse.course_ID=homework.course_ID";
$ID = array();
$x=1;
if ($result=mysqli_query($objCon,$strSQL))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      $ID[$x]=$row[0];
      $course_name[$x] =$row[1];
      $sec[$x]=$row[2];
      $x++;
    }
  // Free result set
  mysqli_free_result($result);
}
?>
