<html>
    <head><title>Document</title></head>
    <body>
        <?php
            $a = 10;
            $b = 20;
            echo "Sum = " . ($a + $b) . "<br>";
            echo "Dif = " . ($a - $b) . "<br>";
            echo "Pro = " . ($a * $b) . "<br>";
            echo "Div = " . ($a / $b) . "<br>";
            echo "Mod = " . ($a % $b) . "<br>";

            if($a > $b) {
                echo "A is greater" . "<br>";
            }
            elseif($b > $a) {
                echo "B is grater" . "<br>";
            }
            else {
                echo "They are equal" . "<br>";
            }

            if($a < $b && $b > $a) {
                echo "Yes, math works" . "<br>";
            }
        ?>
    </body>
</html>