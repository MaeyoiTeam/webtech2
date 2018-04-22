<?php
    session_start();
?>
<html>
    <?php
    $random = (string)rand(0,999999);
    $_SESSION['captcha'] = $random;
    ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
</style>
</head>
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
    
<form id="form1" method="post" action="save_register.php">
    <h1><center>Register Form<center></h1>
    <table width="420" border="0" style="width: 420px" align="center">
        <tbody>
            <tr>
                <td width="500">&nbsp;ID (StudentID or TeacherID)</td>
                <td width="180">
                    <input name="ID" type="text" id="ID" size="20">
                </td>
            </tr>
            <tr>
                <td> &nbsp;Username</td>
                <td><input name="txtUsername" type="text" id="txtUsername"></td>
            </tr>
            <tr>
                <td> &nbsp;Password</td>
                <td><input name="txtPassword" type="password" id="txtPassword"></td>
            </tr>
            <tr>
                <td> &nbsp;Confirm Password</td>
                <td><input name="txtConPassword" type="password" id="txtConPassword"></td>
            </tr>
            <tr>
                <td>&nbsp;First Name</td>
                <td><input name="txtFirstName" type="text" id="txtFirstName" size="20"></td>
            </tr>
            <tr>
                <td>&nbsp;Last Name</td>
                <td><input name="txtLastName" type="text" id="txtLastName" size="20"></td>
            </tr>
            <tr>
                <td>&nbsp;Faculty</td>
                <td><input name="txtFaculty" type="text" id="txtFaculty" size="20"></td>
            </tr>
            <tr>
                <td>&nbsp;Major</td>
                <td><input name="txtMajor" type="text" id="txtMajor" size="20"></td>
            </tr>
            <tr>
                <td>&nbsp;Birth Date</td>
                <td><input type="date" name="txtBirthdate" id="txtBirthdate" size="20"></td>
            </tr>
            <tr>
                <td>&nbsp;Gender</td>
                <td><select name="Gender" id="Gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>&nbsp;Phone</td>
                <td><input name="txtPhone" type="text" id="txtPhone" size="20"></td>
            </tr>
            <tr>
                <td>&nbsp;E-Mail</td>
                <td><input type="email" name="txtMail" id="txtMail" size="20"></td>
            </tr>
            <tr>
                <td> &nbsp;Status</td>
                <td>
                    <select name="ddlStatus" id="ddlStatus">
                        <option value="STUDENT">STUDENT</option>
                        <option value="TEACHER">TEACHER</option>
                    </select>
                </td>
            </tr>
        </tbody>
    <table>     
</form>
        <br><br><center><input type="text" id="randomfield" disabled></center><br>
        <center><input id="CaptchaEnter" size="20" maxlength="6" /></center><br>
        <center><button type="button" onclick="check()">Register</button></center>  
<form name="form2" action="home.php">
    <Br><center><button>Go Home</button></center>
</form>
</body>
</html>     