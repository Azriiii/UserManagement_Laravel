
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>soengsouy.com</title>
    <!-- loader-->
    <link href="{{ URL::to('assets/css/pace.min.css') }}" rel="stylesheet"/>
    <script src="assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="{{ URL::to('assets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href="{{ URL::to('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ URL::to('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{ URL::to('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Custom Style-->
    <link href="{{ URL::to('assets/css/app-style.css') }}" rel="stylesheet"/>
</head>

<body class="bg-theme bg-theme1">
       <!-- start loader -->
       <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
       <!-- end loader -->
           <!-- Start wrapper-->
           <div id="wrapper">
               <div class="card card-authentication1 mx-auto my-4">
                   <div class="card-body">
                       <div class="card-content p-2">
                           <div class="text-center">
                               <img src="{{ URL::to('assets/images/logo-icon.png') }}" alt="logo icon">
                           </div>
                           <div class="card-title text-uppercase text-center py-3">Reset Passwor</div>
                           <form method="POST" action="/reset-password" class="md-float-material">
                               @csrf
                               <input type="hidden" name="token" value="{{ $token }}">
                               <div class="form-group">
                                   <label for="exampleInputEmailId" class="sr-only">Email</label>
                                   <div class="position-relative has-icon-right">
                                       <input type="text" id="exampleInputEmailId" class="form-control input-shadow @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">
                                       <div class="form-control-position">
                                           <i class="icon-envelope-open"></i>
                                       </div>
                                       @error('email')
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                           </span>
                                       @enderror
                                   </div>
                               </div>
                   
                               <div class="form-group">
                                   <label for="exampleInputPassword" class="sr-only">Password</label>
                                   <div class="position-relative has-icon-right">
                                       <input type="password" id="exampleInputPassword" class="form-control input-shadow @error('password') is-invalid @enderror" name="password" placeholder="Choose Password">
                                       <div class="form-control-position">
                                           <i class="icon-lock"></i>
                                       </div>
                                       @error('password')
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                           </span>
                                       @enderror
                                   </div>
                               </div>
   
                               <div class="form-group">
                                   <label for="exampleInputPassword" class="sr-only">Confirm Password</label>
                                   <div class="position-relative has-icon-right">
                                       <input type="password" id="exampleInputPassword" class="form-control input-shadow" name="password_confirmation" placeholder="Choose Confirm Password">
                                       <div class="form-control-position">
                                           <i class="icon-lock"></i>
                                       </div>
                                   </div>
                               </div>
   
                               <div class="form-group">
                                   <div class="icheck-material-white">
                                       <input type="checkbox" id="user-checkbox" checked="" />
                                       <label for="user-checkbox">I Agree With Terms & Conditions</label>
                                   </div>
                               </div>
                   
                               <button type="submit" class="btn btn-light btn-block waves-effect waves-light">Reset Password</button>
                               <div class="text-center mt-3">Sign Up With</div>
                       
                               <div class="form-row mt-4">
                                   <div class="form-group mb-0 col-6">
                                       <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
                                   </div>
                                   <div class="form-group mb-0 col-6 text-right">
                                       <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
                   <div class="card-footer text-center py-3">
                       <p class="text-warning mb-0">Already have an account? <a href="{{ route('login') }}"> Sign In here</a></p>
                   </div>
               </div>
           
               <!--Start Back To Top Button-->
               <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
               <!--End Back To Top Button-->
           
               <!--start color switcher-->
               <div class="right-sidebar">
                   <div class="switcher-icon">
                       <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
                   </div>
                   <div class="right-sidebar-content">
   
                   <p class="mb-0">Gaussion Texture</p>
                   <hr>
                   
                   <ul class="switcher">
                       <li id="theme1"></li>
                       <li id="theme2"></li>
                       <li id="theme3"></li>
                       <li id="theme4"></li>
                       <li id="theme5"></li>
                       <li id="theme6"></li>
                   </ul>
   
                   <p class="mb-0">Gradient Background</p>
                   <hr>
                   
                   <ul class="switcher">
                       <li id="theme7"></li>
                       <li id="theme8"></li>
                       <li id="theme9"></li>
                       <li id="theme10"></li>
                       <li id="theme11"></li>
                       <li id="theme12"></li>
                       <li id="theme13"></li>
                       <li id="theme14"></li>
                       <li id="theme15"></li>
                   </ul>
           
               </div>
           </div>
           <!--end color switcher-->
       
       </div><!--wrapper-->
    
    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ URL::to('assets/js/sidebar-menu.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ URL::to('assets/js/app-script.js') }}"></script>
    
</body>
</html>

