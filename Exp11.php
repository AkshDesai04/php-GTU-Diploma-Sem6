<?php
    function sum() {
        $args = func_get_args();
        $add = 0;
        foreach($args as $i)
            $add += $i;
        return $add;
    }
    function add($a, $b = 10) {
        return $a + $b;
    }

    echo sum(1, 2, 3, 4, 5) . "<br>";
    echo add(1) . "<br>";
    echo add(1, 2) . "<br>";
?>