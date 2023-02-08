<!-- check if str contains specifiic str "tqbfjotld" "jumps"
print positionm of  last occuraance of "the" -->

<?php
    $str = "The quick brown jumps over the lazy dog";

    if(!strpos($str, "jumps"))
        echo "string doesnt contain the word" . "<br>";
    else
        echo "Yes, it comtains it." . "<br>";

    echo "Last occ of 'the'" . strpos($str, "the");
?>