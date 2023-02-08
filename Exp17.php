<!-- email -> it.tdec@gmail.com
extract username
get last 3 lettersletters
remove it.tdec from begenning
get characters after last slash in url -->

<?php
    $email = "it.tdec@gmail.com";
    $url = "akshy.com/akshSite";
    echo "User Name: " . substr($email, 0, strpos($email, '@')) . "<br>";
    echo "Last 3 chars: " . substr($email, -3, 3) . "<br>";
    echo "Removed: " . substr($email, 7) . "<br>";
    echo "After slash: " . substr($url, strrpos($url, "/") + 1);
?>