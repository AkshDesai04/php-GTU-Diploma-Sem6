<?php
    function sum(...$nums) {
        $add = 0;
        foreach($nums as $i) 
            $add += $i;
        return $add;
    }
    function add($a, $b = 10) {
        return $a + $b;
    }

    echo sum(1, 2, 3, 4, 5) . ".....";
    echo add(1) . ".....";
    echo add(1, 2) . ".....";
?>