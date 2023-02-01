<?php
    session_start();
       
    if(isset($_SESSION['visit']))
        $_SESSION['visit'] = $_SESSION['visit']+1;
    else
        $_SESSION['visit']=1;
          
    echo"visit = ".$_SESSION['visit'];
      
    ?>