<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Optional: Styles for sections */
        section {
            padding: 60px;
            margin: 20px 0;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="content">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            if ($page == 'about') {
                include 'about.php';
            } elseif ($page == 'gallery') {
                include 'gallery.php';
            } elseif ($page == 'experience') {
                include 'experience.php';
            } elseif ($page == 'contact') {
                include 'contact.php';
            } elseif ($page == 'admin') {
                include 'adminlogin.php';
            } else {
                echo "<p>Page not found.</p>";
            }
        } else {
            include 'about.php'; // Default page
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
