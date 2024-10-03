<html>
<head>
<title>mazespin.live</title>
<meta name="referrer" content="no-referrer" />
<!--<meta name="referrer" content="never">-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script id="aclib" type="text/javascript" src="//acscdn.com/script/aclib.js"></script>
<script src='https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js'></script>
<script src='https://cdn.jsdelivr.net/gh/clappr/clappr-level-selector-plugin@latest/dist/level-selector.min.js'></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js" async></script>
</head>
<body style="margin:0px;padding:0px;background-color: #242424">
<script type="text/javascript">
        aclib.runInPagePush({
            zoneId: '8669086',
            refreshRate: 30,
            maxAds: 3,
        });
    </script>
<div align="center">
<div id="ppp"></div>
<script>
const urlParams = new URLSearchParams(window.location.search);
const channelURL = urlParams.get('url');
var player = new Clappr.Player({
source: channelURL,
poster: "https://mazespin.live/media/img/stream-thumbnails/generic.jpg",
width:'100%',
height:'100%',
autoPlay: true,
mimeType: "application/x-mpegURL",
plugins: [LevelSelector,
ClapprPip.PipButton,
ClapprPip.PipPlugin
],
playback: {
hlsjsConfig: {maxBufferLength: 20}
},
parentId: "#ppp"});
</script>
</div>
</body>
</html>