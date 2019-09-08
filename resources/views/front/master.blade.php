<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tasbaqa Market</title>
    <link rel="stylesheet" href="{{ url ('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url ('css/animated.css') }}">
    <link rel="stylesheet" href="{{ url ('css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ url ('css/ui.css') }}">
    <link rel="stylesheet" href="{{ url ('css/jquery.mmenu.all.css') }}">
    <link rel="stylesheet" href="{{ url ('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url ('css/style.css') }}">
    <link rel="stylesheet" href="{{ url ('css/leo.css') }}">
    <link rel="stylesheet" href="{{ url ('css/front.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i;Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>
<body>

    
    <!-- End .banner -->
    <div class="main-content">
       @yield('content')
      
    </div>


    @include('front.footer')


    <script type="text/javascript" src="{{ url ('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url ('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url ('js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ url ('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ url ('js/jquery.appear.min.js') }}"></script>
    <script type="text/javascript" src="{{ url ('js/jquery.countTo.js') }}"></script>
    <script type="text/javascript" src="{{ url ('js/ui.js') }}"></script>
    <script type="text/javascript" src="{{ url ('js/jquery.bxslider.min.js') }}"></script>
    <script type="text/javascript" src="{{ url ('js/jquery.mmenu.all.min.js') }}"></script>
    <script type="text/javascript" src="{{ url ('js/chosen.jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url ('js/jquery.countdown.js') }}"></script>
    <script type="text/javascript" src="{{ url ('js/frontend.js') }}"></script>
</body>
</html>