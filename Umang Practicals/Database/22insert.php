<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
    include('design.php');
    include('21.php');
    ?> 
 <div class="col-lg-3 m-auto">
 
 <form method="post">
 
 <br><br><div class="container">
 
 <div class="header">
 <h1 class="text-center"> Customer Insert  </h1>
 </div><br>

 <label> cust_name: </label>
 <input type="text" name="cust_name" class="form-control"> <br>

 <label> item_purchase: </label>
 <input type="text" name="item_purchase" class="form-control"> <br>

 <label> mob_no: </label>
 <input type="text" name="mob_no" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 <?php
 if (isset($_POST['done']))
 {
     $cust_name = $_POST['cust_name'];
     $item_purchase = $_POST['item_purchase'];
     $mob_no = $_POST['mob_no'];
     $q = "INSERT INTO `cust` (`cust_no`, `cust_name`, `item_purchase`, `mob_no`) VALUES(NULL,'$cust_name','$item_purchase','$mob_no')";
     $query = mysqli_query($con,$q);
     header('location:22.php');
 }
 ?>
 </div>
</body>
</html>