<!-- Base HTML settings -->
<?php include "../base-php-elements/base-html-sets.php" ?>

<!-- Header -->
<?php include "../base-php-elements/header.php" ?>

<body>

  <!-- Page contents -->
  <div class="streams-page-content">

    <!-- Carousel Hero -->
    <div class="stream-hero-wrapper">
      <div class="stream-hero-txt">olympics streams</div>
      <div class="stream-hero-img-wrapper-6fr">
        <div class="stream-hero-img"> <img src="../media/img/olympics/hero-olympics-1.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/olympics/hero-olympics-2.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/olympics/hero-olympics-3.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/olympics/hero-olympics-4.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/olympics/hero-olympics-5.webp" alt=""> </div>
        <div class="stream-hero-img"> <img src="../media/img/olympics/hero-olympics-6.webp" alt=""> </div>
      </div>

      <script>
        var copy = document.querySelector(".stream-hero-img-wrapper-6fr").cloneNode(true);
        document.querySelector(".stream-hero-wrapper").appendChild(copy);
      </script>

    </div> <!-- carousel hero close -->

    <div class="stream-menu-wrapper">
      <!-- <div class="stream-menu-entry" id="olympicceremony-streams">
        Opening Ceremony
        <div class="menu-entry-line"></div>
      </div> -->
      <div class="stream-menu-entry" id="channels-streams">
        Channels
        <div class="menu-entry-line"></div>
      </div>
      <!-- <div class="stream-menu-entry" id="olympicwater-streams">
        Water Sports
        <div class="menu-entry-line"></div>
      </div>
      <div class="stream-menu-entry" id="olympicball-streams">
        Ball Sports
        <div class="menu-entry-line"></div>
      </div>
      <div class="stream-menu-entry" id="olympiccycling-streams">
        Cycling Sports
        <div class="menu-entry-line"></div>
      </div>
      <div class="stream-menu-entry" id="olympicmartialarts-streams">
        Martial Arts
        <div class="menu-entry-line"></div>
      </div>
      <div class="stream-menu-entry" id="olympicmixed-streams">
        Mixed Sports
        <div class="menu-entry-line"></div>
      </div>
      <div class="stream-menu-entry" id="olympicartistics-streams">
        Artistic Sports
        <div class="menu-entry-line"></div>
      </div> -->
    </div>

    <div id="streams-dynamic-container">
      <?php include "../streams-pages/stream-pages-boxes/channels.php"; ?>
      <?php// include "../streams-pages/stream-pages-boxes/olympicceremony.php"; ?>
      <?php// include "../streams-pages/stream-pages-boxes/olympicwater.php"; ?>
      <?php// include "../streams-pages/stream-pages-boxes/olympicartistics.php"; ?>
      <?php// include "../streams-pages/stream-pages-boxes/olympicball.php"; ?>
      <?php// include "../streams-pages/stream-pages-boxes/olympiccycling.php"; ?>
      <?php// include "../streams-pages/stream-pages-boxes/olympicmartialarts.php"; ?>
      <?php// include "../streams-pages/stream-pages-boxes/olympicmixed.php"; ?>
    </div>

  </div> <!-- page content close -->

</body>

<!-- FAQ -->
<?php include "../base-php-elements/sticky-faq.php" ?>

<!-- Footer -->
<?php include "../base-php-elements/footer.php" ?>

</html>