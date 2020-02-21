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
      <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="./" class="navbar-brand"><img src="{{asset('homepage/img/ITlogo.jpg')}}" alt="" class="img-fluid rounded-circle" width="80" height="60"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                  <!-- Link-->
                  <!--li class="nav-item"> <a href="{{route('register')}}" class="nav-link active">Admin</a></li -->
                  <!-- Link-->
                
              <li class="nav-item dropdown"><a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Register</a>
                <div class="dropdown-menu"><a href="{{route('registration')}}" class="dropdown-item">STUDENT</a></div>
               
              </li>
 </ul><a href="#" data-toggle="modal" data-target="#login" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Admin Login </a>          </div>
        </div>
      </nav>
    </header>
   <!-- Login Modal-->
    <div id="login" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
      <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body p-4 p-lg-5">
            <form action="{{ route('login') }}" method="POST" class="login-form text-left">
              @csrf
              <div class="form-group mb-4">
                  <label for="email">{{ __('E-Mail Address') }}</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="form-group mb-4">
                   <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary"> {{ __('Login') }}
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Section-->
    <section class="hero">
      <div class="container fluid mb-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <img src="{{asset('homepage/img/Developer.svg')}}"  alt="..." class="hero-image img-fluid  d-lg-block">
           
            <div class="row">
              <div class="col-lg-10">
                <p class="lead text-muted mt-4 mb-4">Admin Please enter secret code to proceed to registration</p>
              </div>
            </div>
           <form action="{{route('admin.status')}}" method="POST" class="subscription-form">
               @csrf
              <div class="form-group">
                <input type="text" name="code" placeholder="Please enter code" class="form-control">
                                @if (session('status'))
                      <span class="text-danger pt-2">
                          {{ session('status') }}
                      </span>
                  @endif
                <button type="submit" class="btn btn-primary">Get Started</button>
              </div>
            </form>
          </div>
           <div class="col-md-3">
             
           </div>
               <div id="avatar" class="col-md-3 p-3 p-lg-4 card shadow p-3 mb-5 bg-white rounded mt-4 mr-auto">
               <img src="{{asset('homepage/img/auth.svg')}}"  alt="..." class=" img-fluid  d-lg-block">
                  <h2 class="auth__title">Access your account</h2>
                  <p>Fill in your Index Number to proceed</p>
                     <form action="{{ route('stdlogin') }}" class="login-form text-left" method="POST">
                      @csrf
              <div class="form-group mb-4">
                <label class="sr-only">IndexNumber</label>
<input id="indexnumber" type="text" class="form-control @error('indexnumber') is-invalid @enderror" name="indexnumber" value="{{ old('indexnumber') }}" required autocomplete="indexnumber" autofocus>

                                @error('indexnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary"> {{ __('Student Login') }}
                </button>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Intro Section-->
   
    
   
    
   
    
    
    <!-- JavaScript files-->
    <script src="{{asset('homepage/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('homepage/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('homepage/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('homepage/vendor/lightbox2/js/lightbox.js')}}"></script>
    <script src="{{asset('homepage/js/front.js')}}"></script>
    <script src="{{asset('homepage/js/custom.js')}}"> </script>
  </body>
</html>