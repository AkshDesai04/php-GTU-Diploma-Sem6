<?php
    $str = "The quick brown jumps over the lazy dog";

    echo "The string ";
    if(!strpos($str, "jumps"))
        echo "does not ";
    echo "contains the word";

    echo "Last occ of 'the'" . strpos($str, "the");
?>