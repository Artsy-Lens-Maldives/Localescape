<!DOCTYPE HTML>
<html>
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Travel, Agency, Hotels, Cheap" />
    <meta name="description" content="Localescape - cheapest travel agency in maldives">
    <meta name="author" content="Mohamed Athik">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Local Escape</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="Localescape">
    <meta name="application-name" content="Localescape">
    <meta name="theme-color" content="#ffffff">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
    <script src="https://use.fontawesome.com/9866e075b3.js"></script>
    @yield('css')
    <style type="text/css">
        .slick-prev:before, .slick-next:before{
            color: #3498db;
        }
    </style>
</head>
<body>
    <div id="root" class="global-wrap">
        @include('partials.header')
            @yield('content')
        <div class="gap"></div>
        @include('partials.footer')
    </div>
    <!-- SCRIPTS -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    @yield('js')
</body>
</html>