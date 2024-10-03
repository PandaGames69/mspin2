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
<script src="https://cdn.jsdelivr.net/npm/clappr@0.3.13/dist/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@clappr/hlsjs-playback@latest/dist/hlsjs-playback.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js" async></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/clappr@0.3.13/src/components/core/public/fonts.min.css">
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
        fetch('/media/list/hls.json')
            .then(response => response.json())
            .then(data => {
                const urlParams = new URLSearchParams(window.location.search);
                const channelID = urlParams.get('id');
                if (data.hasOwnProperty(channelID)) {
                    const channelData = data[channelID].drm_info;
                    const drmK1 = channelData.k1;
                    const drmK2 = channelData.k2;
                    const url = channelData.url;
                    // Clappr Set-Up
                    var player = new Clappr.Player({
                        source: atob(url),
                        plugins: [
                            LevelSelector,
                            ClapprPip.PipButton,
                            ClapprPip.PipPlugin,
                            HlsjsPlayback
                        ],
                        width: '100%',
                        height: '100%',
                        poster: "https://mazespin.live/media/img/stream-thumbnails/generic.jpg",
                        preferredAudioLanguage: 'pt-BR',
                        autoPlay: true,
                        parentId: "#player"
                    });
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