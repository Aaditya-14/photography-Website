<?php include 'Adminheader.php'; ?>

<?php
require("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallary-Home</title>
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

    .imgAdminTable {
      margin-top: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: cursive;
      background-color: black;
      color: white;
      border-radius: 40px;
    }

    .imgAdminHeader {
      margin-top: 0px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: cursive;
      color: white;
      height: 100px;
      border: solid;
      border-color: blue;
    }

    .imgDelContainer {
      border: solid;
      border-color: blue;
      border-bottom-left-radius: 40px;
      border-bottom-right-radius: 40px;


    }
  </style>
    <script>
    function checkdelete() {
      return confirm("Are you sure you want to delete this image?");
    }
  </script>
</head>

<body>

  <div class=imgDelContainer>
    <div class="imgAdminHeader">
      <h1>Image table</h1>
    </div>
    <div class="imgAdminTable">
      <table>
        <tr>
          <td> Image </td>
          <td> Image category</td>
          <td> Delete image</td>
        </tr>
<div>
        <?php
        $fetch_image_query = "SELECT * FROM gallery";
        $fetch_image_query_run = mysqli_query($con, $fetch_image_query);
        if (mysqli_num_rows($fetch_image_query_run) > 0) {
          foreach ($fetch_image_query_run as $row) {
        ?>
            <tr>
              <td>
                <img src="  <?php echo "uploads/" . $row['image_path'] ?>" width="95" height="95" alt="image">
              </td>
              <td> <?php echo $row['title'] ?></td>
              <td>
                <a href="deletegallary.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return checkdelete();">Delete</a>
              </td>
            </tr>

            </tr>
          <?php
          }
        } else {
          ?>
          <tr>
            <td colspan="5"> NO RECORD FOUND </td>
          <tr>
          <?php
        }
          ?>
      </table>
      </div>
    </div>
  </div>
</body>

</html>
<?php include 'footer.php'; ?>