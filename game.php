<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Semaine Intensive 3D/WEB</title>
    <link rel="stylesheet" href="./animate/animate.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<!-- <script src="./js/jquery.js"></script> -->
    <script src="./UnityObject2.js"></script>
    <script src="./webplayer.js"></script>
    <script>
        function sendData(score, gold) {
          console.log(score, gold);
            var uri = '/postscore.php';
            $.post(uri, {
                score: score,
                gold: gold
            }).done(function(res) {
                console.log('POST on %s => %s', uri, res);
            }).fail(function(err) {
                console.log('POST on %s => ERROR %s', uri, err);
            });
        }
    </script>
</head>
<body>

    <div id="unityPlayer">
        <div class="missing">
            <a href="http://unity3d.com/webplayer/" title="Unity Web Player. Install now!">
                <img alt="Unity Web Player. Install now!" src="http://webplayer.unity3d.com/installation/getunity.png" width="193" height="63" />
            </a>
        </div>
    </div>

</body>
</html>
