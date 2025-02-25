<?php 
$current_page = basename($_SERVER['PHP_SELF']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Example</title>

  <style>
    /*-----------------------------------*\
      #FOOTER
    \*-----------------------------------*/

    .footer {
      background-repeat: no-repeat;
      background-color: #2a2a2a; /* Dark background for footer */
      color: #a5a5a5; /* Light gray text */
      font-size: 16px;
    }

    .footer-top {
      display: grid;
      gap: 30px;
    }

    .footer-brand-text { margin-block: 20px; }

    .footer-brand .wrapper {
      display: flex;
      gap: 5px;
    }

    .footer-brand .wrapper .span { font-weight: 500; }

    .footer-link { transition: 0.3s ease-in-out; }

    .footer-link:is(:hover, :focus) { color: #439CDB; }

    .footer-list-title {
      color: white;
      font-family: 'League Spartan', sans-serif;
      font-size: 18px;
      font-weight: 600;
      margin-block-end: 10px;
    }

    .footer-list .footer-link { padding-block: 10px; }

    .newsletter-form { margin-block: 20px 35px; }

    .newsletter-form .input-field {
      background-color: white;
      padding: 12px;
      border-radius: 5px;
      margin-block-end: 20px;
    }

    .newsletter-form .btn {
      min-width: 100%;
      justify-content: center;
    }

    .social-list {
      display: flex;
      gap: 25px;
      margin-top: 20px;
    }

    .social-link { font-size: 20px; }

    .footer-bottom {
      border-block-start: 1px solid #444444;
      padding-block: 30px;
    }

    .copyright { text-align: center; }

    .copyright-link {
      color: #439CDB;
      display: inline-block;
    }
    @media (min-width: 992px) {

    .footer .grid-list { grid-template-columns: 1.2fr 2fr 1fr 1fr; }
    }
  </style>

</head>
<body>

  <!-- Footer Section -->
  <footer class="footer">

    <div class="footer-top section">
      <div class="container grid-list">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/logo.png" width="162" height="50" alt="EduWeb logo">
          </a>

          <p class="footer-brand-text">
            Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incidid unt labore dolore.
          </p>
        </div>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Online Platform</p>
          </li>
          <li>
            <a class="footer-link">Add: 70-80 Upper St Norwich NR2</a>
          </li>
          <li>
            <a href="tel:+011234567890" class="footer-link">Call: +01 123 4567 890</a>
          </li>
          <li>
            <a href="mailto:info@eduweb.com" class="footer-link">Email: office@optimumsync.com</a>
          </li>
        </ul>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Links</p>
          </li>
          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>
          <li>
            <a href="#" class="footer-link">Home</a>
          </li>
          <li>
            <a href="#" class="footer-link">About us</a>
          </li>
          <li>
            <a href="#" class="footer-link">FAQ's</a>
          </li>
         
        </ul>

        <div class="footer-list">
        <li>
            <p class="footer-list-title">Social Media Links</p>
          </li>
          <ul class="social-list">
          
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>
            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>
          </ul>
        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          Copyright 2025 All Rights Reserved by <a href="#" class="copyright-link">optimumsync</a>
        </p>
      </div>
    </div>

  </footer>

</body>
</html>
