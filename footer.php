<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer</title>
  <link rel="stylesheet" href="index.css">
  <style>
    .footerBox {
      padding: 20px;
      margin-bottom: 20px;
      background-color: black;
    }

    .footer {
      display: flex;
      justify-content: center;
      align-items: center;
      border-top: 1px dotted #ccc;
      padding: 10px 0;
    }

    .fotlogo a {
      margin: 0 10px;
      font-size: 24px;
      color: #333;
      transition: color 0.3s ease;
    }

    .fotlogo a:hover {
      color: #007bff;
    }

    .foodDurbar {
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
      font-size: 24px;
      font-weight: bolder;
      margin-top: 10px;
      text-align: center;
    }

    .Copyright {
      margin-top: 10px;
      display: flex;
      justify-content: center;
      font-size: 14px;
      color: #666;
    }

    .policy {
      margin-top: 10px;
      display: flex;
      justify-content: space-evenly;
      flex-wrap: wrap;
      gap: 10px;
      font-size: 14px;
      color: #666;
    }

    .policy a {
      margin: 5px;
      text-decoration: none;
      color: #333;
      transition: text-decoration 0.3s ease;
    }

    .policy a:hover {
      text-decoration: underline;
    }

    /* Responsive design adjustments */
    @media screen and (max-width: 768px) {
      .foodDurbar {
        font-size: 20px;
      }

      .fotlogo a {
        margin: 0 5px;
        font-size: 20px;
      }

      .policy {
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-left: 0;
        margin-right: 0;
      }
    }
  </style>
</head>

<body>
  <footer>
    <div class="footerBox">
      <div class="footer">
        <div class="fotlogo">
          <a href="#"><i class="fa-brands fa-facebook"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-linkedin"></i></a>
          <a href="#"><i class="fa-brands fa-tiktok"></i></a>
        </div>
      </div>
      <div class="foodDurbar">Cherished Shots</div>
      <div class="Copyright">Copyright © 2024 Cherished Shots, INC.</div>
      <div class="policy">
        <a href="#">Legal Stuff</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Security</a>
        <a href="#">Website Accessibility</a>
        <a href="#">Manage Cookies</a>
      </div>
    </div>
  </footer>
</body>

</html>


