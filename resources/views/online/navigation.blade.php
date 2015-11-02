<div class="topbar">
	<div class="header">
		<a href="http://dev.umuzika.com/index.php?a=welcome" rel="loadpage"><div class="logo"></div></a>
		<a href="http://dev.umuzika.com/index.php?a=explore" class="menu-button" rel="loadpage" id="explore-button">Explore</a>
		<div class="search-input"><input type="text" id="search" placeholder="Search..." autocomplete="off"></div>

		{{-- <div id="sound-player" class="jp-jplayer"></div>
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
							<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="Repeat Off" onclick="repeatSong(0)">repeat off</a></li>
							<div style="display: none;" id="repeat-song">0</div>
					</ul>
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
			</div> --}}
		</div>
		<a onclick="connect_modal()" class="menu-btn" title="Connect">Connect</a>
	</div>
	<div class="search-container"></div>
	<div class="notification-container">
		<div class="notification-content">
			<div class="notification-inner">
				<span id="global_page_url"><a href="http://dev.umuzika.com/index.php?a=notifications" rel="loadpage">View More Notifications</a></span>
				<span id="chat_page_url"><a href="http://dev.umuzika.com/index.php?a=notifications&filter=chats" rel="loadpage">View More Messages</a></span>
				<a onclick="showNotification('close')" title="Close Notifications"><div class="close_btn"></div></a>
			</div>
			<div id="notifications-content"></div>
			<div class="notification-row"><div class="notification-padding"><a href="http://dev.umuzika.com/index.php?a=settings&b=notifications" rel="loadpage">Notifications Settings</a></div></div>
		</div>
	</div>
</div>