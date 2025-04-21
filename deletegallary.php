<?php
require("connection.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $id = mysqli_real_escape_string($con, $id);

    // First, retrieve the image path from the database
    $query = "SELECT image_path FROM `gallery` WHERE id = '$id'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $image_path = $row['image_path'];

        if (file_exists("uploads/" . $image_path)) {
            unlink("uploads/" . $image_path);
        }

        $delete_query = "DELETE FROM `gallery` WHERE id = '$id'";
        $delete_result = mysqli_query($con, $delete_query);

        if ($delete_result) {
            echo "Record deleted";
?>
            <meta http-equiv="refresh" content="0; URL=http://localhost/web%20assigment/Gallaryhome.php">
<?php
        } else {
            echo "Failed to delete record: " . mysqli_error($con);
        }
    } else {
        echo "No record found for the provided ID.";
    }
} else {
    echo "No ID provided for deletion.";
}
?>