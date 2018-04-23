<?php


if(isset($_SESSION['ID'])){
                    
                    if($_SESSION['Status']=="Teacher"){
                        $sql = "teachert";
                    }
                    else{
                        $sql ="studentt";   
                    }
                    echo "<a href='logout.php'";
					echo ">Log out</a><br>";
}

?>
