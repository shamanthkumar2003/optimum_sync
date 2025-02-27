<?php 
$current_page = basename($_SERVER['PHP_SELF']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="includes/styles.css">

    <title>Optimum Sync</title>
    <link rel="icon" href="../assets/logo.png" type="image/x-icon">
     <!-- 
    - google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

</head>

<body>


  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">OS</p>
  </div>
    
  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="../assets/logo3.png" width="60" height="auto" alt="Home">
      </a>
          <h1 class="company-title">Optimum Sync</h1>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="../assets/logo.png"  alt="Grilli - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="../index.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          

          <li class="navbar-item">
            <a href="../about.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">About Us</span>
            </a>
          </li>

       

          <li class="navbar-item">
            <a href="../contact.php" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Contact</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Visit Us</p>

          <address class="body-4">
          #01, 2nd Floor, NIE StartUp and Incubation Center,<br/> NIE College South Campus, Mananthavadi Road, Mysuru 570008
          </address>

         

          <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">office@optimumsync.com</a>

          <div class="separator"></div>

          <p class="contact-label">Contact details</p>

          <a href="tel:+919876543210" class="body-1 contact-number hover-underline">
          +91 98765 43210
          </a>
        </div>

      </nav>

      <a href="tel:+919876543210" class="btn btn-secondary">
        <span class="text text-1">Contact Us Now</span>

        <span class="text text-2" aria-hidden="true">Contact Us Now</span>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  <script src="includes/header.js"></script>
    <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>



</html>