<?php
if(session_id()===''){
session_start();
 
}
include('php/config.php');
    if (isset($_SESSION['ID']))
	{
        echo "<script type='text/javascript'>alert('Loged in!');</script>";
		echo "<script type='text/javascript'>window.location='index.php';</script>";
	}
?>
<!DOCTYPE html>
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
</style>

        <meta charset="UTF-8">
        
        <script type="text/javascript" src="js/mouse.js">  </script>
        <script type="text/javascript" src="js/time.js">  </script>
        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />

    </head>
    
    <body onLoad="ChangeCaptcha()">
        <nav>
            <div id="tabs" >
             <?php include 'php/menutop.php';?>
                    
            </div>
             <div id="tabs2" >
                    
            </div>
            </nav>

     
        <div id="container">
            
            
            <div class="closeFloating" >
             <a onclick="onOffbar()"><button id="textCloseFloating">Close</button></a>
            </div>
            
            <div id="floatingMenu">

            </div>
            
           
             <article >
             <div class="content">
             
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
                     <h1 align="center">Login<br></h1>
  <table border="1" style="width: 1500px" align="center">
    <tbody>
      <tr>
        <td align="center"> &nbsp;Username</td>
        <td>
          <input name="txtUsername" type="text" id="txtUsername">
        </td>
      </tr>
      <tr>
        <td align="center"> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
</form>
    <center><input type="text" id="randomfield" disabled></center><br>
    <center><input id="CaptchaEnter" size="20" maxlength="6" /></center><br>
    <center><button type="button" onclick="check()">Log in</button></center> 
<form name="form2" action="home.php"> 
    <br><center><button>Go Home</button></center>
</form>
                 
                 
                 </div>
              </article>
            
            
            <aside >
                <div id=asidemenu>
            
                </div>
           
            </aside>
       
        </div>
        
        <footer>
               <p>Footer</p>
            </footer>

        
    </body>    

</html>


    
    
    
