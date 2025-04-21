<?php
session_start();
require("connection.php");

?>

<?php
if (isset($_POST['save_image'])); {
  $id = $_POST['imgNumber'];
  $image = $_FILES['image']['name'];
  $description = $_POST['descriptionImg'];


  if (file_exists("uploads/" . $_FILES['image']['name'])) {
    $filename = $_FILES['image']['name'];
    $_SESSION['status'] = "image already exists" . $filename;
    header('location:gallaryimageupdate.php');
  } else {
    $insert_image_query = "INSERT INTO gallery(id,image_path,title) Values( '$id','$image','$description')";
    $insert_image_query_run = mysqli_query($con, $insert_image_query);

    if ($insert_image_query_run) {
      move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES['image']['name']);
      $_SESSION['status'] = "Image Stored sucessfully";
      header('location: gallaryimageupdate.php');
    } else {
      $_SESSION['status'] = "Image Not Stored sucessfully";
      header('location: gallaryimageupdate.php');
    }
  }
}

?>