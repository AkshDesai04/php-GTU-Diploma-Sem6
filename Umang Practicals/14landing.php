<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('Database/design.php')?>
</head>
<body>
    <?php
    if (isset($_POST['done'])) {
        $name = $_POST['name'];
        $year = $_POST['year'];
        $hobby = $_POST['hobby'];
        $dep = $_POST['departmant'];
        $mobno = $_POST['mobno'];
        
    }
    ?><div class="container">
         <div class="header">
 <h1 class="text-center"> student form data </h1>
 </div><br>
    
    <table class="table table-striped">
        <tr>
            <td>Name</td>
            <td><?php echo"$name"?></td>
        </tr>
        <tr>
            <td>Year</td>
            <td><?php echo"$year"?></td>
        </tr>        <tr>
            <td>hobby</td>
            <td><?php if(empty($hobby)) 
  {
    echo("No hobby You poor thing");
  } 
  else 
  {
    $n = count($hobby);
    for($i=0; $i < $n; $i++)
    {
      echo($hobby[$i] . " ");
    }
  }?></td>
        </tr>        <tr>
            <td>Departmant</td>
            <td><?php echo"$dep"?></td>
        </tr>        <tr>
            <td>Mobile no</td>
            <td><?php echo"$mobno"?></td>
        </tr>
        </div>
</body>
</html>