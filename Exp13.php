<?php
    $n = 5;
    echo fact($n);
    function fact($n) {
        if($n <= 0)   return 1;
        else            return $n * fact($n - 1);
    }
?>