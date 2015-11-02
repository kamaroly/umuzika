<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Ninde - Umuzika</title>
	@include('online.styles')
	@include('online.meta')
	@include('online.scripts')
</head>
<body>
<div id="loading-bar"><dd></dd><dt></dt></div>
	@include('online.navigation')
<div class="topbar_margin"></div>
<div id="content">
	<div class="row-body content-track">
		<div class="body-content">
		<?php $id = $songs->count(); ?>
		@foreach ($songs as $song)
			 @include('online.track',compact('song','id'))
			 <?php $id--; ?>
		@endforeach
		</div>
	</div>
	@include('online.track-interface')
	@include('online.main-player')
</body>
</html>