<!-- Base HTML settings -->
<?php include "./base-php-elements/base-html-sets.php" ?>

<!-- Header -->
<?php include "./base-php-elements/header.php" ?>

<?php// include "./base-php-elements/ads-space.php" ?>

<?php include "./base-php-elements/analytics.php" ?>


<body>

  <!-- Page contents -->
  <div class="home-page-content">

    <!-- Home page cards -->
    <div class="home-cards-wrapper no-scrollbar">

      <!-- Motorsport -->
      <div class="card-wrapper" id="card-wrapper1" onclick="location.href='./streams-pages/motorsports.php';">
        <div class="card-content-wrapper">
          <div class="content-img">
            <img src=".\media\img\home\Motorsport.webp" alt="">
          </div>
        </div>
        <div class="card-img">
          <img src=".\media\img\home\Motorsport.webp" alt="">
        </div>
        <div class="home-card-title">
          <p>Motorsports streams</p>
          <div class="home-card-title-line"></div>
        </div>
      </div>
      <!-- Olympics -->
      <!-- <div class="card-wrapper" id="card-wrapper2" onclick="location.href='./streams-pages/olympics.php';">
        <div class="card-content-wrapper">
          <div class="content-img">
            <img src=".\media\img\home\Olympics.webp" alt="">
          </div>
        </div>
        <div class="card-img">
          <img src=".\media\img\home\Olympics.webp" alt="">
        </div>
        <div class="home-card-title">
          <p>Olympics streams</p>
          <div class="home-card-title-line"></div>
        </div>
      </div> -->

      <!-- Olympics -->
      <div class="card-wrapper" id="card-wrapper2" onclick="location.href='./streams-pages/football.php';">
        <div class="card-content-wrapper">
          <div class="content-img">
            <img src=".\media\img\home\Football.webp" alt="">
          </div>
        </div>
        <div class="card-img">
          <img src=".\media\img\home\Football.webp" alt="">
        </div>
        <div class="home-card-title">
          <p>Football streams</p>
          <div class="home-card-title-line"></div>
        </div>
      </div>      

      <!-- Mixed -->
      <div class="card-wrapper" id="card-wrapper3" onclick="location.href='./streams-pages/others.php';">
        <div class="card-content-wrapper">
          <div class="content-img">
            <img src=".\media\img\home\Mixed.webp" alt="">
          </div>
        </div>
        <div class="card-img">
          <img src=".\media\img\home\Mixed.webp" alt="">
        </div>
        <div class="home-card-title">
          <p>Other streams</p>
          <div class="home-card-title-line"></div>
        </div>
      </div>

    </div><!-- home cards close -->

  </div> <!--page content close -->

</body>

<!-- FAQ -->
<?php include "./base-php-elements/sticky-faq.php" ?>

<!-- Footer -->
<?php include "./base-php-elements/footer.php" ?>


</html>