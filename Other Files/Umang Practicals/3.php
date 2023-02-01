<html>
    <body>
    <form method="post">  
    Enter no:<br>  
    <input type="number" name="no1"> 
    <input type="submit" name="submit" value="Submit" /> 
    <br>
    </form> 
    <?php
    if ($_POST) {
        $no = $_POST['no1']-1;
            $a = 0;
            $b = 1;
        echo "Fibonacci<br>";
            echo "$a";
            for($i = 0;$i < $no;$i++) {
                echo ",$b ";
                $b = $a + $b;
                $a = $b - $a;
            }
        }
        ?>
    </body>
</html>