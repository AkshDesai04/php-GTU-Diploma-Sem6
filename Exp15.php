<?php
    $name = "Aksh Desai";

    for($j = ord("a");$j <= ord("z");$j++)
        echo chr($j) . ' ';
    echo "<br>";
    echo "Name: $name<br>";
    echo "Upper: " . strtoupper($name) . "<br>";
    echo "Lower: " . strtolower($name) . "<br>";
    echo "Revrs: " . strrev($name) . "<br>";
?>