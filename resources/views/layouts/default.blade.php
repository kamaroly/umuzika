<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Umuzika.com</title>
{{-- <link rel="shortcut icon" href="{!! url('favicon.ico') !!}" /> --}}
 
 @include('partials.styles')
 @include('partials.meta')
 @include('partials.scripts')
</head>
<body>
    @include('partials.loading_bar')
    @include('partials.top_bar')
    <div class="topbar_margin"></div>
    <div id="content">
       @yield('content')
    </div>
    
 @include('partials.main-player')
</body>
</html>