<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Local Escape</title>

    <link href="{{ url('css/admin.css') }}" rel="stylesheet">
    
  </head>

  <body class="login" style="overflow: hidden; background-image: url('/img/background/image 1.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-position: center; ">
    @yield('content')

    <script type="text/javascript" src="/js/jquery-2.2.1.min.js"></script>
    <script src="{{ url('js/admin.js') }}"></script>
    @yield('js')
    <script>
      $(function centerTo () {
          $('.className').css({
              'position' : 'absolute',
              'left' : '50%',
              'top' : '50%',
              'margin-left' : -$('.className').outerWidth()/2,
              'margin-top' : -$('.className').outerHeight()/2
          });
      });
    </script>
  </body>
</html>

