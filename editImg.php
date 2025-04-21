<?php
require("connection.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Update</title>
  <link rel="stylesheet" href="index.css">
  <style>
    /* Your CSS styles here */
  </style>
</head>

<body>

  <section>
    <div class="imgWholeContainer">
      <?php
      if (isset($_SESSION['status'])) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Hey!</strong> {$_SESSION['status']}
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
        unset($_SESSION['status']);
      }
      ?>
    </div>

    <div class="card">
      <div class="card-header">
        <h4>Edit Image from Gallery</h4>
      </div>
      <div class="card-body">
        <?php
        $id = $_GET['id'];
        $fetch_image_query = "SELECT * FROM gallery WHERE id=$id";
        $fetch_image_query_run = mysqli_query($con, $fetch_image_query);

        if (mysqli_num_rows($fetch_image_query_run) > 0) {
          $row = mysqli_fetch_assoc($fetch_image_query_run);
        ?>
          <form method="post" action="imgcurd.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="image">Current Image:</label><br>
              <img src="uploads/<?php echo $row['image_path']; ?>" alt="Image" height="100">
            </div><br>

            <div class="form-group">
              <label for="image">New Image:</label>
              <input type="file" name="image" class="form-control">
            </div><br>

            <div class="form-group">
              <label for="descriptionImg">Description of Image:</label>
              <input type="text" name="descriptionImg" value="<?php echo $row['title']; ?>" class="form-control" placeholder="Description of Image">
            </div><br>

            <div class="form-group">
              <button type="submit" name="update_image" class="imgSave">Update Image</button>
            </div>
          </form>
        <?php
        } else {
          echo "No data found";
        }
        ?>
      </div>
    </div>
  </section>
</body>

</html>