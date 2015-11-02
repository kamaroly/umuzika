<div id="sound-container" class="jp-audio top-player">
			<div class="jp-type-single">
				<div class="jp-gui jp-interface">
					<ul class="jp-controls">
						<li><a id="prev-button" class="prev-button" onclick="prevnext(1)"></a></li>
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1" style="display: none;">pause</a></li>
						<li><a id="next-button" class="next-button" onclick="prevnext(2)"></a></li>
						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="Mute">mute</a></li>
						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="Unmute" style="display: none;">unmute</a></li>
					</ul>
					<ul class="jp-toggles">
							<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="Repeat" onclick="repeatSong(1)">repeat</a></li>
							<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="Repeat Off" onclick="repeatSong(0)" style="display: none;">repeat off</a></li>
							<div style="display: none;" id="repeat-song">0</div>
						</ul>
					<div class="topbar-song-name" id="sw-song-name"><a href="http://dev.umuzika.com/index.php?a=track&amp;id=12" title="Praise Break - Sat 9-29-12 Mixdown by dj b.cuz" rel="loadpage">Praise Break - Sat 9-29-12 Mix...</a></div>
					<div class="jp-progress">
						<div class="jp-seek-bar" style="width: 100%;">
							<div class="jp-play-bar" style="width: 0.45467%;"></div>
						</div>
					</div>
					<div class="jp-volume-bar" onclick="playerVolume()">
						<div class="jp-volume-bar-value" style="width: 29%;"></div>
					</div>
					<div class="jp-time-holder" style="display: block;">
						<div class="jp-current-time">00:07</div>
						<div class="jp-duration">27:15</div>
					</div>
				</div>
				<div class="jp-no-solution" style="display: none;"></div>
			</div>
		</div>
	
<script type="text/javascript" src="/assets/js/umuzika.player.js"></script>