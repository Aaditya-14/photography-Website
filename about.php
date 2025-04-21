<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="index.css">
  <style>
    .aboutusBox {
      padding: 20px;
    }

    .Aboutus {
      border-top: double;
      border-style: ridge;
      border-radius: 40px;
      padding: 20px;
    }

    .abtHeading {
      font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
      height: auto;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 40px;
      border-bottom: double;
      padding: 10px;
      text-align: center;
    }

    .aboutText {
      margin-top: 30px;
      font-size: 18px;
      font-family: cursive;
      line-height: 1.6;
      text-align: justify;
    }

    .letter {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .auimage {
      background: url('path-to-image.jpg') no-repeat center center;
      background-size: cover;
    }

    /* Responsive design adjustments */
    @media screen and (min-width: 768px) {
      .abtHeading {
        font-size: 50px;
      }

      .letter {
        flex-direction: row;
        justify-content: space-between;
      }

      .auimage {
        width: 45%;
        height: 400px;
        margin-right: 20px;
      }

      .aboutText {
        margin-left: 20px;
        margin-right: 20px;
        font-size: 20px;
      }
    }

    @media screen and (min-width: 1024px) {
      .aboutusBox {
        padding: 40px;
      }

      .abtHeading {
        font-size: 50px;
      }

      .letter {
        flex-direction: row;
      }

      .auimage {
        width: 40%;
        height: 500px;
      }

      .aboutText {
        margin-left: 50px;
        margin-right: 50px;
        font-size: 22px;
      }
    }
  </style>
</head>

<body>
  <section id="about">
    <div class="aboutusBox">
      <div class="Aboutus">
        <div class="abtHeading">About Us</div>
        <div class="aboutText">
          <div class="letter">
            <div class="auimage"></div>
            <div>
              <p>
                <?php
                include 'connection.php'; // Include the connection file

                // Check connection
                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }

                // Define your SQL query
                $sql = "SELECT * FROM about_us"; // Replace with your table name
                $result = $con->query($sql);

                if ($result) {
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<p>" . htmlspecialchars($row["abouttext"]) . "</p>";
                        }
                    } else {
                        echo "<p>No records found.</p>";
                    }
                } else {
                    echo "<p>Error: " . $con->error . "</p>";
                }

                $con->close(); // Close the connection
                ?>
              </p>

              <p>Regards,</p>
              <p>Cherished Shots Team</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
