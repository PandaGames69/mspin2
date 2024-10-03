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
        <img src="..\media\svg\series-title\olympic-openingceremony.svg" alt="">
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
            <button class="feed-button feed-button-olympicceremony" onclick="document.getElementById('feed-iframe').src = '/channel/raw?url=aHR0cHM6Ly9mc2x5LnN0cmVhbS5wZWFjb2NrdHYuY29tL0NvbnRlbnQvQ01BRl9PTDEtQ1RSLTRzL0xpdmUvY2hhbm5lbChrbmJjKS9tYXN0ZXIubXBk&k1=MDA0NWExMThlMjMxZjEzMjZiY2RiNDUzNTBiMWNlYWE=&k2=OGMxM2FmYmZhNTRlYTM3YTM2OGI4Yjg1OTAyMWY2ZTM='">
              <p>Stream 1</p>
            </button>

            <!-- Btn2 -->
            <button class="feed-button feed-button-olympicceremony" onclick="document.getElementById('feed-iframe').src = '/channel/raw?url=aHR0cHM6Ly9jYWNoZTEuemFwaXR2LmNvbS9saXZlL2Vkc19jMi9ldXJvc3BvcnRfMV9oZC9kYXNoX2xpdmVfZW5jL2V1cm9zcG9ydF8xX2hkLm1wZA==&k1=MjM3YmU4Y2E5MzgzNzU1ZTlmNTc4NGRkMjNmNTQ1ZWI=&k2=MTVhNzIzNzczYzNiM2NiY2UyOTVjMGFlZDBiYzcxYzM='">
              <p>Stream 2</p>
            </button>

            <!-- Btn3 -->
            <button class="feed-button feed-button-olympicceremony" onclick="document.getElementById('feed-iframe').src = '/channel/raw?url=aHR0cHM6Ly9ubHppZXQtbGl2ZS5ha2FtYWl6ZWQubmV0L0wxMC84MzA2NmJlMS8yOTY0ZTBiNy5pc21sLy5tcGQ=&k1=MDc5ZDNmMmY2OWE3NDllMDk1NzQ3OGQ5MDY4MzY5YzY=&k2=NmI0YTkwZDNlNGQyMzdhYTk3Y2FkNDQ0Y2I5NzdjMGE='">
              <p>Stream 3</p>
            </button>

            <!-- Btn4 -->
            <button class="feed-button feed-button-olympicceremony" onclick="document.getElementById('feed-iframe').src = 'https://topembed.pw/channel/SuperSportGrandstand[SouthAfrica]'">
              <p>Stream 4</p>
            </button>

            <!-- Btn5 -->
            <button class="feed-button feed-button-olympicceremony" onclick="document.getElementById('feed-iframe').src = 'https://topembed.pw/channel/Eurosport1[UK]'">
              <p>Stream 5</p>
            </button>

            <!-- Btn6 -->
            <button class="feed-button feed-button-olympicceremony" onclick="document.getElementById('feed-iframe').src = 'https://topembed.pw/channel/NBC[USA]'">
              <p>Stream 6</p>
            </button>

            <!-- Btn7 -->
            <button class="feed-button feed-button-olympicceremony" onclick="document.getElementById('feed-iframe').src = '/channel/raw?url=aHR0cHM6Ly9mc2x5LnN0cmVhbS5wZWFjb2NrdHYuY29tL0NvbnRlbnQvQ01BRl9PTDEtQ1RSLTRzL0xpdmUvY2hhbm5lbChrbmJjKS9tYXN0ZXIubXBk&k1=MDA0NWExMThlMjMxZjEzMjZiY2RiNDUzNTBiMWNlYWE=&k2=OGMxM2FmYmZhNTRlYTM3YTM2OGI4Yjg1OTAyMWY2ZTM='">
              <p>Stream 7</p>
            </button>

            <!-- Btn8 -->
            <button class="feed-button feed-button-olympicceremony" onclick="document.getElementById('feed-iframe').src = '/channel/raw?url=aHR0cHM6Ly9saXZlLXN0cmVhbWluZy1yc20uYWthbWFpemVkLm5ldC9zbjFoZC9zbjFoZF9jZW5jLmlzbWwvLm1wZA==&k1=ZjlkZDJlZDk2MDlmNDkzMDlkZGYwNzg5MmQyNWIwODE=&k2=YzEyNTQxMDlhYWZmNzM3MDFmYmVhOTdkYzE4OTliOGU='">
              <p>Stream 8</p>
            </button>

            <!-- Btn9 -->
            <button class="feed-button feed-button-olympicceremony" onclick="document.getElementById('feed-iframe').src = 'https://topembed.pw/channel/SportsnetOntario[Canada]'">
              <p>Stream 9</p>
            </button>

            <!-- Btn10 -->
            <button class="feed-button feed-button-olympicceremony" onclick="document.getElementById('feed-iframe').src = 'https://topembed.pw/channel/TSN1[Canada]'">
              <p>Stream 10</p>
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