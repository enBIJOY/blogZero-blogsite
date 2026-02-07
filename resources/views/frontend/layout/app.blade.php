<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title','Elen - Template')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{('frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{('frontend/css/aos.css')}}">

    <link rel="stylesheet" href="{{('frontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/style.css')}}">
  </head>
  <body>

        <div id="colorlib-page">

            @include('frontend.layout.sidebar')

            <div id="colorlib-main">
                @yield('content')

                @include('frontend.layout.footer')
            </div>
        </div>


    <script src="{{('frontend/js/jquery.min.js')}}"></script>
    <script src="{{('frontend/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{('frontend/js/popper.min.js')}}"></script>
    <script src="{{('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{('frontend/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{('frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{('frontend/js/jquery.stellar.min.js')}}"></script>
    <script src="{{('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{('frontend/js/aos.js')}}"></script>
    <script src="{{('frontend/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{('frontend/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{('frontend/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{('frontend/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{('frontend/js/google-map.js')}}"></script>
    <script src="{{('frontend/js/main.js')}}"></script>
    
  </body>
</html>