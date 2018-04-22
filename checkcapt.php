<?php
    session_start();
?>
<html>
<form name ='verify' method ='POST' action ='calendar.php'>
<head>
<title>verify</title>
</head>
 
<body>
    <?php
    if(isset($_GET['chk']))
    {
        session_id();
        $captcode =  $_SESSION['captcha'];
        $captcodechk = $_POST['txtcaptcha'];
       // echo "CAPTCODE = $captcode";
       // echo "CHECK = $captcodechk";
       // $startadd ='';
        
        if($captcode == $captcodechk && $captcode != NULL && $captcodechk != NULL)
        {
            $startadd = 1;
            echo "<script type=\"text/javascript\">";
            echo "alert(\"Verify Success\");";
            echo "window.close();";
            echo "</script>";
            $_SESSION['verify'] = $startadd;
            $_SESSION['blankdata'] = $captcodechk;
        }
        else
        {
           echo "<script type=\"text/javascript\">";
            echo "alert(\"Verify Failed\");";
            echo "window.close();";
            echo "</script>"; 
        }
    }
    ?>
</body>
</form>
</html>