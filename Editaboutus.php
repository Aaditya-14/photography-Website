<?php include 'Adminheader.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About Us</title>
    <style>
               body {
            background-color: black;
            color: white;
            font-family: cursive;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Heading styles */
        h1 {
            text-align: center;
            padding: 20px;
            color: white;
            
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid whitesmoke;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: black;
            color: white;
        }

        /* Textarea styles */
        textarea {
            width: 100%;
            height: 70vh;
            resize: none;
            font-size: 20px;
            font-family: Cursive; /* Cursive font for the textarea */
            background-color: black; /* Darker background for textarea */
            color: white;
            border: 1px solid blue;
            padding: 10px;
        }

        /* Button styles */
        .submit-btn {
            margin-top: 10px;
            padding: 12px 20px;
            background-color: red; /* Red background */
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Smooth hover transition */
        }

        /* Hover effect for button */
        .submit-btn:hover {
            background-color: darkred; /* Darker red on hover */
        }

        /* Responsive design */
        @media (max-width: 768px) {
            textarea {
                height: 120px; /* Adjust height for smaller screens */
            }
            .submit-btn {
                width: 100%; /* Button takes full width on smaller screens */
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 22px; /* Smaller font size for mobile screens */
            }
            textarea {
                height: 100px; /* Even smaller textarea for mobile */
            }
        } 
    </style>
    <script>
        function updateText(id) {
            const aboutText = document.getElementById('aboutText-' + id).value;
            
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'update_about_us.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert('Update successful!');
                }
            };
            xhr.send('id=' + id + '&aboutText=' + encodeURIComponent(aboutText));
        }
    </script>
</head>
<body>
    <h1>Edit About Us</h1>
    <?php
    include 'connection.php'; // Include the connection file

    // Define your SQL query
    $sql = "SELECT * FROM about_us"; // Replace with your table name
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<form onsubmit='event.preventDefault(); updateText(" . $row['id'] . ");'>";
            echo "<textarea id='aboutText-" . $row['id'] . "'>" . $row['abouttext'] . "</textarea>";
            echo "<input type='submit' class='submit-btn' value='Update'>";
            echo "</form>";
            
        }
    } else {
        echo "No records found";
    }

    $con->close(); // Close the connection
    ?>
</body>
</html>
<?php include 'footer.php'; ?>

