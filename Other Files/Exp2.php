<html>
    <head><title>Document</title></head>
    <body>
        <?php
            $a = 100;
            const pi = 22/7;
            call();

            function call(){
                if(pi > 0) {
                    global $a;
                    $sum =  $a + pi;
                    echo "sum: " . $sum;
                }
        }
        ?>
    </body>
</html>