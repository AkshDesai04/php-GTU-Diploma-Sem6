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

        $a = $_POST['no1'];
        $b = $_POST['no2'];
        echo "addition = " . ($a + $b) . "<br>";
        echo "substraction = " . ($a - $b) . "<br>";
        echo "Multiplaction = " . ($a * $b) . "<br>";
        echo "Division = " . ($a / $b) . "<br>";
        echo "Mod = " . ($a % $b) . "<br>";

        if ($a > $b) {
            echo "A is big" . "<br>";
        } elseif ($b > $a) {
            echo "B is big" . "<br>";
        } else {
            echo "Both are same" . "<br>";
        }

        if ($a < $b || $b > $a) {
            echo "Both are not same" . "<br>";
        }
    }
        ?>
       
    </body>
</html>