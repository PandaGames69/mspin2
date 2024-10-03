<!-- Base HTML settings -->
<?php include "../base-php-elements/base-html-sets.php" ?>

<!-- Header -->
<?php include "../base-php-elements/header.php" ?>
<script defer src="../js/murica-ee.js" type="text/javascript"></script>

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


<body>

  <div class="row-god">
    <div class="row-jesus">CLICK ME</div>
  </div>

  <!-- Page contents -->
  <div class="streams-page-content">

    <!-- Carousel Hero -->
    <div class="stream-hero-wrapper">
      <div class="stream-hero-txt">Motorsport streams</div>
      <div class="stream-hero-img-wrapper-6fr">
        <div class="stream-hero-img"> <img src="../media/img/motorsport/hero-motorsport-f1.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/motorsport/hero-motorsport-motogp.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/motorsport/hero-motorsport-indy.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/motorsport/hero-motorsport-wrc.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/motorsport/hero-motorsport-v8.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/motorsport/hero-motorsport-nascar.webp" alt=""> </div>
      </div>

      <script>
        var copy = document.querySelector(".stream-hero-img-wrapper-6fr").cloneNode(true);
        document.querySelector(".stream-hero-wrapper").appendChild(copy);
      </script>

    </div> <!-- carousel hero close -->

    <div class="stream-menu-wrapper">
      <!-- <div class="stream-menu-entry" id="formula-streams">
        Open Wheel
        <div class="menu-entry-line"></div>
      </div> -->
      <div class="stream-menu-entry" id="motorcycle-streams">
        Motorcycle
        <div class="menu-entry-line"></div>
      </div>
      <div class="stream-menu-entry" id="stockcar-streams">
        Stock Cars
        <div class="menu-entry-line"></div>
      </div>
      <div class="stream-menu-entry" id="rally-streams">
        Rally
        <div class="menu-entry-line"></div>
      </div> 
      <div class="stream-menu-entry" id="endurance-streams">
        Endurance
        <div class="menu-entry-line"></div>
      </div>
    </div>

    <div id="streams-dynamic-container">
      <?php// include "../streams-pages/stream-pages-boxes/formula.php"; ?>
      <?php include "../streams-pages/stream-pages-boxes/motorcycle.php"; ?>
      <?php include "../streams-pages/stream-pages-boxes/stockcar.php"; ?>
      <?php include "../streams-pages/stream-pages-boxes/rally.php"; ?>
      <?php include "../streams-pages/stream-pages-boxes/endurance.php"; ?>
    </div>

  </div> <!-- page content close -->

</body>

<!-- FAQ -->
<?php include "../base-php-elements/sticky-faq.php" ?>

<!-- Footer -->
<?php include "../base-php-elements/footer.php" ?>

</html>