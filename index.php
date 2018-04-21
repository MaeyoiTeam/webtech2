<?php
if(session_id()===''){
session_start();
 
}
include('php/config.php');  

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <script type="text/javascript" src="js/mouse.js">  </script>
        <script type="text/javascript" src="js/time.js">  </script>
        <link rel="stylesheet" type="text/css" href="css/themeMax.css">
        <link rel="stylesheet" href="css/menu.css" type="text/css" />

    </head>
    
    <body >
        <nav>
            <div id="tabs" ></div>
             <div id="tabs2" >
                    
<?php include 'php/menutop2.php';?>
            </div>
            </nav>

     
        <div id="container">
            
            
            <div class="closeFloating" >
             <a onclick="onOffbar()"><button id="textCloseFloating">Close</button></a>
            </div>
            
            <div id="floatingMenu">
                <?php
                      echo $_SESSION['ID']."<br>";
                      echo $_SESSION['Status']."<br>";
                      ?>
            </div>
            
           
             <article >
                  <div class="content">
                    

                   
                 </div>
            </article>
            
            
            <aside >
                <div id=asidemenu>
            <?php include 'php/menuleft.php';?>
                </div>
           
            </aside>
       
        </div>
        
        <footer>
               <p>Footer</p>
            </footer>

        
    </body>    

</html>

