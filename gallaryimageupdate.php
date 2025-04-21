<?php include 'Adminheader.php'; ?>
<?php
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
    .imgWholeContainer {
      height: 10vh;
      border-top: solid blue;

    }

    .card {
      color: white;
      height: 50vh;
      font-family: cursive;
      font-size: 25px;
      margin-top: 20px;
      border-bottom: solid blue;
    }

    .card-header {
      height: 80px;
      display: flex;
      justify-content: center;
      align-items: center;
      border: solid;
      border-radius: 40px;
      border-color: blue;
      font-weight: 1000;
    }

    .card-body {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .imgSave {
      height: 20px;
      width: 100px;
    }

    .form-control {
      background-color: black;
      font-family: cursive;
      height: 35px;
      border-radius: 40px;
      color: white;
    }

    .imgSave {
      background-color: blue;
      color: wheat;
      height: 33px;
      width: 103px;
      border-radius: 40px;
    }

    .imgSave:hover {
      height: 35px;
      width: 105px;
    }

    input::file-selector-button {
      background-image: linear-gradient(to right,
          #ff7a18,
          #af002d,
          #319197 100%,
          #319197 200%);
      background-position-x: 0%;
      background-size: 200%;
      border: 0;
      border-radius: 8px;
      color: #fff;
      padding: 1rem 1.25rem;
      text-shadow: 0 1px 1px #333;
      transition: all 0.25s;
      height: 40px;
      align-items: center;
      font-family: cursive;
    }

    input::file-selector-button:hover {
      background-position-x: 100%;
      transform: scale(1.1);
    }
  </style>
</head>

<body>

  <section>
    <div class="imgWholeContainer">

      <?php
      if (isset($_SESSION['status']) && $_SESSION != '') {
        echo $_SESSION['status'];
      ?>
        <div class="alert alert-sucess alert-dismissible fade show" role="alert">
          <strong>Hay!</strong> <?php echo $_SESSION['status']; ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
        unset($_SESSION['status']);
      }
      ?>
    </div>
    <!-- ................ form     -->
    <div class="card">
      <div class="card-header">
        <h4>Gallery image upload and delete</h4>
      </div>
      <div class="card-body">
        <form method="post" action="imgcurd.php " enctype="multipart/form-data">

          <div class="form-group">
            <label form="">Image:</label>
            <input type="file" name="image" class="" placeholder="Enter Image Number">
          </div><br>

          <div class="form-group">
            <label form="">Image category:</label>
            <select type="select" name="descriptionImg" class="form-control" placeholder="Image-category"  id="image">
              <option value="Animal">Animal</option>
              <option value="Nature">Nature</option>
              <option value="Birds">Birds</option>
              <option value="Potraits">Potraits</option>
          </select>
          </div><br>

          <div class="form-group">
            <button type="submit" name="Save_image" class="imgSave">Save Image</button>
          </div>

        </form>



      </div>
    </div>
  </section>
</body>

</html>
<?php include 'footer.php'; ?>