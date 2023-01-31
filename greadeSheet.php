<?php
    // Define Variables
    $marks = 80;
    $grade = '';

    // Check marks and assign grade
    if($marks >= 90)
        $grade = 'AA';
    elseif($marks >= 80)
        $grade = 'AB';
    elseif($marks >= 70)
        $grade = 'BB';
    elseif($marks >= 60)
        $grade = 'BC';
    else
        $grade = 'FF';

    // Display Result
    echo "You have scored $marks marks and got $grade grade.";
?>
