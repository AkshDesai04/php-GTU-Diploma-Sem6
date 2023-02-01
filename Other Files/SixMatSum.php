<html>
    <head><title>Document</title></head>
    <body>
        <?php
            $arr1 = array(
                array(1, 2, 3),
                array(4, 5, 6),
                array(7, 8, 9)
            );
            $arr2 = array(
                array(10, 20, 30),
                array(40, 50, 60),
                array(70, 80, 90)
            );

            for($i = 0;$i < count($arr1);$i++) {
                for($j = 0;$j < count($arr1[1]);$j++) {
                    echo ($arr1[$i][$j] + $arr2[$i][$j]) . "    ";
                }
                echo "<br>";
            }
        ?>
    </body>
</html>