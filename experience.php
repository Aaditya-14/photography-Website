<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Experience and Skills</title>
  <link rel="stylesheet" href="index.css">
  <style>
    /* Base Styles (Mobile-First Design) */
    body {
      margin: 0;
      padding: 0;
      font-family: cursive;
      background-color: #222;
      color: white;
      line-height: 1.6;
    }

    .containe {
      margin: 20px auto;
      padding: 15px;
      background-color: black;
      border: 2px solid white;
      border-radius: 40px;
      overflow: hidden;
    }


    .section {
      background: #333;
      padding: 15px;
      margin: 15px 0;
      border-radius: 20px;
    }

    .section h2 {
      font-size: 1.6rem;
      border-bottom: 2px solid white;
      padding-bottom: 10px;
      margin-bottom: 15px;
    }

    .skills-list,
    .awards-list {
      list-style-type: none;
      padding: 0;
    }

    .skills-list li,
    .awards-list li {
      background: #444;
      padding: 10px;
      margin: 10px 0;
      border-radius: 15px;
      font-size: 1rem;
    }

    .contact {
      text-align: center;
      margin: 25px 0;
    }

    .contact p {
      font-size: 1rem;
    }

    .contact a {
      color: #00bfff;
      text-decoration: none;
      font-weight: bold;
    }

    .contact a:hover {
      text-decoration: underline;
    }

    /* Consistent Design for Tablets and Desktops */
    @media (min-width: 601px) {
      .container {
        width: 100%; /* Same structure on larger screens */
      }

      .header h1 {
        font-size: 1.8rem; /* Keep text size similar */
      }

      .section h2 {
        font-size: 1.6rem;
      }

      .skills-list li,
      .awards-list li {
        font-size: 1rem;
      }

      .contact p {
        font-size: 1rem;
      }
    }

    @media (min-width: 901px) {
      .container {
        width: 70%; /* Slightly wider, but still compact */
      }

      .header h1 {
        font-size: 1.8rem; /* Same heading size for consistency */
      }

      .section h2 {
        font-size: 1.6rem;
      }

      .skills-list li,
      .awards-list li {
        font-size: 1rem;
      }

      .contact p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

  <!-- Header Section -->

  <!-- Main Container -->
  <div class="containe">
    <!-- Experience Section -->
    <div class="section">
      <h2>Experience</h2>
      <p>
        Photographer with over 10 years of experience in the field. Worked with various clients including magazines, weddings, and corporate events.
      </p>
    </div>

    <!-- Skills Section -->
    <div class="section">
      <h2>Skills</h2>
      <ul class="skills-list">
        <?php
        include 'connection.php'; // Include the connection file

        $sql = "SELECT * FROM experience"; // Replace with your table name
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Display skills from the database
                echo "<li>" . htmlspecialchars($row['skills-list']) . "</li>";
            }
        } else {
            echo "<li>No skills listed</li>";
        }

        $con->close(); // Close the connection
        ?>
      </ul>
    </div>

    <!-- Awards Section -->
    <div class="section">
      <h2>Awards</h2>
      <ul class="awards-list">
        <?php
        include 'connection.php';

        $sql = "SELECT * FROM experience"; // Replace with your table name
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Display awards from the database
                echo "<li>" . htmlspecialchars($row['awards-list']) . "</li>";
            }
        } else {
            echo "<li>No awards listed</li>";
        }

        $con->close(); // Close the connection
        ?>
      </ul>
    </div>

    <!-- Contact Section -->
    <div class="contact">
      <p>If you would like to discuss potential projects or collaboration, please <a href="index.php?page=contact">Contact me</a>.</p>
    </div>
  </div>

</body>
</html>

