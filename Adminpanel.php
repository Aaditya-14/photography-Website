<?php include 'Adminheader.php'; ?>
<?php
require("connection.php");
?>


<?php
$query = "SELECT * from `contact info` ";
$result = mysqli_query($con, $query)
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
</head>
<link rel="stylesheet" href="index.css">
<style>
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
</style>

</head>

<body>
  <!-- table  ................................ -->
  <div>
    <div class="adminContainer">
      <table>
        <tr>
          <td colspan="6" align="center">
            <h1>Contact Us Info</h1>
          </td>
        </tr>
        <tr style="height:40px">
          <th>Name</th>
          <th>Contact No</th>
          <th>Email.id</th>
          <th>Massege</th>
          <th>Reply</th>
          <th>Delete</th>
        </tr>
        <tr style="height:40px">
          <?php

          while ($row = mysqli_fetch_assoc($result)) {
          ?>
            <td> <?php echo $row['Name'] ?></td>
            <td> <?php echo $row['Contact Number'] ?></td>
            <td> <?php echo $row['Email id'] ?></td>
            <td> <?php echo $row['massage'] ?></td>
            <td>
              <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php echo urlencode($row['Email id']); ?>&su=Reply%20Regarding%20Your%20Contact%20Info&body=Dear%20<?php echo urlencode($row['Name']); ?>,%0A%0AThank%20you%20for%20contacting%20us.%20We%20will%20get%20back%20to%20you%20soon.%0A%0ABest%20Regards,%0AYour%20Company%20Name" class="btn btn-primary" target="_blank">Reply</a>
            </td>
            <td><a href="Contactdelete.php? Name=<?php echo $row['Name'] ?>" class="btn btn-Danger" onclick="return checkdelete();"> Delete </a></td>
        </tr>
      <?php
          }
      ?>

      </table>

    </div>
  </div>

  <?php
  if (isset($_POST['Logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
  }
  ?>

</body>
<script>
  function checkdelete() {
    return confirm('Do you really want to delete this record ?');
  }
</script>

</html>

<?php include 'footer.php'; ?>