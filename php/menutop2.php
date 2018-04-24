<?php


if(isset($_SESSION['ID'])){
                    
                    if($_SESSION['Status']=="Teacher"){
                        $sql = "teachert";
                    }
                    else{
                        $sql ="studentt";   
                    }
                    echo "<a href='php/logout.php'>Log out</a><br>";
}

?>
