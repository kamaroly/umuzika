<div id="track{!! $id !!}" class="song-container">
    <div class="song-art">
        <a href="#" rel="loadpage">
            <img src="{!! url('assets/online/css/images/icons/filters/tracks.png') !!}" id="song-art{!! $id !!}">
            </a>
        </div>
        <div class="song-top">
            <div class="song-timeago">
                <a href="http://dev.umuzika.com/index.php?a=track&amp;id=13" rel="loadpage">
                    <span id="time{!! $id !!}">
                        <div class="timeago" title="2015-07-31T07:20:22+00:00">
                        3 months ago
                        </div>
                    </span>
                </a>
            </div>
            <div data-track-name="{{ route('files.get',['filename'=>$song->filename]) }}" data-track-id="{!! $id !!}" id="play{!! $id !!}" class="track song-play-btn"></div>
            <div class="song-titles">
                <div class="song-author">
                    <a onmouseover="profileCard(2, 13, 0, 0);" onmouseout="profileCard(0, 0, 0, 1);" onclick="profileCard(0, 0, 1, 1);" 
                    href="#" rel="loadpage">{!! $song->filename !!}</a>
                </div>
                <div class="song-tag">
                    <a href="#" rel="loadpage">{!! $song->filename !!}</a>
                </div>
                <div class="song-title">
                    <a href="#" id="song-url{!! $id !!}" rel="loadpage">
                        <div id="song-name{!! $id !!}">Ninde</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="player-controls">
            <div id="song-controls{!! $id !!}">
                <div id="jp_container_123" class="jp-audio">
                    <div class="jp-type-single">
                        <div class="jp-gui jp-interface">
                            <div class="jp-progress">
                                <div class="jp-seek-bar">
                                    <div class="jp-play-bar"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="track-actions-container">
            <div class="track-actions">
                <div class="track-actions-content" id="track-action{!! $id !!}">
                    <div class="track-buttons-container">
                        <div class="like-button" onclick="connect_modal()" id="doLike{!! $id !!}">
                            <span class="action-text">Like</span>
                        </div>
                        <div class="playlist-button" onclick="connect_modal()">
                            <span class="action-text">Add</span>
                        </div>
                        <div class="share-button" onclick="share({!! $id !!}, 1)">
                            <span class="action-text">Share</span>
                        </div>
                        <span id="privacy13"></span>
                    </div>
                    <div class="track-stats">
                        <a href="#" rel="loadpage">
                            <div class="counter views_counter" title="Listened 4 times">4</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>