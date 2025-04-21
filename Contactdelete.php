<?php
require("connection.php");

$Name = $_GET['Name'];
$Name = mysqli_real_escape_string($con, $Name);
$query = "DELETE FROM `contact info` WHERE Name = '$Name'";
$data = mysqli_query($con, $query);
if ($data) {
  echo "Record deleted";
?>
  <meta http-equiv="refresh" content="0; URL=http://localhost/web%20assigment/Adminpanel.php">

<?php
} else {
  echo "Failed to delete record: " . mysqli_error($con);
}
?>
