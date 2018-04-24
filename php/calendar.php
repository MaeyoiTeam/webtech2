
<?php
include("connect.php");
date_default_timezone_set('Asia/Bangkok');
?>

<meta name="viewport" content="width=device-width, initial-scale=1">	
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<html>
	<head>
	
<link rel="stylesheet" href="calendar.css" />

    <script>
            function closeWin()
            {
               window.close();
            }
            
            function openWindow(theURL,winName,features) 
            { //v2.0
                window.open(theURL,winName,features);
            }
           
    </script> 
        
	<script>
		function goPreviousMonth(month,year)
		{
			if(month == 1)
			{
				--year
				month = 13; //it is month 1 decrease year and display month 12
			}
			--month;
			var monthstring = ""+month+"";
			var monthlength = monthstring.length;
			if( monthlength <= 1)
			{
				monthstring = "0"+monthstring;
			}
			document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year; //link
		}
		function goNextMonth(month,year)
		{
			if(month == 12)
			{
				++year 
				month = 0; //it is month 12 increase year and display month 1
			}
			++month;
			var monthstring = ""+month+"";
			var monthlength = monthstring.length;
			if( monthlength <= 1)
			{
				monthstring = "0"+monthstring;
			}
			document.location.href = "<?php $_SERVER['PHP_SELF'];?>?month="+monthstring+"&year="+year; //link URL
		}		
	</script>
    
	</head>

	<body>
		
          
            <?php
			if(isset($_GET['day']))//check day pass variable
			{
    				$day = $_GET['day'];//if TRUE get the day from link
  			} 
			else 
			{
				$day = date("j");//if NOT don't change
			}
			if(isset($_GET['month']))
			{
				$month = $_GET['month'];
			}
			else
			{
				$month = date("n");
			}
			if(isset($_GET['year']))
			{
				$year = $_GET['year'];
			}
			else
			{
				$year = date("Y");
			}
			//echo $day."/".$month."/".$year
			//calender valiable
			$currentTimeStamp = strtotime("$year-$month-$day");
			//get current month name
			$monthName = date ("F", $currentTimeStamp);
			//Determine how many day there are in this month
			$numDays = date("t", $currentTimeStamp);
			//variable to count cell in the loop later
			$counter = 0;
		
         // Add Event
            ?>
            <?php
                        $todaysDate = date("m/d/Y");

            if(isset($_GET['add']))
			{
                
                //$verify = $_SESSION['verify'];
               // $txtcaptcha = $_SESSION['blankdata'];
                $title = $_POST['txttitle'];
				$detail = $_POST['txtdetail'];
                $eventdate = $month.'/'.$day.'/'.$year;
              if($title != NULL && $detail != NULL)
              {
				$sqlinsert = "INSERT into eventcalendar(Title,Detail,eventDate,dateAdded) values ('".$title."','".$detail."','".$eventdate."',now())";
				$resultinsert = $mysqli->query($sqlinsert);
              }
                if($resultinsert)
				{
					echo "<script type=\"text/javascript\">";
                    echo "alert(\"Add Event Success\");";
                    //echo "window.close();";
                    echo "</script>";
				}
                else
				{
					echo "<script type=\"text/javascript\">";
                    echo "alert(\"Failed to Added\");";
                  //  echo "window.close();";
                    echo "</script>";
				}
				 if($todaysDate == $eventdate)////ตรงนี้ <===
			         {
				        $resultnoti = $mysqli->query("SELECT * FROM `eventcalendar` WHERE eventDate='".$eventdate."'");
				        $sqlnoti = $resultnoti->fetch_array();
                        if($sqlnoti)
                        {
                        $notimsg = $sqlnoti['Title'];
					   $sqldelete = "DELETE FROM `eventcalendar` WHERE eventDate='".$eventdate."'";
					   $resultdelete = $mysqli->query($sqldelete);
                        }
				
                    }
				}
        
                 if(isset($_GET['del']))
			     {
                 $eventdate = $month.'/'.$day.'/'.$year;
                $delID = $_POST['txtid'];
				$delPWD = $_POST['txtpwd'];
				if($delID == 'admin' && $delPWD == 'moo')
				{ 
				$sqldelete = "DELETE FROM `eventcalendar` WHERE eventDate='".$eventdate."'";
				$resultdelete = $mysqli->query($sqldelete);
                }
                if($resultdelete)
				{
					echo "<script type=\"text/javascript\">";
                    echo "alert(\"Delete Success\");";
                    //echo "window.close();";
                    echo "</script>";
				}
                else
				{
					echo "<script type=\"text/javascript\">";
                    echo "alert(\"Delete Failed\");";
                    echo "</script>";
				}
				
				
			}
        ?>
            
       
        
		<table>
			<tr>
				<td><input class="w3-button w3-hover-pale-red w3-pink w3-round-xxlarge" style='width:40px;' value='<' name='previousbutton' onClick="goPreviousMonth(<?php echo $month.",".$year; ?>);"></td><!--prev btn-->
				<td class="w3-round-xxlarge w3-pink" colspan='5' align='center' style='width: 200px;' class="w3-myfont"><?php echo $monthName.", ".$year; ?></td>
                <td><input class="w3-button w3-hover-pale-red w3-pink w3-round-xxlarge" style='width:40px;' value='>' name='nextbutton' onClick="goNextMonth(<?php echo $month.",".$year; ?>);"></td>  <!--next btn-->
			</tr>
			<tr >
           
            
				<td class= 'w3-pale-red w3-myfont w3-round-xxlarge' width='40px' align='center'>Sun</td>
				<td class= 'w3-pale-red w3-myfont w3-round-xxlarge' width='40px' align='center'>Mon</td>
				<td class= 'w3-pale-red w3-myfont w3-round-xxlarge' width='40px' align='center'>Tue</td>
				<td class= 'w3-pale-red w3-myfont w3-round-xxlarge' width='40px' align='center'>Wed</td>
				<td class= 'w3-pale-red w3-myfont w3-round-xxlarge' width='40px' align='center'>Thu</td>
				<td class= 'w3-pale-red w3-myfont w3-round-xxlarge' width='40px' align='center'>Fri</td>
				<td class= 'w3-pale-red w3-myfont w3-round-xxlarge' width='40px' align='center'>Sat</td>
            
			</tr>
           
			<?php 
                    for ($i = 1; $i < $numDays+1; $i++, $counter++) //loop number of days
				{ 
				$timeStamp = strtotime ("$year-$month-$i");//timestamp for each day in loop
					if($i == 1)//check if it is day1
					{ 
      						$firstDay = date ("w", $timeStamp);//where day1
      						for ($j = 0; $j < $firstDay; $j++, $counter++) //loop blank cell is not first day
						{ 
      						echo "<td width='40px'>&nbsp;</td>";//blank space
      						}     
					}
					if($counter % 7 == 0 )//check day is last column 
					{ 
        					echo "<tr></tr>";//make new role
					}
				    $monthstring = $month;
					$monthlength = strlen($monthstring);
					$daystring = $i;
					$daylength = strlen($daystring);
					if($monthlength <= 1)
					{
						$monthstring = "0".$monthstring;
					}
					if($daylength <= 1)
					{
						$daystring = "0".$daystring;
					}
                        
					$todaysDate = date("m/d/Y");
					$dateToCompare = $monthstring.'/'.$daystring.'/'.$year; 
				    echo "<td align='center' width='40px' class='w3-hover-khaki w3-round-xxlarge w3-pale-yellow '";
				    if($todaysDate == $dateToCompare)
				    {
                        echo "class='w3-pink w3-round-xxlarge'";
				    }
				    else
				    {
                        $sqlCount = "select * from eventcalendar where eventDate='".$dateToCompare."'";
                        $noOfEvent = mysqli_num_rows($mysqli->query($sqlCount));
                        if($noOfEvent >= 1)
					   {
						  echo "class='w3-teal w3-round-xxlarge'";	
					   }
				    }echo "><a class='w3-myfont' href='".$_SERVER['PHP_SELF']."?month=".$monthstring."&day=".$daystring."&year=".$year."&v=true' >".$i."</a></td>";//display day on column
				$title = $_POST['txttitle'];
				//echo "$title";
				//
				
				
				}
				echo "</tr>";
			?>
            <tr>
            <td colspan='7' align='center' >
            <input  type="button" class='w3-bar-item w3-myfont w3-button w3-pink w3-round-xxlarge' value="Show Event" onClick="openWindow('php/showevent.php','All Event','width=950px,height=600px')">
            </td>
            </tr>
             <tr>
            <td colspan='7' align='center' >

         

            <?php
                 
                if(isset($_GET['v']))
            {
                    
            echo "<a href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&f=true' class='w3-bar-item w3-myfont w3-button w3-green'>ADD EVENT</a>";
            echo "<a href='".$_SERVER['PHP_SELF']."?month=".$month."&day=".$day."&year=".$year."&v=true&g=true' class='w3-bar-item w3-myfont w3-button w3-red'>DELETE EVENT</a>";
             }
            if(isset($_GET['f']))
			{
                
                   include('eventform.php');
                   
			
            }
			 if(isset($_GET['g']))
			{
                 
               include('deleteform.php');
                
              }
    
                
			
               
         
		?>
                 
        
            </td>
            </tr>
		</table>
        
        
       
	</body>
</html>