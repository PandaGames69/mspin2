<!-- Base HTML settings -->
<?php include "../base-php-elements/base-html-sets.php" ?>

<!-- Header -->
<?php include "../base-php-elements/header.php" ?>|

<script type="text/javascript" src="//laikouthiphu.com/5/8155222" async data-cfasync="false"></script>

<body>

  <!-- Page contents -->
  <div class="single-streams-page-content">

    <!-- Stream feed page title -->
    <div class="stream-page-title-wrapper">
      <div class="stream-page-title">
        <img src="..\media\svg\series-title\channel-skysportnz.svg" alt="">
      </div>
      <p class="stream-page-title">Streams</p>
    </div>

    <!-- Sream feed settings and shit -->
    <div class="stream-page-god-wrapper">

      <!-- left col feed + streams -->
      <div class="streams-col-left">

        <!-- Stream buttons only touch <p> and embed link -->
        <div class="stream-page-buttons-wrapper">

          <div class="feed-buttons-wrapper">

            <!-- Btn1 -->
            <button class="feed-button feed-button-chskysportnz"
              onclick="document.getElementById('feed-iframe').src = 'https://dlhd.so/embed/stream-590.php'">
              <p>Gold</p>
            </button>

            <!-- Btn2 -->
            <button class="feed-button feed-button-chskysportnz"
              onclick="document.getElementById('feed-iframe').src = 'https://dlhd.so/embed/stream-591.php'">
              <p>CH2</p>
            </button>

            <!-- Btn3 -->
            <button class="feed-button feed-button-chskysportnz"
              onclick="document.getElementById('feed-iframe').src = 'https://dlhd.so/embed/stream-592.php'">
              <p>CH3</p>
            </button>

            <!-- Btn4 -->
            <button class="feed-button feed-button-chskysportnz"
              onclick="document.getElementById('feed-iframe').src = 'https://dlhd.so/embed/stream-593.php'">
              <p>CH4</p>
            </button>

            <!-- Btn5 -->
            <button class="feed-button feed-button-chskysportnz"
              onclick="document.getElementById('feed-iframe').src = 'https://dlhd.sx/embed/stream-594.php'">
              <p>CH5</p>
            </button>

            <!-- Btn6 -->
            <button class="feed-button feed-button-chskysportnz"
              onclick="document.getElementById('feed-iframe').src = 'https://dlhd.so/embed/stream-595.php'">
              <p>CH6</p>
            </button>

            <button class="feed-button feed-button-chskysportnz"
              onclick="document.getElementById('feed-iframe').src = 'https://dlhd.so/embed/stream-596.php'">
              <p>CH7</p>
            </button>

            <button class="feed-button feed-button-chskysportnz"
              onclick="document.getElementById('feed-iframe').src = 'https://wikisport.se/wik/skypo1.php'">
              <p>CH8</p>
            </button>

            <button class="feed-button feed-button-chskysportnz"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/raw2?url=aHR0cHM6Ly9saW5lYXItcC5tZWRpYS5za3lvbmUuY28ubnovcHJpbWVwbHVzMS5jbGVhci5tM3U4'">
              <p>Open</p>
            </button>

          </div>

        </div> <!-- Stream buttons close -->

        <?php include "../base-php-elements/stream-feed-embed.php" ?>

      </div> <!-- left col close -->


      <!-- Right col chat + theatre + show/hide -->
      <div class="streams-col-right">

        <!-- Twitch show/hide + theatre DO NOT TOUCH -->
        <div class="stream-page-buttons-wrapper" id="stream-page-buttons-wrapper-right">

          <?php include "../base-php-elements/faq-button-streams.php" ?>
          
          <?php include "../base-php-elements/theatre-switch.php" ?>

          <?php include "../base-php-elements/twitch-switch.php" ?>

        </div> <!-- Twitch show/hide + theatre close -->

        <?php include "../base-php-elements/twitch-chat-embed.php" ?>

      </div> <!-- Right col close -->

    </div> <!-- Sream feed settings close -->

  </div> <!--page content close -->

</body>

<?php include "../base-php-elements/sticky-twitch.php" ?>

<!-- Footer -->
<?php include "../base-php-elements/footer.php" ?>


</html>