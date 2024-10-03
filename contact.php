<!-- Base HTML settings -->
<?php include "./base-php-elements/base-html-sets.php" ?>

<!-- Header -->
<header class="header-sets" style="grid-template-columns: auto;">
    <!-- Spin.live -->
    <div class="header-txt-wrapper">
        <div class="header-txt" onclick="location.href='../index.php';">
            <span>mazespin</span>.live
        </div>
    </div>
</header> <!-- Header close -->

<!-- Header Line -->
<div class="header-line-wrapper">
    <div class="header-line"></div>
</div> <!-- header line close -->

<body>

  <!-- Page contents -->
  <div class="contact-page-content">

    <div class="contact-title">
      <p>contact us</p>
    </div>

    <div class="contact-txt">
      <p>We take your problems and concerns very seriously. However, if the issues you're facing are minor, please join
        <span onclick="window.open('https://discord.gg/VpxhRAZkJ4', '_blank');">&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;</span>for a timely response.
      </p>
    </div>

    <div class="contact-txt" style="margin-bottom: 50px; height:77px">
      <p>If you wish to contact us for any <em>serious</em> concerns or inquiries, you can email us here:
        <br>
        <br>
        <strong onclick="window.open('mailto:contact@mazespin.live', '_blank');">contact@mazespin.live</strong>
      </p>
    </div>

  </div> <!--page content close -->

</body>

<!-- FAQ -->
<?php include "./base-php-elements/sticky-faq.php" ?>

<!-- Footer line -->
<div class="home-footer-line-wrapper">
    <div class="footer-line"></div>
</div>
<!-- footer line close -->

<!-- Footer -->
<footer class="footer-sets" style="grid-template-columns: auto;">
    <!-- Support us -->
    <div class="foot-support-wrapper" style="justify-self: center;" onclick="window.open('https://ko-fi.com/mazespinlive', '_blank');">
        <div class="footer-logos" id="kofi-logo"> <img src="..\media\svg\Kofi-cup.svg" alt=""> </div>
        <div class="footer-txt">Support us</div>
    </div>
</footer> <!-- footer close -->

</html>