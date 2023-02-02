<?php
    $num = 5;
    echo fact($num);
    function fact($num) {
        if($num <= 0)   return 1;
        else            return $num * fact($num - 1);
    }
?>