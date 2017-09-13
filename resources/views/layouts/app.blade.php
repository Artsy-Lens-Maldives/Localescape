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
    <!-- CSS Files -->
    <link rel="stylesheet" href="/css/all.css" type="text/css">
    <link href='//fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link href="/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    @yield('css')
<body>
    
<div class="page-wrapper">
    @include('partials.header')
    <div id="page-content">
        @yield('content')
    </div>
    @include('partials.footer')
</div>
<!--end page-wrapper-->
<a href="#page-header" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>    

<!-- Script Tags -->
<script type="text/javascript" src="/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyAG39AdqTOn4i_dCVIOFvef5QOwO44zzzo&libraries=places"></script>
<script type="text/javascript" src="/js/infobox.js"></script>
<script type="text/javascript" src="/js/markerclusterer_packed.js"></script>
<script type="text/javascript" src="/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="/js/markerwithlabel_packed.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/js/icheck.min.js"></script>
<script type="text/javascript" src="/js/owl.carousel.js"></script>
<script type="text/javascript" src="/js/masonry.pkgd.min.js"></script>

@yield('js')

<script type="text/javascript" src="/js/maps.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>

<!--[if lte IE 9]>
<script src="/js/ie.js"></script>
<![endif]-->


<!-- <script type="text/javascript">
    ['/js/app.js'].forEach(function(src) {
    var script = document.createElement('script');
    script.src = src;
    script.async = false; 
    document.head.appendChild(script);
    });
</script> -->
</body>
</html>