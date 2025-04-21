<?php
require("connection.php");
session_start(); // Ensure session_start() is the very first thing

// Check if the form is submitted
if (isset($_POST["Signin"])) {
  $adminName = mysqli_real_escape_string($con, $_POST['AdminName']);
  $adminPassword = mysqli_real_escape_string($con, $_POST['AdminPassword']);
  $query = "SELECT * FROM `admin_login` WHERE `Admin_name`='$adminName' AND `Admin_pass`='$adminPassword'";

  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) == 1) {
    $_SESSION['AdminLoginId'] = $adminName;
    header("Location: Adminpanel.php");
    exit(); // Ensure no further code is executed
  } else {
    echo "<script>alert('Incorrect username or password');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-Login</title>
  <link rel="stylesheet" href="index.css">
  <style>
    .loginBox {
      height: 300px;
      font-family: cursive;
      font-size: 23px;
      border: solid;
      border-radius: 40px;
    }

    .loginHead {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 10px;
      font-size: 40px;
      font-weight: 900;
    }

    .adimnLogin {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 50px;
    }

    .logintext {
      background-color: black;
      height: 35px;
      color: antiquewhite;
      border: solid;
      border-radius: 40px;
      font-family: cursive;
      font-size: 20px;
    }

    .loginsubmit {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 5px;
    }

    .Pass {
      margin-top: 10px;
    }

    .forgotpass {
      font-size: 15px;
    }

    .forgotpass:hover {
      color: blue;
      text-decoration: underline;
    }

    .loginBtn {
      height: 30px;
      width: 80px;
      background-color: black;
      color: white;
      border-radius: 40px;
      border-color: white;
    }

    .loginBtn:hover {
      height: 32px;
      width: 72px;
    }
  </style>
</head>

<body>
  <div class="loginBox">
    <div class="loginHead">Admin Login Panel</div>
    <div class="adimnLogin">
      <form method="post">
        <div class="logIn">
          <label>Login Id :</label>
          <input name="AdminName" type="text" placeholder="Enter your login id....." class="logintext">
        </div>

        <div class="Pass">
          <label>Password :</label>
          <input name="AdminPassword" type="password" placeholder="Enter your password....." class="logintext">
        </div>

        <div class="forgotpass">Forgot password?</div>

        <div class="loginsubmit">
          <button type="submit" name="Signin" class="loginBtn">Sign in</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>