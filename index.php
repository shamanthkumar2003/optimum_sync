
<?php include 'includes/header.php'; ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/TimelineMax.min.js"></script>

<title>Optimum Sync</title>
</head>

<body>


  <!-- //// -->
<!-- Tile -->
<!-- //// -->


<div class="tile">

  <img alt="" class="tile__img tile__img--first" />
  <img alt="" class="tile__img tile__img--last" />

  <div class="title">
    &nbsp;<br />&nbsp;
    <div class="title__container">
      <div class="title__text title__text--first"></div>
      <div class="title__text title__text--last"></div>
    </div>
  </div>
</div>

<!-- /////////// -->
<!-- Next button -->
<!-- /////////// -->

<button class="next-tile">
    <span class="next-tile__details">
      <span class="next-tile__heading">Up next</span>
      <span class="next-tile__title">
        &nbsp; <br />&nbsp;
        <span class="next-tile__title__text next-tile__title__text--first"></span>
        <span class="next-tile__title__text next-tile__title__text--last"></span>
      </span>
      <svg class="next-tile__arrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 42.6 20.1" style="enable-background:new 0 0 42.6 20.1;" xml:space="preserve">
        <path class="st0" d="M0,8.2h35.5l-5.6-5.6L32.5,0l10.1,10.1L32.5,20.1l-2.6-2.6l5.6-5.6H0V8.2z"/>
      </svg>
      <div class="test-arrow"></div>
    </span>
    <span class="next-tile__preview">
      <img class="next-tile__preview__img next-tile__preview__img--first" alt="" />
      <img class="next-tile__preview__img next-tile__preview__img--last" alt="" />
    </span>
  </button>

<div>

<?php include 'pages/services.php'; ?>

</div>
<?php include 'pages/projects.php'; ?>




<?php include 'includes/footer.php'; ?>




<script src="scripts/index.js"></script>

</body>
</html>