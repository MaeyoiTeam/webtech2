<?php

date_default_timezone_set('Asia/Bangkok');
?>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html>
    <head>
       
        <link rel="stylesheet" href="calendar.css" />
        <script type="text/JavaScript">
            function openWindow(theURL,winName,features) 
            { //v2.0
                window.open(theURL,winName,features);
            }

</script>
        
        
        
        
        <script>
            function openverWin()
            {
               window.open("capchar.php","width=100,height=100");
            }
            function closeWin()
            {
               window.close();
            }
            
        </script> 
        
        

</head>
 
     
    <body>
<!--           onClick="openWindow('capchar.php','Verify','width=400px,height=220px')"-->
      
<form name ='eventform' method ='POST' action ="<?php $_SERVER['PHP_SELF']; ?>?month=<?php echo $month; ?>&day=<?php echo $day; ?>&year=<?php echo $year; ?>&v=true&add=true">
    <div>
    <table width='100%'>
         <thead>
            <tr align='center' class="w3-green">
                <td colspan='2'>INPUT YOUR EVENT</td>
            </tr>
        </thead>
		<tr>
			<td width='20%'>Event Title</td> 
			<td width='70%'><input type='text' name='txttitle' placeholder='input your event title..' ></td>
		</tr>
		<tr>
			<td width='20%'>Detail</td>
			<td width='70%'><textarea name='txtdetail' placeholder='input your event detail..'  ></textarea></td>
        </tr>
		<tr>
           
			<td colspan='2' align='center'><input type='submit' name='btnadd' value='ADD EVENT' ></td>
		</tr>

	</table>
        </div>
    
</form>
</body>
</html>