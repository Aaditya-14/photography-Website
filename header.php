<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>portfolio page</title>
  <link rel="stylesheet" href="index.css">
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <style>
    /* header   .......................... */
    .headingbox {
      height: 63vh;
    }

    .header1 {
      font-family: Lora;
      font-size: 25px;
      display: flex;
      justify-content: space-between;
      color: white;
    }

    .Name {
      margin-top: 10px;
      margin-left: 40px;
      width: 20%;
      font-style: italic;
      font-weight: 600;
      font-size: xx-large;
    }

    .icon {
      margin-top: 10px;
      width: 60%;
      margin-right: 50px;
      display: flex;
      justify-content: space-between;
      font-family: cursive;
      font-size: 23px;
    }

    .header2 {
      display: flex;
      justify-content: space-between;
    }

    .quotes {
      margin-left: 15px;
      font-family: cursive;
      font-weight: 900;
      font-size: 35px;
      margin-top: 100px;
    }

    .CameraImage {
      height: 50vh;
      width: 35%;
      background-image: url(image/home\ bg.png);
      background-size: cover;
      display: flex;
      margin-right: 50px;
      border-radius: 100px;
    }

    .socialMedia {
      margin-top: 10px;
      margin-left: 40px;
      display: flex;
      align-content: flex-start;
      width: 40%;
      justify-content: space-evenly;
    }

  </style>
  </style>
</head>

<body>
  <header>
    <div class="headingbox">
      <div class="header1">
        <div class="Name">
          <a><i class="fa-solid fa-camera fa-bounce"></i> Cherished shots</a>
        </div>
        <div class="icon">
          <a href="index.php?page=about">About Us</a>
          <a href="gallery.php?descriptionImg= ">Gallery</a>
          <a href="index.php?page=experience">Experience & Skills </a>
          <a href="index.php?page=admin">Admin panel</a>
          <a href="index.php?page=contact">Contact us</a>
        </div>
      </div>
      <div class="header2">
        <div class="quotes">
          <a>Taking pictures is savoring life intensely, <br />every hundredth
            of a second.....</a>
          <div class="socialMedia">
            <a><i class="fa-brands fa-facebook fa-beat"></i></a>
            <a> <i class="fa-brands fa-instagram fa-beat"></i> </a>
            <a><i class="fa-brands fa-twitter fa-beat"></i></a>
          </div>
        </div>
        <div class="CameraImage"></div>
      </div>
    </div>
  </header>
</body>

</html>