$(document).ready(function() {
    var config = {
        width: 960,
        height: 600,
        params: { enableDebugging:"0" }
    };
    var wplayer = new UnityObject2(config);
    var gameURI = 'game.unity3d';

    var $missingScreen = $("#unityPlayer").find(".missing");
    var $brokenScreen = $("#unityPlayer").find(".broken");
    $missingScreen.hide();
    $brokenScreen.hide();

    wplayer.observeProgress(function (progress) {
        switch(progress.pluginStatus) {
            case "broken":
                $brokenScreen.find("a").click(function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    wplayer.installPlugin();
                    return false;
                });
                $brokenScreen.show();
                break;
            case "missing":
                $missingScreen.find("a").click(function (e) {
                    e.stopPropagation();
                    e.preventDefault();
                    wplayer.installPlugin();
                    return false;
                });
                $missingScreen.show();
                break;
            case "installed":
                $missingScreen.remove();
                break;
            case "first":
                break;
        }
    });

    wplayer.initPlugin($("#unityPlayer")[0], gameURI);

    // Application.ExternalCall("sendData", score, gold);
});
