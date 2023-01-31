<html>
    <body>
    <form method="post">  
    Enter 2 strings:<br>  
    <input type="text" name="str1" value="Umang">
    <input type="text" name="str2" value="Sailor">  
    <input type="submit" name="submit" value="Submit" /> 
    </form> 
    <?php
    if ($_POST) {
    $str1=$_POST['str1'];
    $str2=$_POST['str2'];

    echo "strings are : $str1 and $str2<br>";
    
    $l1=strlen($str1);
    $l2=strlen($str2);
    echo "Length : $l1 and $l2<br>";

    $add=$str1.$str2;
    echo "conc : $add <br>";

    $rev=strrev($add);
    echo "rev of $add : $rev <br>";
    }
?>
        
    </body>
</html>