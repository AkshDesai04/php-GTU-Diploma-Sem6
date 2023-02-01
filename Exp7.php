<?php
    $arr = array(40, 50, 60, 70, 80);

    echo "For loop<br>";
    for($i = 0;$i < 10;$i++) echo $i;
    echo '<br>';
    echo "While loop<br>";
    while($i < 20)  echo $i++;
    echo '<br>';
    echo "DoWhile loop<br>";
    do {echo $i++;} while($i < 30);
    echo '<br>';
    echo "ForEach loop<br>";
    foreach($arr as $val) echo $val;
    echo '<br>';
?>