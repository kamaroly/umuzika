<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Umuzika.com</title>
<link rel="shortcut icon" href="{$url}/favicon.ico" />
<link href="{!! url('assets/css/umuzika.css') !!}" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

<meta name="description" content=".....">
<script type="text/javascript" src="{!! url('assets/jquery.min.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/jquery.timeago.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/functions.js') !!}"></script>
 <script src="{!! url('assets/jplayer/dist/jPlayer/jquery.jplayer.js') !!}"></script>
<script type="text/javascript" src="{!! url('assets/js/umuzika.page.js') !!}"></script>
</head>
<body>
	@include('partials.loading_bar')

	@include('partials.top_bar')

	<div class="topbar_margin"></div>
	<div id="content">
		@include('tracks.item')
	</div>

 <script src="{!! url('assets/jplayer/dist/jPlayer/jquery.jplayer.js') !!}"></script>
<link rel="stylesheet" href="/assets/css/audio-player.css">
 @include('partials.main-player')
</body>
</html>