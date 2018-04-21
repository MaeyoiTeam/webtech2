<?php


if(isset($_SESSION['ID'])){
                    
                    if($_SESSION['Status']=="Teacher"){
                        $sql = "teachert";
                    }
                    else{
                        $sql ="studentt";   
                    }
                    echo "<a href='home.php'>Log out</a><br>";
}

?>