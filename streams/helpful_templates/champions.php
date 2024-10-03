<!-- champions god wrapper DONT TOUCH -->
<div class="streams-row-god-wrapper" id="champions-streams">

            <!-- feed champions -->
        <div class="stream-wrapper wrapper-champions">
          <!-- Tooltip scroll -->
          <?php include "../base-php-elements/stream-tooltip.php" ?>
          <!-- Thumbanil -->
          <img class="stream-thumb" src="..\media\img\stream-thumbnails\champions.webp" alt="">
          <!-- feed title box -->
          <div class="series-title-box title-box-champions">
            <div class="series-title series-title-champions">
              <img src="..\media\svg\series-title\champions.svg" alt="">
            </div>
          </div>
          <!-- Streams link -->
          <div class="stream-feed stream-feed-champions" onclick="location.href='../streams/champions-game1.php';">
            <p>Bologna vs Shakhtar Donetsk</p>
          </div>
          <div class="stream-feed stream-feed-champions" onclick="location.href='../streams/champions-game2.php';">
            <p>Sparta Praha vs RB Salzburg</p>
          </div>
           <div class="stream-feed stream-feed-champions" onclick="location.href='../streams/champions-game3.php';">
            <p>PSG vs Girona</p>
          </div>
          <div class="stream-feed stream-feed-champions" onclick="location.href='../streams/champions-game4.php';">
            <p>Club Brugge vs Borussia Dortmund</p>
          </div>
          <div class="stream-feed stream-feed-champions" onclick="location.href='../streams/champions-game5.php';">
            <p>Celtic vs Slovan Bratislava</p>
          </div>
          <div class="stream-feed stream-feed-champions" onclick="location.href='../streams/champions-game6.php';">
            <p>Manchester City vs Inter</p>
          </div>
        </div> <!-- champions stream close -->

        <!-- feed temporary -->
        <div class="stream-wrapper wrapper-temporary" style="display: none;">
          <!-- Tooltip scroll -->
          <?php include "../base-php-elements/stream-tooltip.php"; ?>
          <!-- Thumbanil -->
          <img class="stream-thumb" src="..\media\img\stream-thumbnails\temporary.webp" alt="">
          <!-- feed title box -->
          <div class="series-title-box title-box-temporary">
            <div class="series-title series-title-temporary">
              Series A
            </div>
          </div>
          <!-- Streams link -->
          <div class="stream-feed stream-feed-temporary" onclick="location.href='../streams/temporary.php';">
            <p>match 1</p>
          </div>
          <!--<div class="stream-feed stream-feed-temporary" onclick="location.href='../streams/temporary.php';">
            <p>qualifying</p>
          </div>
          <div class="stream-feed stream-feed-temporary" onclick="location.href='../streams/temporary.php';">
            <p>Race</p>
          </div>-->
        </div> <!-- temporary stream close -->

           <!-- feed nations -->
  <div class="stream-wrapper wrapper-nations">
    <!-- Tooltip scroll -->
    <?php include "../base-php-elements/stream-tooltip.php"; ?>
    <!-- Thumbanil -->
    <img class="stream-thumb" src="..\media\img\stream-thumbnails\nations.webp" alt="">
    <!-- feed title box -->
    <div class="series-title-box title-box-nations">
      <div class="series-title series-title-nations">
        <img src="..\media\svg\series-title\nations.svg" alt="">
      </div>
    </div>
    <!-- Streams link -->
    <div class="stream-feed stream-feed-nations" onclick="window.open('https://discord.gg/mazespin', '_blank');">
      <p>Join our Discord</p>
    </div>
  </div> <!-- nations stream close -->       

</div> <!-- champions god wrapper close -->