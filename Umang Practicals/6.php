
<html>
    <body>
    <form method="post">  
    Enter array 1 no:<br>  
    <input type="number" name="no1"> 
    <input type="number" name="no2"><br>
    <input type="number" name="no3"> 
    <input type="number" name="no4"><br>
    Enter array 2 no:<br>  
    <input type="number" name="no5"> 
    <input type="number" name="no6"><br>
    <input type="number" name="no7"> 
    <input type="number" name="no8"><br> 
    <input type="submit" name="submit" value="Submit" /> 
    <br>
    </form> 
    <?php
    if ($_POST) {
        $arr1 = array(
            array($_POST['no1'], $_POST['no2']),
            array($_POST['no3'], $_POST['no4'])
        );

        $arr2 = array(
            array($_POST['no5'], $_POST['no6']),
            array($_POST['no7'], $_POST['no8'])
        );
        echo "addition of array 1 & 2<br>";
        for ($i = 0; $i < count($arr1); $i++) {
            for ($j = 0; $j < count($arr1[1]); $j++) {
                echo ($arr1[$i][$j] + $arr2[$i][$j]) . "    ";
            }
            echo "<br>";
        }
    }
        ?>
    </body>
</html>