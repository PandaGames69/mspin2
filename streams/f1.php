<!-- Base HTML settings -->
<?php include "../base-php-elements/base-html-sets.php" ?>

<!-- Header -->
<?php include "../base-php-elements/header.php" ?>|

<script type="text/javascript" src="//laikouthiphu.com/5/8155222" async data-cfasync="false"></script>
<script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>

<!-- <script type="text/javascript">
    aclib.runPop({
        zoneId: '8783642',
    });
</script> -->


<body>

  <!-- Page contents -->
  <div class="single-streams-page-content">

    <!-- Stream feed page title -->
    <div class="stream-page-title-wrapper">
      <div class="stream-page-title">
        <img src="..\media\svg\series-title\f1.svg" alt="">
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

          <!-- <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/jw2?id=OFFLINE'">
              <p>Stream 1</p>
          </button> -->

          <!-- <button class="feed-button feed-button-nascar" onclick="document.getElementById('feed-iframe').src = ''">
            <p>Stream 1</p>
          </button> -->

          <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/mpd?id=BSPORTSMY_UNIFI'">
              <p>Stream 1</p>
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/iframe1?url=https://bifsrehd.site/chunklist/hlsch10.m3u8'">
              <p>Stream 2</p>
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/mpd?id=TSN5CA'">
              <p>Stream 3</p>
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/iframe1?url=https://vidgyormedia02.pc.cdn.bitgravity.com/kat-origin/ff1/chunks.m3u8'">
              <p>Stream 4</p>
            </button>
            
            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://foothubhd.live/cast/1/skyf1uk.php'">
              <p>Stream 5</p>
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://foothubhd.live/cast/1/beinspmalysia.php'">
              <p>Stream 6</p>
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://streambtw.com/iframe/f1.php'">
              <p>Stream 7</p>
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/max?id=MAX1'">
              <p>F1 Kids</p>
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/mpd?id=BSPORTSMY'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\malaysia.svg" alt="">
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/mpd?id=SSF1UK_LL'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\united-kingdom.svg" alt="">
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/orf1'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\austria.svg" alt="">
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/dazn?id=PLAYSP1BE'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\belgium.svg" alt="">
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/mpd?id=FS1MX'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\mexico.svg" alt="">
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/dazn?id=DAZNF1_2'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\spain.svg" alt="">
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://dlhd.so/embed/stream-274.php'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\germany.svg" alt="">
            </button>

            <button class="feed-button feed-button-f1"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/jw2?id=SSF1IT'">
              <p>Stream</p>
              <img src="..\media\svg\custom-flags\italy.svg" alt="">
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
<?php
  echo include_once (dirname(__FILE__) . '/pa_antiadblock_8155235.php');
?>
<?php include "../base-php-elements/sticky-twitch.php" ?>

<!-- Footer -->
<?php include "../base-php-elements/footer.php" ?>


</html>
