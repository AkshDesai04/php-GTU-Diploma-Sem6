<html>
    <body>
    <form method="post">  
    Enter mark:<br>  
    <input type="number" name="no"> 
    <input type="submit" name="submit" value="Submit" /> 
    <br>
    </form> 
    <?php
    if ($_POST) {
        $a = $_POST['no'];
        if ($a > 90 && $a <= 100) {
            echo "AA";
        } elseif ($a > 80 && $a <= 90) {
            echo "AB";
        } elseif ($a > 70 && $a <= 80) {
            echo "BB";
        } elseif ($a > 60 && $a <= 70) {
            echo "BC";
        } elseif ($a > 50 && $a <= 60) {
            echo "CC";
        } elseif ($a > 40 && $a <= 50) {
            echo "CD";
        } elseif ($a > 0 && $a <= 40) {
            echo "Fail";
        } else {
            echo "number is not valid";
        }
    }
        ?>
    </body>
</html>