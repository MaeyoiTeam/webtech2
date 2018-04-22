<?php
	session_start();
    if (isset($_SESSION['ID']))
	{
        echo "<script type='text/javascript'>alert('Loged in!');</script>";
		echo "<script type='text/javascript'>window.location='index.php';</script>";
	}
?>
<html>
    <head>
    <style>
#randomfield { 
-webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; 
  width: 200px;
  color: black;
  border-color: black;
  text-align: center;
  font-size: 40px;
  background-image: url('http://4.bp.blogspot.com/-EEMSa_GTgIo/UpAgBQaE6-I/AAAAAAAACUE/jdcxZVXelzA/s1600/ca.png');
}
</style></head>
    
<body onLoad="ChangeCaptcha()"> 
    
    
    <script>
function ChangeCaptcha() {
	var chars = "0123456789ABCDEFGHJKLMNOPQRSTUVWXTZabcdefghikmnopqrstuvwxyz";
	var string_length = 6;
	var ChangeCaptcha = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		ChangeCaptcha += chars.substring(rnum,rnum+1);
	}
	document.getElementById('randomfield').value = ChangeCaptcha;
}
    
function check() {
if(document.getElementById('CaptchaEnter').value == document.getElementById('randomfield').value ) {
    document.getElementById("form1").submit();  
}
    else{alert('Secure Code is Wrong!')};
}
</script>
    
    
    
<form id="form1" method="post" action="check_login.php">
  <h1 align="center">Login<br>
  <table style="width: 300px" align="center">
    <tbody>
      <tr>
        <td> &nbsp;Username</td>
        <td>
          <input name="txtUsername" type="text" id="txtUsername">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
    </tbody>
  </table>
  <br><br>
</form>
    <center><input type="text" id="randomfield" disabled></center><br>
    <center><input id="CaptchaEnter" size="20" maxlength="6" /></center><br>
    <center><button type="button" onclick="check()">Log in</button></center> 
<form name="form2" action="home.php"> 
    <Br><center><button>Go Home</button></center>
</form>

</body>
</html>
