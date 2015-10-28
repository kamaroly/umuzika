<!DOCTYPE>
<html>
    <head>
 
        <!--Meta tags-->
        <meta charset="utf-8">
 
        <!--Title-->
        <title></title>
         
        <!--Stylesheets-->
        <link rel="stylesheet" href="/assets/css/audio-player.css">
 
        <!--jQuery-->
         <script src="/assets/jquery.min.js"></script>
        <script src="/assets/jplayer/dist/jPlayer/jquery.jplayer.js"></script>
         
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
     
    </head>
<body>
 <!--container for everything-->
<div id="jp_container_1" class="jp-audio">
    <!--container in which our video will be played-->
    <div id="jquery_jplayer_1" class="jp-jplayer"></div>
    <!--main containers for our controls-->
    <div class="jp-gui">
        <div class="jp-interface">
            <div class="jp-controls-holder">
                <!--play and pause buttons-->
                <a href="javascript:;" class="jp-play" tabindex="1">play</a>
                <a href="javascript:;" class="jp-pause" tabindex="1">pause</a>
                <span class="separator sep-1"></span>
                <div class="jp-current-time"></div>
                <!--progress bar-->
                <div class="jp-progress">
                    <div class="jp-seek-bar">
                        <div class="jp-play-bar">
                            <span></span>
                        </div>
                    </div>
                </div>
                <!--time notifications-->
        {{-- 
                <span class="time-sep">/</span> --}}
        
                <div class="jp-duration"></div>
                <span class="separator sep-2"></span>
                <a href="javascript:;" class="jp-repeat"  tabindex="0">{{-- repeat --}}</a>
                <span class="separator sep-3"></span>
                <!--mute / unmute toggle-->
                <a href="javascript:;" class="jp-mute" tabindex="2" title="mute">
                    <!-- mute-->
                </a>
                <a href="javascript:;" class="jp-unmute" tabindex="2" title="unmute">unmute</a>
                <!--volume bar-->
                <div class="jp-volume-bar">
                    <div class="jp-volume-bar-value">
                        <span class="handle"></span>
                    </div>
                </div>
                <span class="separator sep-2"></span>
                <a href="/peace_zone/adele-hello-paul-damixie-remix" class="avatar sc-media-image" tabindex="-1">
                    <div class="image readOnly customImage" style="height: 30px; width: 30px;">
                        <span style="background-image:url(https://i1.sndcdn.com/artworks-000133739170-cn0x8t-t50x50.jpg);width:30px;height:30px;" class="sc-artwork sc-artwork-placeholder-7 image__full" aria-label="Adele - Hello (Paul Damixie Remix)" aria-role="img"></span>
                    </div>
                </a>
                <div class="titleContextContainer">
                    <a href="" class="context sc-link-light sc-truncate" title="Playing from ">Playing from </a>
                    <a href="/peace_zone/adele-hello-paul-damixie-remix" class="title sc-truncate" title="Adele - Hello (Paul Damixie Remix)">
                        <span class="sc-visuallyhidden">Current track: Adele - Hello (Paul Damixie Remix)</span>
                        <span aria-hidden="true">Adele - Hello (Paul Damixie Remix)</span>
                    </a>
                </div>
            </div>
            <!--end jp-controls-holder-->
        </div>
        <!--end jp-interface-->
    </div>
    <!--end jp-gui-->
    <!--unsupported message-->
    <div class="jp-no-solution">
        <span>Update Required</span>
        Here's a message which will appear if the video isn't supported. A Flash alternative can be used here if you fancy it.
    
    </div>
</div>
<!--end jp_container_1-->


<!--instantiate-->
<script type="text/javascript" src="/assets/js/umuzika.player.js"></script>
</body>
</html>