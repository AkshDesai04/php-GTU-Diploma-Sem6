<html>
    <body>
    <form method="post">  
    Enter 2 no:<br>  
    <input type="number" name="no1"> 
    <input type="number" name="no2">  
    <input type="submit" name="submit" value="Submit" /> 
    <br>
    </form> 
    <?php
    if ($_POST) {
        function add($x, $y)
        {
            echo "addition of no are  ";
            echo $x + $y;
        }
        $var = "add";
        $var($_POST['no1'],$_POST['no2']);
    }
?>
    </body>
</html>