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
        <img src="..\media\svg\series-title\promoto.svg" alt="">
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

            <!-- Btn1 -->
            <!-- <button class="feed-button feed-button-promoto" onclick="document.getElementById('feed-iframe').src = 'https://embedme.top/embed/alpha/pro-motocross-race-day-live-charlotte/1'">
              <p>Super MotoCross 1</p>
            </button> -->

            <!-- Btn2 -->
            <!-- <button class="feed-button feed-button-promoto" onclick="document.getElementById('feed-iframe').src = 'https://embedstreams.me/ama-supercross/supercross-rd-29-playoff-1-charlotte-stream-1'">
              <p>Super MotoCross 2</p>
            </button> -->

            <!-- <button class="feed-button feed-button-promoto" onclick="document.getElementById('feed-iframe').src = 'https://embedme.top/embed/pro-motocross-championship-washougal-national/1'">
              <p>Stream 3</p>
            </button> -->
                    
          <button class="feed-button feed-button-nascar" onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/raw2?id=OFFLINE'">
            <p>Stream 1</p>
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