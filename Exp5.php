<?php
    $maths = 41;$english = 34;$science = 77;$computer = 100;$ss = 80;

    echo "Maths: " . grade($maths) . "<br>";
    echo "English: " . grade($english) . "<br>";
    echo "Science: " . grade($science) . "<br>";
    echo "Computer: " . grade($computer) . "<br>";
    echo "Ss: " . grade($ss) . "<br>";
    $avg = ($maths + $english + $science + $computer + $ss)/5;
    echo "Percentage: " . $avg . "%<br>";
    echo "Overall: " . grade($avg, 1) . "<br>";

    function grade($marks, $x = 0) {
        //x = 0 -> for subjects
        //x = 1 -> for overall
        if($marks > 90)     return $x == 0 ? "AA" : "A";
        if($marks > 80)     return $x == 0 ? "AB" : "B";
        if($marks > 70)     return $x == 0 ? "BB" : "C";
        if($marks > 60)     return $x == 0 ? "BC" : "D";
        if($marks > 50)     return $x == 0 ? "CC" : "E";
        if($marks > 40)     return $x == 0 ? "CD" : "F";
        return "Fail";
    }
?>