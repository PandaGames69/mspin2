<!-- Base HTML settings -->
<?php include "../base-php-elements/base-html-sets.php" ?>

<!-- Header -->
<?php include "../base-php-elements/header.php" ?>

<body>

  <!-- Page contents -->
  <div class="single-streams-page-content">

    <!-- Stream feed page title -->
    <div class="stream-page-title-wrapper">
      <div class="stream-page-title">
        <img src="..\media\svg\series-title\motogp.svg" alt="">
      </div>
      <p class="stream-page-title">Streams</p>
    </div>

    <!-- Sream feed settings and shit -->
    <div class="stream-page-god-wrapper">

      <!-- left col feed + streams -->
      <div class="streams-col-left">

        <?php include "../base-php-elements/stream-feed-arrows.php" ?>

        <!-- Stream buttons only touch <p> and embed link -->
        <div class="stream-page-buttons-wrapper">

          <div class="feed-buttons-wrapper">

          <!-- <button class="feed-button feed-button-motogp" onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/mpd2?id=OFFLINE'">
              <p>Stream 1</p>
          </button> -->

           <button class="feed-button feed-button-motogp" onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/mpd?id=SPOTV2'">
              <p>Stream 1</p>
            </button>

            <button class="feed-button feed-button-motogp" onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/mpd?id=SPOTV2_3'">
              <p>Stream 2</p>
            </button>

            <button class="feed-button feed-button-motogp" onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/mpd?id=TNTSP2UK'">
              <p>Stream 3</p>
            </button>

            <button class="feed-button feed-button-motogp" onclick="document.getElementById('feed-iframe').src = 'https://topembed.pw/channel/TNTSports2[UK]'">
              <p>Stream 4</p>
            </button>

            <!-- <button class="feed-button feed-button-motogp" onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/mpd?id=SPOTV2_2'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\malaysia.svg" alt="">
            </button> -->

            <button class="feed-button feed-button-motogp" onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/dazn?id=DAZN1ES'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\spain.svg" alt="">
            </button>

            <button class="feed-button feed-button-motogp" onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/jw2?id=SS1IT'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\italy.svg" alt="">
            </button>

            <button class="feed-button feed-button-motogp" onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/jw?id=SSC2'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\united-arab-emirates.svg" alt="">
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
