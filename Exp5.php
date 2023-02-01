<?php
    $maths = 41;$english = 34;$science = 77;$computer = 100;$ss = 80;

    echo "Maths: " . grade($maths) . "<br>";
    echo "English: " . grade($english) . "<br>";
    echo "Science: " . grade($science) . "<br>";
    echo "Computer: " . grade($computer) . "<br>";
    echo "Ss: " . grade($ss) . "<br>";
    $avg = ($math + $english + $science + $computer + $ss)/5;
    echo "Percentage: " . $avg . "%<br>";
    echo "Overall: " . grade($avg) . "<br>";

    function grade($marks) {
        if($marks > 90)     return "AA";
        if($marks > 80)     return "AB";
        if($marks > 70)     return "BB";
        if($marks > 60)     return "BC";
        if($marks > 50)     return "CC";
        if($marks > 40)     return "CD";
        
        return "Fail";
    }
?>