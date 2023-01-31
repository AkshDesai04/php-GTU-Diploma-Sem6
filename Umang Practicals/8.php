<html>  
<head>  
<title>Factorial Program using loop in PHP</title>  
</head>  
<body>  
<form method="post">  
    Enter the Number:<br>  
    <input type="number" name="number" value="5">  
    <input type="submit" name="submit" value="Submit" />  
</form>  
<?php
if ($_POST) {
    function fact($a)
    {
        $fact = 1;
        echo "Factorial of $a:<br><br>";
        //start loop  
        for ($i = 1; $i <= $a; $i++) {
            $fact = $fact * $i;
        }
        echo $fact . "<br>";
    }
    $var = "fact";
    $var($_POST['number']);
}
?>
</body>  
</html>  