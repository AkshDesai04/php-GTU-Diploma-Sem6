<!-- remove leading 0 from (000547023.24)
remove trailing slashes 'tqbfjotld///'
remove whitespaces from both sides(*) -->

<?php
    $a = "000547023.24";
    $b = "The Quick Brown Fox Jumped Over The Lazy Dog///";
    $c = "   PHP Programming        ";
    
    echo "--" . trim($a, '0') . "--<br>";
    echo "--" . trim($b, '/') . "--<br>";
    echo "--" . trim($c) . "--<br>";
?>