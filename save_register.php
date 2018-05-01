<html>
<body>

<?php

    $ID = trim($_POST['ID']);
    $Username = trim($_POST['txtUsername']);
    $Password = trim($_POST['txtPassword']);
    $ConPassword = trim($_POST['txtConPassword']);
    $FName = trim($_POST['txtFirstName']);
    $LName = trim($_POST['txtLastName']);
    $Faculty = trim($_POST['txtFaculty']);
    $Major = trim($_POST['txtMajor']);
    $Birthdate = $_POST['txtBirthdate'];
    $Gender = trim($_POST['Gender']);
    $Phone = trim($_POST['txtPhone']);
    $Mail = trim($_POST['txtMail']);
    $Status = $_POST['ddlStatus'];
    include("php/   config.php");
    if($ID == "")
    {
        echo "<script type='text/javascript'>alert('Please input ID!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Username == "")
    {
        echo "<script type='text/javascript'>alert('Please input Username!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Password == "")
    {
        echo "<script type='text/javascript'>alert('Please input Password!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($FName == "")
    {
        echo "<script type='text/javascript'>alert('Please input First Name!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($LName == "")
    {
        echo "<script type='text/javascript'>alert('Please input Last Name!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Faculty == "")
    {
        echo "<script type='text/javascript'>alert('Please input Faculty!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Major == "")
    {
        echo "<script type='text/javascript'>alert('Please input Major!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Birthdate == "")
    {
        echo "<script type='text/javascript'>alert('Please input Birthdate!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Gender == "")
    {
        echo "<script type='text/javascript'>alert('Please input Gender!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Phone == "")
    {
        echo "<script type='text/javascript'>alert('Please input Phone!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Mail == "")
    {
        echo "<script type='text/javascript'>alert('Please input Mail!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($Status == "")
    {
        echo "<script type='text/javascript'>alert('Please input Status!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
    if($_POST['txtPassword'] != $_POST['txtConPassword'])
    {
        echo "<script type='text/javascript'>alert('Password not Match!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
        exit();
    }
 

    $strSQL = "SELECT ID,Username FROM member WHERE ID = '".$ID."' && Username = '".$Username."'";
    $objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if($objResult)
    {
        echo "<script type='text/javascript'>alert('ID or Username already exists!');</script>";
        echo "<script type='text/javascript'>window.history.go(-1);</script>";
    }
    else
    {
        $strSQL = "INSERT INTO member(ID, Username,Password, Status) VALUES ('".$ID."','".$Username."','".$Password."','".$Status."')";
        $objQuery = mysqli_query($objCon,$strSQL);
        if ($Status == 'TEACHER'){
            $tbl='teachert';
        }
        else{
            $tbl='studentt';
        }
    $strSQL = "INSERT INTO ".$tbl." (`ID`, `Fname`, `Lname`, `Faculty`,`Major`,`Birthdate`,`Gender`,`Phone`,`Email`) VALUES ('".$ID."','".$FName."','".$LName."','".$Faculty."','".$Major."','".$Birthdate."','".$Gender."','".$Phone."','".$Mail."')";
            $objQuery = mysqli_query($objCon,$strSQL);
    
        echo "<script type='text/javascript'>alert('Registered!');</script>";
        echo "<script type='text/javascript'>window.location='login.php';</script>";
    }
    
    $strSQL = "SELECT ID,Username FROM member WHERE ID = '".$ID."' && Username = '".$Username."'";
    $objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if(!$objResult)
    {
        echo "<script type='text/javascript'>alert('Register Fail!');</script>";
    }
    
    echo "<script type='text/javascript'>window.location='login.php';</script>";
    
mysqli_close($objCon);
?>
</body>
</html>