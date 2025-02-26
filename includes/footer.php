<?php 
$current_page = basename($_SERVER['PHP_SELF']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    /*-----------------------------------*\
      #FOOTER
    \*-----------------------------------*/

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .section {
      padding: 50px 0;
    }

    .grid-list {
      display: grid;
      gap: 30px;
    }

    .footer {
      background-repeat: no-repeat;
      background-color: #121212;
      color: #a0a0a0;
      font-size: 16px;
    }

    .footer-top {
      display: grid;
      gap: 30px;
    }

    .footer-brand-text { 
      margin-block: 20px; 
      line-height: 1.6;
    }

    .footer-brand .wrapper {
      display: flex;
      gap: 5px;
    }

    .footer-brand .wrapper .span { 
      font-weight: 500; 
    }

    .footer-link { 
      transition: 0.3s ease-in-out; 
      text-decoration: none;
      color: #a0a0a0;
      display: block;
    }

    .footer-link:is(:hover, :focus) { 
      color: #4169e1; 
    }

    .footer-list {
      list-style: none;
      padding-left: 0;
    }

    .footer-list-title {
      color: #e0e0e0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 18px;
      font-weight: 600;
      margin-block-end: 15px;
      position: relative;
      padding-bottom: 10px;
    }

    .footer-list-title::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 40px;
      height: 2px;
      background-color: #4169e1;
    }

    .footer-list .footer-link { 
      padding-block: 8px; 
    }

    .social-list {
      display: flex;
      gap: 15px;
      margin-top: 20px;
      padding-left: 0;
      list-style: none;
    }

    .social-link { 
      font-size: 18px; 
      color: #e0e0e0;
      background-color: #1e1e1e;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      transition: all 0.3s ease;
    }

    .social-link:hover {
      background-color: #4169e1;
      color: #e0e0e0;
      transform: translateY(-3px);
    }

    .footer-bottom {
      border-block-start: 1px solid #252525;
      padding-block: 25px;
      background-color: #0e0e0e;
    }

    .copyright { 
      text-align: center; 
      color: #909090;
    }

    .copyright-link {
      color: #4169e1;
      display: inline-block;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .copyright-link:hover {
      text-decoration: underline;
    }

    .logo {
      display: inline-block;
    }

    .logo img {
      max-width: 100%;
      height: auto;
    }

    @media (min-width: 768px) {
      .footer .grid-list { 
        grid-template-columns: repeat(2, 1fr); 
      }
    }

    @media (min-width: 992px) {
      .footer .grid-list { 
        grid-template-columns: 1.2fr 2fr 1fr 1fr; 
      }
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
            <img src="./assets/logo.png" width="80" height="50" alt="OptimumSync logo">
          </a>

          <p class="footer-brand-text">
          Reach Your Goals With Our Professional Solutions. We provide expert-driven solutions that empower businesses to achieve their goals.
          </p>
        </div>

        <ul class="footer-list">
          <li>
            <p class="footer-list-title">Online Platform</p>
          </li>
          <li>
            <a class="footer-link">Add: #01, 2nd Floor, NIE StartUp and Incubation Center,
            NIE College South Campus, Mananthavadi Road, Mysuru 570008</a>
          </li>
          <li>
            <a href="tel:+919876543210" class="footer-link">Call: +91 98765 43210</a>
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
            <a href="../index.php" class="footer-link">Home</a>
          </li>
          <li>
            <a href="../about.php" class="footer-link">About Us</a>
          </li>
          <li>
            <a href="../cintact.php" class="footer-link">Contact Us</a>
          </li>
         
        </ul>

        <div class="footer-list">
          <p class="footer-list-title">Social Media Links</p>
          <ul class="social-list">
            
            <li>
              <a href="https://www.linkedin.com/company/optimum-sync/" class="social-link">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/optimum_sync" class="social-link">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="https://x.com/OptimumSync" class="social-link">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            
          </ul>
        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
        Copyright @ 2025 Optimum Sync, All rights reserved.
        </p>
      </div>
    </div>

  </footer>

</body>
</html>