<?php
    $a = 10;$b = 20;$c = 30;
    $max = $a;

    if($b >= $a && $b >= $c) $max = $b;
    if($c >= $a && $c >= $b) $max = $c;

    echo $max;
?>