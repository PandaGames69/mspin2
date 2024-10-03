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
        <img src="..\media\svg\series-title\superfo.svg" alt="">
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
            <button class="feed-button feed-button-superfo" onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/max2?id=SFO'">
              <p>Stream 1</p>
            </button>

            <!-- Btn2 -->
            <!-- <button class="feed-button feed-button-superfo" onclick="document.getElementById('feed-iframe').src = 'https://topembed.pw/channel/SkySportssuperfo[UK]'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\italy.svg" alt="">
            </button> -->

            <!-- Btn3 -->
            <!-- <button class="feed-button feed-button-superfo" onclick="document.getElementById('feed-iframe').src = 'https://dlhd.sx/embed/stream-60.php'">
              <p>Stream 3</p>
            </button> -->

            <!-- Btn4 -->
            <!-- <button class="feed-button feed-button-superfo" onclick="document.getElementById('feed-iframe').src = 'https://streambtw.com/iframe/superfo.php'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\italy.svg" alt="">
            </button> -->

            <!-- Btn5 -->
            <!-- <button class="feed-button feed-button-superfo" onclick="document.getElementById('feed-iframe').src = 'https://dlhd.sx/embed/stream-592.php'">
              <p>Stream 5</p>
            </button> -->

            <!-- Btn6 -->
            <!-- <button class="feed-button feed-button-superfo" onclick="document.getElementById('feed-iframe').src = 'https://sportsurge.stream/embed/superfo.php'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\italy.svg" alt="">
            </button> -->

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