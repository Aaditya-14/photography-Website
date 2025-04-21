<?php include 'Adminheader.php'; ?>
<?php
require("connection.php");
session_start();
?>

<?php

$msg1 = "";
$msg2 = "";
$msg3 = "";

if (!empty($_POST["submit"])) {
  $old_password = $_POST["old_password"];
  $new_password = $_POST["new_password"];
  $co_password = $_POST["co_password"];
  if ($new_password == $co_password) {
    $query = "SELECT * FROM admin_login WHERE  Admin_pass ='$old_password'";
    $result = mysqli_query($con, $query);

    $count = mysqli_num_rows($result);
    if ($count > 0) {
      $query1 = "UPDATE admin_login SET Admin_pass='$new_password'";
      mysqli_query($con, $query1);
      $msg1 = "Password Update Successfully !";
    } else {
      $msg2 = "Old Password Does not Match";
    }
  } else {
    $msg3 = " New Password  &  Confirm  Password  Does  not  Match";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Change Page</title>
  <style>
    body {
      background-color: black;
      font-family: Arial, sans-serif;
    }

    .user {
      background-color: black;
      color: white;
      font-family: cursive;
      border-radius: 40px;
      padding: 20px;
      width: 400px;
      border: solid;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      margin-top: 50px;

    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border-radius: 20px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .form-control-user {
      font-family: cursive;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      border-radius: 20px;
      font-size: 18px;
      text-align: center;
      cursor: pointer;
      margin-top: 10px;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
      color: white;
    }

    .btn-danger {
      background-color: #dc3545;
      border: none;
      color: white;
    }

    .btn:hover {
      opacity: 0.9;
    }

    .text-center {
      text-align: center;
      margin-top: 20px;
    }

    .changeContainer {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <?php
  if ($msg1) {
    echo "$msg1";
  } elseif ($msg2) {
    echo "$msg2";
  } else {
    echo "$msg3";
  }

  ?>

  <div class="changeContainer">

    <form method="post" action="" class="user">
      <div class="form-group">
        <input type="text" name="old_password" class="form-control form-control-user"
          id="exampleInputEmail" aria-describedby="emailHelp"
          placeholder="Enter Old Password..." required="">
      </div>


      <div class="form-group">
        <input type="text" name="new_password" class="form-control form-control-user"
          id="exampleInputEmail" aria-describedby="emailHelp"
          placeholder="Enter New Password..." required="">
      </div>



      <div class="form-group">
        <input type="text" name="co_password" class="form-control form-control-user"
          id="exampleInputEmail" aria-describedby="emailHelp"
          placeholder="Enter Confirm Password..." required="">
      </div>

      <div class="pt-1 mb-3">
        <input type="submit" name="submit" value="submit" class="btn btn-primary btn-lg btn-block btn-user btn-block">

      </div>

      <a href="index.php?page=admin" class="btn btn-danger btn-user btn-block">Go back to login page</a>

    </form>
  </div>

</body>

</html>
<?php include 'footer.php'; ?>