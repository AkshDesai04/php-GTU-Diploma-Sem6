<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db";


$con = new mysqli($servername, $username, $password,$database);


if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "connected";
?>