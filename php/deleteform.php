<?php

date_default_timezone_set('Asia/Bangkok');
?>


 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html>
    
<head>
    <link rel="stylesheet" href="calendar.css" />
   
</head>
   

<form name ='delete' method ='POST' action ="<?php $_SERVER['PHP_SELF']; ?>?month=<?php echo $month; ?>&day=<?php echo $day; ?>&year=<?php echo $year; ?>&v=true&del=true">
    <!-- month=<?php //echo $month; ?>&day=<?php //echo $day; ?>&year=<?php //echo $year; ?> -->
    <div>
	<table width ='100%'>
        <thead>
            <tr align='center' class="w3-red">
                <td colspan='2'>VERIFY TO DELETE</td>
            </tr>
        </thead>
		<tr>
			<td width='30%'>ID : </td> 
			<td width='70%'><input type='text' name='txtid'></td>
		</tr>
		<tr>
			<td width='30%'>PASSWORD : </td>
			<td width='70%'><input type='text' name='txtpwd'></td>
		</tr>
		<tr>
			<td colspan='2' align='center'><input type='submit' name='btndel' value='DELETE EVENT'></td>
		</tr>
	</table>
        </div>
</form>
    </html>