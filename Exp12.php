<?php
    function swap($x, $y) {
        $x = $x + $y;
        $y = $x - $y;
        $x -= $y;
        echo $x . ", " . $y;
    }

    function swap_r(&$x, &$y) {
        $x = $x + $y;
        $y = $x - $y;
        $x -= $y;
    }

    $a = 10;    $b = 20;    $c = 30;    $d = 40;

    swap($a, $b);
    echo "c = " . $c . "d = " . $d . "<br>";
    swap_r($c, $d);
    echo "c = " . $c . "d = " . $d . "<br>";
?>