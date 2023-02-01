<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <?php
    try {
        $servername = "localhost";
        $username = "root";
        $password = "123";
        $database = "db";
        $con = new mysqli($servername, $username, $password, $database);

    } catch (Exception $e) {
        echo "Exception $e";

    }
    ?>
    <!-- devide by zero exception don't call dirctly.
when we write like 
-->
    <?php
    try {
        $a = 29;
        $b = 0;
        $C = $a / $b;
    } catch (Exception $e) {
        echo "devide by 0";
    }
    ?>
    <!-- That still give error not catch o/p we can call devide by zero through throw & extends class like java-->
    <?php

    class DivideByZeroException extends Exception
    {
    }
    class DivideByNegativeNoException extends Exception
    {
    }
    function checkdivisor($div, $dor)
    {
        try {
            if ($div == 0) {
                throw new DivideByZeroException;
            } else if ($dor < 0) {
                throw new DivideByNegativeNoException;
            } else {
                $result = $div / $dor;
                echo "Result of division = $result </br>";
            }
        } catch (DivideByZeroException $dze) {
            echo "Divide by Zero </br>";
        } catch (DivideByNegativeNoException $dnne) {
            echo "Divide by Negative Number </br>";
        } catch (Exception $ex) {
            echo "Exception That beond expacation";
        }
    }

    checkdivisor(18, 3);
    checkdivisor(34, -6);
    checkdivisor(27, 0);
    ?>
</body>

</html>