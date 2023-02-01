<?php
    $a1 = Array(Array(1, 2), Array(3, 4));
    $a2 = Array(Array(10, 20), Array(30, 40));
    $a3 = Array(Array($a1[0][0] + $a2[0][0], $a1[0][1] + $a2[0][1]), Array($a1[1][0] + $a2[1][0], $a1[1][1] + $a2[1][1]));;

    print_r($a3);
?>