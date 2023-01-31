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
    ?>
    <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-center" > Display Employee Data </h1>
 <br>
 <table  id="tabledata" class="table">
 
 <tr class="bg-dark text-center">

 <th class="text-white">emp_id</th>
 <th class="text-white"> emp_name </th>
 <th class="text-white"> des  </th>
 <th class="text-white"> selary </th>

 </tr >

 <?php

 include '21.php'; 
 $q = "select * from emp ";

 $query = mysqli_query($con,$q);

 while($result = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $result['emp_id'];  ?> </td>
 <td> <?php echo $result['emp_name'];  ?> </td>
 <td> <?php echo $result['des'];  ?> </td>
 <td> <?php echo $result['selary'];  ?> </td>
 </tr>
 <?php 
 }
  ?>
 </table>  

 </div>
 </div>
 </body>
</html>