<!DOCTYPE html>
<html lang="en">
    <!-- I don't know what to do in 23 so I added dynamically update & delete -->
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <?php
    include('design.php');
    ?>
    <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-center" > Display customer Data </h1>
 <br>
 <a href="22insert.php">  <button class="btn-info btn text-white">insert</button></a>  <br><br>
 <table class="table table-striped">
 
 <tr class="bg-dark text-center">

 <th class="text-white">cust_no</th>
 <th class="text-white"> cust_name </th>
 <th class="text-white"> item_purchase  </th>
 <th class="text-white"> mob_no </th>
 <th class="text-white"> Delete </th>
 <th class="text-white"> Update </th>

 </tr >

 <?php

 include '21.php'; 
 $q = "select * from cust ";

 $query = mysqli_query($con,$q);

 while($result = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $result['cust_no'];  ?> </td>
 <td> <?php echo $result['cust_name'];  ?> </td>
 <td> <?php echo $result['item_purchase'];  ?> </td>
 <td> <?php echo $result['mob_no'];  ?> </td>
 <td>  <a href="22delete.php?cust_no=<?php echo $result['cust_no']; ?>" class="text-white"> <button class="btn-danger btn">Delete</button> </a>   </td>
 <td>  <a href="22update.php?cust_no=<?php echo $result['cust_no']; ?>" class="text-white"><button class="btn-primary btn"> Update </button></a>  </td>

 </tr>
 <?php 
 }
  ?>
 </table>  

 </div>
 </div>
 </body>
</html>