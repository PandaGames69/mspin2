<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mazespin.live</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0"/>
    <meta name="robots" content="noindex">
    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            overflow-y: hidden;
        }
        #player {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>
<!-- <script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
<script type="text/javascript" charset="utf-8" async="" src="//ssl.p.jwpcdn.com/player/v/8.26.0/jwpsrv.js"></script>
<script src="//ssl.p.jwpcdn.com/player/v/8.26.0/jwplayer.js"></script>
<script> jwplayer.key = 'XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo';</script>
</head>
<body>
    <?php// include "../base-php-elements/ads-player.php" ?>
    <script type="text/javascript">
        aclib.runInPagePush({
            zoneId: '8669086',
            refreshRate: 30,
            maxAds: 3,
        });
    </script>
    <div id="player"></div>
    <script type="text/javascript" defer>
        fetch('/media/list/shaka.json')
            .then(response => response.json())
            .then(data => {
                const urlParams = new URLSearchParams(window.location.search);
                const channelID = urlParams.get('id');
                if (data.hasOwnProperty(channelID)) {
                    const channelData = data[channelID].drm_info;
                    const drmK1 = channelData.k1;
                    const drmK2 = channelData.k2;
                    const url = channelData.url;
                    let primaryURL = atob(url);
                    let fallbackURL = 'https://192a.jdx3.org/' + primaryURL;
                    $.ajax({
          url: primaryURL,
          type: 'GET',
          success: function() {
              setupJWPlayer(primaryURL);
          },
          error: function() {
              setupJWPlayer(fallbackURL);
          }
        });
                    // JWPlayer Set-Up
                    function setupJWPlayer(sourceURL) {
                    var playerInstance = jwplayer("player");
                    playerInstance.setup({
                        playlist: [{
                            "image": "https://mazespin.live/media/img/stream-thumbnails/generic.jpg",
                                "sources": [
                                    {
                                        "default": true,
                                        "file": sourceURL,
                                        "drm": {
                                            "clearkey": {
                                                "keyId": atob(drmK1),
                                                "key": atob(drmK2)
                                            }
                                        },
                                        "label": "0"
                                    }
                                ]
                        }],
                        preload: "auto",
                        width: "100%",
                        pipIcon: "enabled",
                        height: "100%",
                        aspectratio: "16:9",
                        autostart: true,
                        mute: false,
                        "cast": {},
                        repeat: true
                    });
                }
                } else {
                    document.body.innerHTML = "<h2 class='access-denied'>Channel not found</h2>";
                }
            })
            .catch (error => {
                console.error('Error fetching JSON:', error);
                document.body.innerHTML = "<h2 class='access-denied'>Error fetching channel data</h2>";
            });
    </script>
</body>
</html>