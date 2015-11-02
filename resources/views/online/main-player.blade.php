<style type="text/css">
    .jp-interface-bottom {
    background-color: #333;
    border-top: 1px solid rgba(0,0,0,.15);
    height: 70px;
    visibility: visible;
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
}
.jp-interface-bottom #sound-container{
    margin: 0 auto;
    width: 80%;
}
div.jp-audio ul.jp-controls{
    width: 100%;
}
div.jp-audio div.jp-type-single a.jp-mute, div.jp-audio div.jp-type-single a.jp-unmute {
    margin-left: 720px;
}
div.jp-audio div.jp-volume-bar{
        left: 840px;
}
div.jp-audio div.jp-type-single div.jp-progress{
    width: 660px;
}
div.jp-audio div.jp-type-single div.jp-time-holder{
    width: 660px;
}
 .separator {
    background-image:url("../assets/img/seperator.png");
    background-repeat:no-repeat;
    width: 2px;
    height: 35px;
    float:left;
    margin-top: 7px;
    margin-right: 10px;
}
</style>
<div class="jp-interface-bottom">
    <div id="sound-player" class="jp-jplayer"></div>
        <div id="sound-container" class="jp-audio top-player">
            <div class="jp-type-single">
                <div class="jp-gui jp-interface">
                    <ul class="jp-controls">
                        <li><a onclick="prevnext(1)" id="prev-button" class="prev-button"></a></li>
                        <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                        <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                        <li><a onclick="prevnext(2)" id="next-button" class="next-button"></a></li>
                        <li><a href="javascript:;" class="jp-mute" tabindex="1" title="Mute">mute</a></li>
                        <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="Unmute">unmute</a></li>
                    </ul>
                    <ul class="jp-toggles">
                            <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="Repeat" onclick="repeatSong(1)">repeat</a></li>
                            <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="Repeat Off" onclick="repeatSong(0)">repeat off</a></li>                    </ul>
                    <div class="topbar-song-name" id="sw-song-name">
                        
                    </div>
                    <div class="jp-progress">
                        <div class="jp-seek-bar">
                            <div class="jp-play-bar"></div>
                        </div>
                    </div>

                    <div class="jp-volume-bar" onclick="playerVolume()">
                        <div class="jp-volume-bar-value"></div>
                    </div>
                    <div class="jp-time-holder">
                        <div class="jp-current-time"></div>
                        <div class="jp-duration"></div>
                    </div>
                </div>
                <div class="jp-no-solution"></div>
            </div>
</div>