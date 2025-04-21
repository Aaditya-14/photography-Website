<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "photography contact";

$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
  echo " not connected";
}
$name = $_POST["Name"];
$contactno = $_POST["Contactno"];
$email = $_POST["Email"];
$massege = $_POST["Massege"];
$sql = "INSERT INTO `contact info`(`Name`, `Contact Number`, `Email id`, `massage`) VALUES ('$name','$contactno','$email','$massege')";

$result = mysqli_query($con, $sql);

if ($result) {
  include 'index.php';
} else {
  include 'index.php';
}
