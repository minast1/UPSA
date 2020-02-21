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
        <div class="container"><a href="./" class="navbar-brand"><img src="{{asset('homepage/img/logo.svg')}}" alt="" class="img-fluid"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                  <!-- Link-->
                  <li class="nav-item"> <a href="{{route('landingPage')}}" class="nav-link active">Home</a></li>
                  <!-- Link-->
                </ul><a href="#" data-toggle="modal" data-target="#login" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Programe Table </a>
                     </div>
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
          <div class="modal-body p-4 p-lg-5 mt-4">
               <table class="table table-bordered table-striped">
  <thead class="thead-dark">
    <tr>
       <th scope="col">Level</th>
      <th scope="col">Session</th>
      <th scope="col">Qualification</th>
      <th scope="col">Code</th>
    </tr>
  </thead>
  <tbody>
    @foreach($programe as $prog)
    <tr>
      <td>{{$prog->level}}</td>
      <td>{{$prog->session}}</td>
      <td>{{$prog->qualification}}</td>
      <td>{{$prog->code}}</td>
    </tr>
    @endforeach
  </tbody>
</table>


          </div>
        </div>
      </div>
    </div>
    <!-- Hero Section-->
    <section class="hero">
      <div class="container">
        <div class="row justify-content-center">
          
           <div class="col-md-8">
              <div  class="card shadow p-3 mb-5 bg-white rounded mt-4">
               
                
                       <div class="card-body">
                    <form method="POST" action="{{ route('studentregister') }}">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="name">{{ __('Name') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group mb-4">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group mb-4">
                            <label for="text">{{ __('Index Number') }}</label>

                                <input id="indexnumber" type="indexnumber" class="form-control @error('indexnumber') is-invalid @enderror" name="indexnumber" required autocomplete="new-password">

                                @error('indexnumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group mb-4">
                            <label for="text">{{ __('Programe Code') }}</label>

                                <select class="custom-select" name="code" required>
                                    <option value="">Open this select menu</option>
                                    @foreach($programe as $prog)
                                    <option value="{{$prog->id}}">{{$prog->code}}</option>
                                   @endforeach
                                  </select>
                                   @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  <div class="form-text text-danger">Please reference the program table to know your group code</div>           
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                   
          </div>
           </div>

           
          
        </div>
      </div>
    </section>

    <!-- JavaScript files-->
    <script src="{{asset('homepage/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('homepage/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('homepage/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('homepage/vendor/lightbox2/js/lightbox.js')}}"></script>
    <script src="{{asset('homepage/js/front.js')}}"></script>
    <script src="{{asset('homepage/js/custom.js')}}"> </script>
  </body>
</html>