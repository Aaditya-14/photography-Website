<?php
require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="index.css">
  <style>
    /* Navigation menu styling */
    nav {
      background-color: blue;
      padding: 15px;
      text-align: center;
    }

    nav a {
      color: #ffffff;
      text-decoration: none;
      font-family: 'Cursive', 'Comic Sans MS', 'Brush Script MT', sans-serif;
      font-size: 18px;
      padding: 14px 20px;
      display: inline-block;
    }

    nav a:hover {
      background-color: #555555;
      color: #ffffff;
    }

    table,
    th,
    td {
      border: 1px solid white;
    }

    table {
      width: 70%;
      height: 20%;
    }

    .adminContainer {
      margin-top: 0px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: cursive;
      background-color: black;
      color: white;
      height: 100vh;
      border-radius: 40px;
      border: solid;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-color: blue;
    }

    .admintxt {
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: cursive;
      font-size: 40px;
      font-weight: 800;
    }

    .AdminHead {
      display: flex;
      justify-content: end;
      align-items: center;
    }

    .ChangePW {
      display: flex;
      justify-content: start;
      align-items: center;
      margin-left: 20px;
    }

    .logout {
      height: 40px;
      width: 80px;
      margin-right: 20px;
      font-family: cursive;
      font-weight: 700;
      border-radius: 40px;
      margin-bottom: 4px;
    }

    .adminBox {
      background-color: blue;
    }

    .adminNav {
      display: flex;
      justify-content: space-evenly;
      width: 70%;
    }

    .changePw {
      height: 40px;
      width: 150px;
      margin-right: 20px;
      font-family: cursive;
      font-weight: 400;
      border-radius: 40px;
      margin-bottom: 4px;
      color: black;
      background-color: #ffffff;
      display: flex;
      align-items: center;
      text-decoration: none;
      justify-content: center;
    }
  </style>
</head>

<body>
  <div class="adminBox">
    <div class="admintxt">Admin Control Panel- Manage Your Portfolio</div>
    <div class="AdminHead">
      <form method="POST">
        <label style="font-family: cursive;">If you want to logout click here:</label>
        <button name="Logout" type="submit" class="logout">Logout</button>
      </form>
    </div>
    <div class="ChangePW">
      <label style="font-family: cursive;">If you want to change password click here:</label>
      <a href="changepassword.php" class="changePw"> Change Password</a>
    </div>
  </div>

  <!-- Navigation Menu -->
  <nav>
    <a href="Adminpanel.php?page=Contact us info">Contact Us Info</a>
    <a href="gallaryimageupdate.php?page=Uplode gallary image">Upload Gallery Image</a>
    <a href="Gallaryhome.php?page=Delete gallary Image">Delete Gallery Image</a>
    <a href="Editaboutus.php?page=Delete gallary Image">About us Edit</a>
  </nav>

  <?php
  if (isset($_POST['Logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
  }
  ?>
</body>

</html>