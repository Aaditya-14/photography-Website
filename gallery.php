<?php include 'header.php'; ?>
<?php
require('connection.php'); // Ensure this file includes the database connection

// Fetch the selected category from the form
$selected_category = isset($_GET['descriptionImg']) ? mysqli_real_escape_string($con, $_GET['descriptionImg']) : '';

// Modify the query to filter by category if one is selected
if ($selected_category != '') {
    // Fetch images in ascending order by 'id' (or another field) when a category is selected
    $fetch_image_query = "SELECT * FROM gallery WHERE title = '$selected_category' ORDER BY id ASC";
} else {
    // Fetch all images in ascending order when no category is selected
    $fetch_image_query = "SELECT * FROM gallery ORDER BY id ASC";
}

$fetch_image_query_run = mysqli_query($con, $fetch_image_query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" href="index.css">
  <style>
    /* General Styles */
    body {
      font-family: cursive;
      background-color: black;
      margin: 0;
      padding: 0;
    }

    .galleryBox {
      padding: 20px;
      background-color: black;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
    }

    .galleryHeading {
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: cursive;
      margin-bottom: 20px;
      font-size: 3rem;
      color: white;
      border: solid;
      border-radius: 40px;
    }

    /* Form Styles */
    form {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }

    form label {
      font-size: 1.2rem;
      margin-right: 10px;
    }

    .form-control {
      padding: 8px 12px;
      font-size: 1rem;
      border-radius: 5px;
      border: 1px solid #ccc;
      transition: border-color 0.3s ease;
      color: white;
      font-family: cursive;
      background-color: black;
      border-radius: 40px;
    }

    .form-control:hover,
    .form-control:focus {
      border-color: #007bff;
    }

    /* Gallery Grid */
    .galleryGrid {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-evenly;
    }

    .img {
      flex-basis: calc(25% - 20px);
      margin-bottom: 20px;
      height: 400px;
      width: 250px;
      border: solid 2px transparent;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out, border-color 0.3s ease-in-out;
      background-size: cover;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 100px white;
    }

    .img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 10px;
    }

    .img:hover {
      transform: scale(1.05);
      border-color: #00ff00;
      box-shadow: 0 0 100px greenyellow;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .img {
        flex-basis: calc(50% - 20px);
      }
    }

    @media (max-width: 480px) {
      .img {
        flex-basis: calc(100% - 20px);
      }
    }
  </style>
</head>

<body>

  <div class="galleryBox">
    <h1 class="galleryHeading">Gallery</h1>

    <!-- Sort by Category Form -->
    <form method="GET" action="">
      <label for="descriptionImg">Sort by Category:</label>
      <select name="descriptionImg" class="form-control" id="descriptionImg" onchange="this.form.submit()">
        <option value="">All Images</option>
        <option value="Animal" <?php if ($selected_category == 'Animal') echo 'selected'; ?>>Animal</option>
        <option value="Nature" <?php if ($selected_category == 'Nature') echo 'selected'; ?>>Nature</option>
        <option value="Birds" <?php if ($selected_category == 'Birds') echo 'selected'; ?>>Birds</option>
        <option value="Potraits" <?php if ($selected_category == 'Potraits') echo 'selected'; ?>>Potraits</option>
      </select>
    </form>

    <div class="galleryGrid">
      <?php
      if (mysqli_num_rows($fetch_image_query_run) > 0) {
        foreach ($fetch_image_query_run as $row) {
      ?>
          <div class="img">
            <img src="<?php echo 'uploads/' . $row['image_path']; ?>" alt="Image">
          </div>
        <?php
        }
      } else {
        ?>
        <h1>No Record Found!</h1>
      <?php
      }
      ?>
    </div>
  </div>

</body>

</html>

<?php include 'footer.php'; ?>
