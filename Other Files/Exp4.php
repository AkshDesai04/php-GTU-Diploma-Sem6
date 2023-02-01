<html>
    <head><title>Document</title></head>
    <body>
        <?php
            $a = 0;
            $b = 1;

            echo "$a";
            for($i = 0;$i < 10;$i++) {
                echo "$b ";
                $b = $a + $b;
                $a = $b - $a;
            }
        ?>
    </body>
</html>