<!-- Base HTML settings -->
<?php include "../base-php-elements/base-html-sets.php" ?>

<!-- Header -->
<?php include "../base-php-elements/header.php" ?>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-X4TTGBYSJE"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-X4TTGBYSJE');
</script>


<div class="page-god">
  𝓯𝓻𝓮𝓪𝓴𝔂
</div>

<body>

  <!-- Page contents -->
  <div class="streams-page-content">

    <!-- Carousel Hero -->
    <div class="stream-hero-wrapper">
      <div class="stream-hero-txt">football streams</div>
      <div class="stream-hero-img-wrapper-6fr">
        <div class="stream-hero-img"> <img src="../media/img/football/hero-football-1.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/football/hero-football-2.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/football/hero-football-3.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/football/hero-football-1.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/football/hero-football-2.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/football/hero-football-3.webp" alt=""> </div>
      </div>

      <script>
        var copy = document.querySelector(".stream-hero-img-wrapper-6fr").cloneNode(true);
        document.querySelector(".stream-hero-wrapper").appendChild(copy);
      </script>

    </div> <!-- carousel hero close -->

    <div class="stream-menu-wrapper">
      <div class="stream-menu-entry" id="premier-streams">
        Premier
        <div class="menu-entry-line"></div>
      </div>
      <div class="stream-menu-entry" id="uefa-streams">
        UEFA
        <div class="menu-entry-line"></div>
      </div>
      <div class="stream-menu-entry" id="spanishfb-streams">
        Spanish
        <div class="menu-entry-line"></div>
      </div>
      <div class="stream-menu-entry" id="italianfb-streams">
        italian
        <div class="menu-entry-line"></div>
      </div>
      <!-- <div class="stream-menu-entry" id="frenchfb-streams">
        french
        <div class="menu-entry-line"></div>
      </div> -->
      <div class="stream-menu-entry" id="germanfb-streams">
        german
        <div class="menu-entry-line"></div>
      </div>
      <div class="stream-menu-entry" id="americafb-streams">
        american
        <div class="menu-entry-line"></div>
      </div>
    </div>

    <div id="streams-dynamic-container">
      <?php include "../streams-pages/stream-pages-boxes/premier.php"; ?>
      <?php include "../streams-pages/stream-pages-boxes/spanishfb.php"; ?>
      <?php include "../streams-pages/stream-pages-boxes/italianfb.php"; ?>
      <?php include "../streams-pages/stream-pages-boxes/uefa.php"; ?>
      <?php// include "../streams-pages/stream-pages-boxes/frenchfb.php"; ?>
      <?php include "../streams-pages/stream-pages-boxes/germanfb.php"; ?>
      <?php include "../streams-pages/stream-pages-boxes/americafb.php"; ?>
    </div>

  </div> <!-- page content close -->

</body>

<!-- FAQ -->
<?php include "../base-php-elements/sticky-faq.php" ?>

<!-- Footer -->
<?php include "../base-php-elements/footer.php" ?>

</html>