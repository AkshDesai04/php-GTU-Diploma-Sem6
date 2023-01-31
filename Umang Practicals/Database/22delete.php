<?php

include '21.php';

$cust_no = $_GET['cust_no'];

$q = " DELETE FROM `cust` WHERE cust_no = $cust_no ";

mysqli_query($con, $q);

header('location:22.php');

?>