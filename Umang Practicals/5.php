<html>
    <body>
    <form method="post">  
    Enter 3 no:<br>  
    <input type="number" name="no1"> 
    <input type="number" name="no2"> 
    <input type="number" name="no3"> 
    <input type="submit" name="submit" value="Submit" /> 
    <br>
    </form> 
    <?php
    if ($_POST) {
        $num1 = $_POST['no1'];
      $num2=$_POST['no2'];
      $num3=$_POST['no3'];
      if($num1>$num2 && $num1>$num3){
        echo "$num1 is max";
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo "$num2 is max";
        }
        else
          echo "$num3 is max";
      }
    echo "<br> predefine<br>";
      echo max($num1, $num2, $num3);
    }
?>
    </body>
</html>