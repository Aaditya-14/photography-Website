<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact US</title>
  <link rel="stylesheet" href="index.css">
  <style>
    .Contact {
      height: 100vh;
      font-family: 'Cursive', sans-serif;
      color: white;
      background-image: url('image/contact.jpg');
      background-size: cover;
      background-position: center;
      padding: 20px;
      border: solid;
      border-radius: 40px;
    }

    .contactHeading {
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 45px;
      font-weight: 800;
      padding: 15px;
      border: 2px solid white;
      border-radius: 40px;
      background: rgba(0, 0, 0, 0.5);
      height: 70px;
    }

    .info {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-top: 10px;
    }

    .contactName {
      font-size: 20px;
    }

    .contactInput {
      width: 100%;
      max-width: 400px;
      height: 40px;
      background-color: black;
      color: aliceblue;
      font-family: cursive;
      font-size: 18px;
      border: 2px solid aliceblue;
      border-radius: 20px;
      padding: 0 15px;
      margin-bottom: 20px;
    }

    .contactInput::placeholder {
      color: aliceblue;
    }

    .contactSubmit {
      height: 40px;
      width: 120px;
      font-family: cursive;
      font-size: 18px;
      border: 2px solid aliceblue;
      border-radius: 20px;
      background-color: black;
      color: aliceblue;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .contactSubmit:hover {
      background-color: rgb(33, 120, 196);
      color: white;
    }

    .contacttxt {
      font-size: 20px;
      text-align: center;
      margin-top: 10px;
      font-family: cursive;
    }
  </style>
</head>

<body>
  <div class="Contact">
    <div class="contactHeading"> Contact us </div>
    <div class="info">
      <form action="contactinfo.php" method="post">
        <label class="contactName">Name:</label>
        <input type="text" name="Name" placeholder=" Enter Fullname..... " class="contactInput"><br><br>

        <label class="contactName">Contact Number: </label>
        <input type="tel" name="Contactno" placeholder=" Enter contact Number...." class="contactInput"><br><br>

        <label class="contactName">Email id:</label>
        <input type="email" name="Email" placeholder=" Enter Your Email....." class="contactInput"><br><br>

        <label class="contactName">Massage</label>
        <input type="text" name="Massege" placeholder=" Enter any massege...." class="contactInput"><br><br>

        <input type="submit" class="contactSubmit">
      </form>
      <br>
      <div class="contacttxt">
        <a>Thank you for your interest!<br>
          We will reach out to you soon. If you have any questions or need immediate assistance, please feel free to contact us at 98000000000.<br></a>
      </div>
    </div>
  </div>
</body>

</html>