$(function() {
	$("body").on("click", "a[rel='loadpage']", function(e) {
		// Get the link location that was clicked
		
		startLoadingBar();
		pageurl = $(this).attr('href');
		
		// Replace the path of the url from index to the path with raw content
		var custom = pageurl;
		var custom = custom.replace('index', 'page');
		
		// Request the page
		$.ajax({url:custom,success: function(data) {
			// Show the content
			$('#content').html(data);
			// Stop the loading bar
			stopLoadingBar();
			// Set the new title tag
			document.title = $('#page-title').html();
			// Scroll the document at the top of the page
			$(document).scrollTop(0);
			// Reload functions
			reload();
		}});
		
		// Store the url to the last page accessed
		if(pageurl != window.location){
			window.history.pushState({path:pageurl}, '', pageurl);	
		}
		return false;
	});
});

// Override the back button to get the ajax content via the back content */
$(window).bind('popstate', function(ev) {
	if (navigator.userAgent.match(/(iPad|iPhone|iPod|Android)/g) && !window.history.ready && !ev.originalEvent.state) {
		return; // Work around for WebKit devices [prevent executing a popstate upon page load (The bug was fixed in Chrome 35+, but not on the mobile browser)]
	}
	if (navigator.userAgent.match(/AppleWebKit/) && !navigator.userAgent.match(/Chrome/) && !window.history.ready && !ev.originalEvent.state) {
		return; // Work around for WebKit devices [prevent executing a popstate upon page load (The bug was fixed in Chrome 35+, but not on the mobile browser)]
	}
	
	startLoadingBar();
	// Replace the path of the url from index to the path with raw content
	var custom = location.href;
	
	// Check whether the page contains index.php or not, if it doens't then add one (prevent breaking when loading website without index.php
	if(custom.indexOf("index.php") == -1) {
		var custom = location.href + '/index.php';
	}
	var custom = custom.replace('index', 'page');
	
	// Request the page
	$.ajax({url:custom,success: function(data){
		// Show the content
		$('#content').html(data);
		// Stop the loading bar
		stopLoadingBar();
		// Set the new title tag
		document.title = $('#page-title').html();
		// Scroll the document at the top of the page
		$(document).scrollTop(0);
		// Reload functions
		reload();
	}});
});

$(document).ready(function() {
	// Set the player volume
	if(getCookie("volume") == "") {
		player_volume = 0.80;
		setCookie("volume", 0.80, "365");
	} else {
		player_volume = getCookie("volume");
	}
	$("#sound-player").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				
			});
		},
		cssSelectorAncestor: '#sound-container',
		swfPath: "http://dev.umuzika.com/themes/sound/js",
		supplied: "mp3",
		wmode: "window",
		volume: player_volume,
		smoothPlayBar: true,
		keyEnabled: true
	});
});

function playSong(song, id) {
	// If the user is on a mobile device, open the track in a new tab rather than playing it on the page
	/*if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
		window.location = 'http://dev.umuzika.com/uploads/tracks/'+song;
		return false;
	}*/
	
	// Remove the current-song class (if any)
	$('.current-song').removeClass('current-song');
	
	// Show the previously hidden Play button (if any)
	$('.current-play').show();
	$('.current-play').removeClass('current-play');
	
	// Remove the active player if exist and set the ghost player
	$('.current-seek').html($('#sound_ghost_player').html());
	
	// Remove the active player class
	$('.current-seek').removeClass('current-seek');
	
	// Escape the ID (contains dots) http://api.jquery.com/category/selectors/
	var parsedId = song.replace('.', '\\.');
	
	// Add the current song class
	$('#track'+id).addClass('current-song');
	// Add current play class to the Play button and hide it
	$('#play'+id).addClass('current-play');
	$('.current-play').hide();
	
	// Get the current song name and url
	var trackUrl = $('#song-url'+id).attr('href');
	var songName, shortSongName = songName = $('#song-name'+id).html();
	
	if (songName.length > 30) {
		var shortSongName = $('#song-name'+id).html().substr(0, 30)+'...';
	}
	
	$('#sw-song-name').html($('<a>', {text: shortSongName, href: trackUrl, title: songName, rel: 'loadpage'}));
	
	// Show the time holder when a song starts playing
	$('.jp-audio .jp-time-holder').show();
	
	// Destroy the player if any is active
	$("#sound-player").jPlayer("destroy");
	
	// Add the active player to the current song
	$("#song-controls"+id).html($("#seek-bar-song").html());
	
	// Add the active player class to the current song
	$("#song-controls"+id).addClass('current-seek');
	
	// Set the play/pause button position (this is needed for mobile view in order for the play/pause button to be at the same height with the initial play button)
	$('#track'+id+' .jp-play , #track'+id+' .jp-pause').css({ 'margin-top' : '-' + $('.song-top', '#track'+id).outerHeight() + 'px' });
	
	// Get the track extension
	var ext = getExtension(song);
	
	// Determine prev next buttons
	prevnext();
	$("#sound-player").jPlayer({
		ready: function (event) {
			if(ext == 'mp3') {
				$(this).jPlayer("setMedia", {
					mp3: 'http://dev.umuzika.com/uploads/tracks/'+song
				}).jPlayer("play");
			} else if(ext == 'm4a') {
				$(this).jPlayer("setMedia", {
					m4a: 'http://dev.umuzika.com/uploads/tracks/'+song				
				}).jPlayer("play");
			}
		},
		cssSelectorAncestor: '#sound-container',
		ended: function () {
			$.ajax({
				type: "POST",
				url: "http://dev.umuzika.com/requests/add_view.php",
				data: "id="+id, 
				cache: false,
				success: function(html) {
				
				}
			});
			
			// If repeat is not turned on, move to the next song
			if($('#repeat-song').html() == 0) {
				$('.current-seek').html($('#sound_ghost_player').html());
				$('.current-play').show();
				nextSong(id);
			}
		},
		/*error: function() {
			// If the track fails to play for whatever reasons, hide it
			$('#track'+id).fadeOut();
			nextSong(id);
		},*/
		errorAlerts: true,
		swfPath: "http://dev.umuzika.com/themes/sound/js",
		supplied: ext,
		wmode: "window",
		volume: getCookie("volume"),
		smoothPlayBar: true,
		solution: "html, flash",
		keyEnabled: true
	});
};
