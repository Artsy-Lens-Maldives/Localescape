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
    <link href="/css/rest.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/app.css" type="text/css">
</head>
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
    <script type="text/javascript">
        [
            'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js',
            'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js',
            'https://maps.google.com/maps/api/js?key=AIzaSyAG39AdqTOn4i_dCVIOFvef5QOwO44zzzo&libraries=places',
            '/js/infobox.js',
            '/js/markerclusterer_packed.js',
            '/js/richmarker-compiled.js',
            '/js/markerwithlabel_packed.js',
            'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js',
            'https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js',
            '/js/maps.js',
            '/js/app.js'
        ].forEach(function(src) {
        var script = document.createElement('script');
        script.src = src;
        script.async = false; 
        document.head.appendChild(script);
        });
    </script>
</body>
</html>