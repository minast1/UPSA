<template>
	<div>
	
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="./" class="navbar-brand"><img src="" alt="" class="img-fluid rounded-circle"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">Menu<i class="fa fa-bars ml-2"></i></button>
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                
                  <li class="nav-item"> <a href="index.html" class="nav-link active">Home</a></li>
               
                
              <li class="nav-item dropdown"><a id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Register</a>
                <div class="dropdown-menu"><a href="" class="dropdown-item">STUDENT</a></div>
              </li>
 </ul><a href="#" data-toggle="modal" data-target="#login" class="btn btn-primary navbar-btn ml-0 ml-lg-3">Admin Login </a>          </div>
        </div>
      </nav>
    </header>
  
    <div id="login" tabindex="-1" role="dialog" aria-hidden="true" class="modal fade bd-example-modal-lg">
      <div role="document" class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body p-4 p-lg-5">
            <form  method="POST" class="login-form text-left">
              @csrf
              <div class="form-group mb-4">
                  <label for="email">{{ __('E-Mail Address') }}</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus>

                                
                                  
              </div>

              <div class="form-group mb-4">
                   <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                              
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
    
    <section class="hero">
      <div class="container fluid mb-5">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <img src=""  alt="..." class="hero-image img-fluid  d-lg-block">
           
            <div class="row">
              <div class="col-lg-10">
                <p class="lead text-muted mt-4 mb-4">Lorem ipsum dolor sit amet, consectetur. Eiusmod tempor incididunt.</p>
              </div>
            </div>
           <form action="#" class="subscription-form">
              <div class="form-group">
                <input type="text" name="email" placeholder="Please enter secret code to proceed to registration" class="form-control">
                <button type="submit" class="btn btn-primary">Get Started</button>
              </div>
            </form>
          </div>
           <div class="col-md-3">
             
           </div>
               <div id="avatar" class="col-md-3 p-3 p-lg-4 card shadow p-3 mb-5 bg-white rounded mt-4 mr-auto">
               <img src=""  alt="..." class=" img-fluid  d-lg-block">
                  <h2 class="auth__title">Access your account</h2>
                  <p>Fill in your Index Number to proceed</p>
                     <form action="" class="login-form text-left" method="POST">
                
              <div class="form-group mb-4">
                <label class="sr-only">IndexNumber</label>
<input id="indexnumber" type="text" class="form-control @error('indexnumber') is-invalid @enderror" name="indexnumber" required autocomplete="indexnumber" autofocus>
            </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary"> {{ __('Student Login') }}
                </button>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </section>
 
	</div>
     

</template>

<script>
	export default {

		data () {
			return {
               form: {
                 email: '',
                 password: '',
			},
			   header : true ,
			   footer : true ,
		}
    },
		props : {
			attributes : Object 
		},
        methods: {
             submit () {
             	this.$inertia.post('/userlogin', this.form)
             }

     },
		computed : {
			showAlert () {
  			 return this.name.length > 4 ? true : false
  		    }
   
		}
	}

</script>