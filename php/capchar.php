<?php
    session_start();
?>

<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<form name ='checkcaptcha' method ='POST' action ="checkcapt.php?&chk=true">
   <?php
    $random = (string)rand(0,999999);
    $_SESSION['captcha'] = $random;
    $_SESSION['txtcaptcha'];
    ?>
<head>
    <style>
        input[type=submit] 
        {
            width: 50%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .w3-myfont 
        {
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size:20px;
        }
    </style>
     <script>
            function closeWin()
            {
               window.close();
            }
     </script> 
    
    
    
</head>
<body>
    <div class="w3-container w3-card-4 w3-light-grey">
    <table width='100%'>
    <tr>
    <td align='center' class='w3-myfont w3-green w3-round-xxlarge'> Type the code you see </td>
    </tr>
    <tr>
        <td>
        <div align='center'>
            <?php for($i=0; $i<strlen($random); $i++){ ?>
            <img src="images0<?php echo $random{$i}; ?>.png" width="12%" height="13%" />
            <?php } ?>
        </div>
        </td>
    </tr>
    <tr>
        <td align='center'>
            
            <span  id="spryCaptcha" class='w3-myfont'>Enter the code 
                <input  class="w3-input w3-border w3-round-xxlarge" align='center' type="text" width='100%' name="txtcaptcha" id="captcha" tabindex="70" />
             
                <input type='submit' name='btnverify' align='center'  value='Verify' class='w3-myfont w3-green w3-round-xxlarge' >
            </span>
           
        </td>
    </tr>
    </table>
    </div>
</body>
</form> 
</html>


