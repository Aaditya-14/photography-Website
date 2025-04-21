<?php
include 'connection.php'; // Include the connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id']; // Get the record ID
    $aboutText = $_POST['aboutText']; // Get the updated text

    // Prepare and bind the update query
    $stmt = $con->prepare("UPDATE about_us SET abouttext = ? WHERE id = ?");
    $stmt->bind_param("si", $aboutText, $id);

    if ($stmt->execute()) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . $con->error;
    }

    $stmt->close();
    $con->close();
}
?>
