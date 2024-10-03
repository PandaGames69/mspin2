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
        <img src="..\media\svg\series-title\channel-nbc.svg" alt="">
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
            <button class="feed-button feed-button-chnbc"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/raw?url=aHR0cHM6Ly9mc2x5LnN0cmVhbS5wZWFjb2NrdHYuY29tL0NvbnRlbnQvQ01BRl9PTDEtQ1RSLTRzL0xpdmUvY2hhbm5lbChrbmJjKS9tYXN0ZXIubXBk&k1=MDA0NWExMThlMjMxZjEzMjZiY2RiNDUzNTBiMWNlYWE=&k2=OGMxM2FmYmZhNTRlYTM3YTM2OGI4Yjg1OTAyMWY2ZTM='">
              <p>KNBC</p>
            </button>

            <button class="feed-button feed-button-chnbc"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/raw2?url=aHR0cHM6Ly8xNS5qZHgzLm9yZy9vbHkvbmJjL3N0cmVhbS5tM3U4'">
              <p>WNBC</p>
            </button>

            <!-- Btn2 -->
            <button class="feed-button feed-button-chnbc"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/raw2?url=aHR0cHM6Ly8xNS5qZHgzLm9yZy9vbHkvdXNhbmV0L3N0cmVhbS5tM3U4'">
              <p>USA</p>
            </button>

            <!-- Btn3 -->
            <button class="feed-button feed-button-chnbc"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/raw2?url=aHR0cHM6Ly8xNS5qZHgzLm9yZy9vbHkvY25iYy9zdHJlYW0ubTN1OA==  '">
              <p>CNBC</p>
            </button>

            <!-- Btn4 -->
            <button class="feed-button feed-button-chnbc"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/raw?url=aHR0cHM6Ly9saXZlLW9uZWFwcC1wcmQtbmV3cy5ha2FtYWl6ZWQubmV0L0NvbnRlbnQvQ01BRl9PTDEtQ1RSLTRzL0xpdmUvY2hhbm5lbChnb2xmKS9tYXN0ZXIubXBk&k1=ZDVjOTIwMzQ0N2FiMzhjNWJmNWI0MDdjZGQ5ZGU1ZTg=&k2=NTAxNDY0ZGZhMmFjNDM3MDk4YzM1ZTFjNGYxNmJiNmI='">
              <p>NBCGolf</p>
            </button>

            <!-- Btn5 -->
            <button class="feed-button feed-button-chnbc"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/raw2?url=aHR0cHM6Ly8xNS5qZHgzLm9yZy9vbHkvZW5ldHdvcmsvc3RyZWFtLm0zdTg='">
              <p>E!</p>
            </button>

            <button class="feed-button feed-button-chnbc"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/raw2?url=aHR0cHM6Ly8xNS5qZHgzLm9yZy9vbHkvbmJjdW5pdmVyc28vc3RyZWFtLm0zdTg='">
              <p>Universo</p>
            </button>

            <button class="feed-button feed-button-chnbc"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/raw2?url=aHR0cHM6Ly8xNS5qZHgzLm9yZy9vbHkvdGVsZW11bmRvL3N0cmVhbS5tM3U4'">
              <p>Telemundo</p>
            </button>

            <button class="feed-button feed-button-chnbc"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/raw2?url=aHR0cHM6Ly8xNS5qZHgzLm9yZy9vbHkvcGFyaXMxL3N0cmVhbS5tM3U4'">
              <p>Popup 1</p>
            </button>

            <button class="feed-button feed-button-chnbc"
              onclick="document.getElementById('feed-iframe').src = 'https://mazespin.live/channel/raw2?url=aHR0cHM6Ly8xNS5qZHgzLm9yZy9vbHkvcGFyaXMyL3N0cmVhbS5tM3U4'">
              <p>Popup 2</p>
            </button>

            <!-- Btn6 -->
            <!-- <button class="feed-button feed-button-chnbc"
              onclick="document.getElementById('feed-iframe').src = ''">
              <p>E!</p>
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