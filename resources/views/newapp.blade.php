<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Appton - Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('homepage/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('homepage/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Poppins-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600">
    <!-- Lightbox-->
    <link rel="stylesheet" href="{{asset('homepage/vendor/lightbox2/css/lightbox.css')}}">
    <!-- Custom font icons-->
    <link rel="stylesheet" href="{{asset('homepage/css/fontastic.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('homepage/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('homepage/img/favicon.png')}}">
    
     <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>


    <!-- JavaScript files-->
    <script src="{{asset('homepage/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('homepage/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('homepage/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('homepage/vendor/lightbox2/js/lightbox.js')}}"></script>
    <script src="{{asset('homepage/js/front.js')}}"></script>
    <script src="{{asset('homepage/js/custom.js')}}"> </script>
  </head>
  <body>
     @inertia   
  </body>
</html>