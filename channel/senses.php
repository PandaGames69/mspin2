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
<script disable-devtool-auto src='https://cdn.jsdelivr.net/npm/disable-devtool'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
<script src="https://content.jwplatform.com/libraries/IDzF9Zmk.js"></script>
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
        
                const urlParams = new URLSearchParams(window.location.search);
                const channelURL = urlParams.get('url');
                document.body.outerHTML = "<iframe>" + channelID + "</iframe>";
    </script>
</body>
</html>