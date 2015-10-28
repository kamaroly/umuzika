<!DOCTYPE html>
<html>
    <head>
<title>Umuzika</title>

<link href="/assets/jplayer/jplayer.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="/assets/jquery.min.js"></script>
  <script type="text/javascript" src="/assets/jplayer/dist/jplayer/jquery.jplayer.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            title: "Bubble",
            m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
            oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
          });
        },
        cssSelectorAncestor: "#jp_container_1",
        swfPath: "/js",
        supplied: "m4a, oga",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: true,
        remainingDuration: true,
        toggleDuration: true
      });
    });
  </script>

<style>
.playControls {
  position: fixed;
  bottom: 10;
  visibility: hidden;
  width: 100%;
  -webkit-perspective: 900;
  perspective: 900;
  -webkit-perspective-origin: 80% 100%;
  perspective-origin: 80% 100%;
}

.playControls__inner {
  background-color: #f2f2f2;
  border-top: 1px solid rgba(0,0,0,.15);
  height: 46px;
  visibility: visible;
  transition: -webkit-transform 200ms ease-out;
  transition: transform 200ms ease-out;
  -webkit-transform: translateY(100%);
  -ms-transform: translateY(100%);
  transform: translateY(100%);
}

.playControls.m-visible .playControls__inner {
  -webkit-transform: translateY(0);
  -ms-transform: translateY(0);
  transform: translateY(0);
}

.playControls__wrapper {
  padding-bottom: 10px;
  visibility: visible;
  position: relative;
}

.playControls__controls {
  position: relative;
}

.playControls__icon {
  border: 0;
  height: 46px;
  position: relative;
  float: left;
}

.playControls__icon:focus {
  outline: 0;
}

.playControls__icon.disabled {
  opacity: .3;
  cursor: default;
}

.playControls__icon.disabled:focus {
  background-color: transparent;
}

.playControls__playPauseSkip {
  float: left;
  margin: 0 40px 0 0;
}

.playControls__timeline {
  float: left;
  margin-right: 20px;
}

.playControls__soundBadge {
  box-sizing: border-box;
  position: absolute;
  right: 0;
  top: 0;
  width: 360px;
  height: 100%;
  padding: 0 8px;
  float: left;
  z-index: 1;
}

.playControls__panel {
  position: absolute;
  right: 0;
  top: 0;
  z-index: 0;
}

.playControls__repeat {
  float: left;
  margin-right: 20px;
}

.playControls__volume {
  position: absolute;
  right: 390px;
}

.playControls.m-volumeInactive .playControls__volume {
  pointer-events: none;
}

@media (max-width:1079px) {
  .playControls__volume {
    right: 360px;
  }

  .playControls__soundBadge {
    width: 340px;
  }
}

/** PLAY BUTTON */
.playControl {
  background: url(https://a-v2.sndcdn.com/assets/images/playback/play-c9d2fb.svg) no-repeat 55% center;
  width: 46px;
  margin: 0 6px;
}

.playControl.playing {
  background-image: url(https://a-v2.sndcdn.com/assets/images/playback/pause-b172a6.svg);
  background-position: center center;
}

/** REPEAT CONTROL */
.repeatControl:focus {
  outline: 0;
}

.repeatControl:before,.repeatControl:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 19px;
  height: 46px;
  background-repeat: no-repeat;
  background-position: left center;
  cursor: pointer;
  transition: opacity 200ms;
}

.repeatControl:before {
  background-image: url(https://a-v2.sndcdn.com/assets/images/playback/repeat-track-b45f6e.svg);
  opacity: .75;
}

.repeatControl:hover:before {
  opacity: 1;
}

.repeatControl.m-active:before {
  opacity: 0;
}

.repeatControl:after {
  background-image: url(https://a-v2.sndcdn.com/assets/images/playback/repeat-track-active-525e7e.svg);
  opacity: 0;
}

</style>
    </head>
    <body>

<div class="playControls g-z-index-header m-visible">
     <div class="playControls__inner">
        <div class="playControls__wrapper l-container l-fullwidth">
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
    <div class="jp-type-single">
        <div class="jp-gui jp-interface">
            <div class="jp-controls">
                <button class="jp-play playControl" role="button" tabindex="0">&nbsp;</button>
            </div>
            <div class="jp-progress">
                <div class="jp-seek-bar">
                    <div class="jp-play-bar"></div>
                </div>
            </div>
            <div class="jp-volume-controls">
                <button class="jp-mute" role="button" tabindex="0">mute</button>
                <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                <div class="jp-volume-bar">
                    <div class="jp-volume-bar-value"></div>
                </div>
            </div>
            <div class="jp-time-holder">
                <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
                <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
                <div class="jp-toggles">
                    <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                </div>
            </div>
        </div>
        <div class="jp-details">
            <div class="jp-title" aria-label="title">&nbsp;</div>
        </div>
  </div>
</div>
       </div>
     </div>
   </div>
    </body>
</html>
