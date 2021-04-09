
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
    <!-- Vector CSS -->
    <link href="{{ URL::to('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="{{ URL::to('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{ URL::to('assets/css/animate.css" rel="stylesheet') }}" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{ URL::to('assets/css/sidebar-menu.css') }}" rel="stylesheet"/>

</head>

    <body class="bg-theme bg-theme1">
        <!-- Start wrapper-->
        <div id="wrapper">
            <!--Start sidebar-wrapper-->
            <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
                <div class="brand-logo">
                    <a href="index.html">
                        <img src="assets/images/user.jpg" class="logo-icon" alt="logo icon">
                        <h5 class="logo-text">SOENG SOUY</h5>
                    </a>
                </div>
                <ul class="sidebar-menu do-nicescrol">
                    <li class="sidebar-header">MAIN NAVIGATION</li>
                    <li>
                        <a href="index.html">
                            <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons.html">
                            <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms.html">
                            <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables.html">
                        <i class="zmdi zmdi-grid"></i> <span>Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                            <small class="badge float-right badge-light">New</small>
                        </a>
                    </li>
                </ul>
            </div>
            <!--End sidebar-wrapper-->
    
            <!--Start topbar header-->
            <header class="topbar-nav">
                <nav class="navbar navbar-expand fixed-top">
                    <ul class="navbar-nav mr-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link toggle-menu" href="javascript:void();">
                                <i class="icon-menu menu-icon"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <form class="search-bar">
                                <input type="text" class="form-control" placeholder="Enter keywords">
                                <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                            </form>
                        </li>
                    </ul>
         
                    <ul class="navbar-nav align-items-center right-nav-link">
                        <li class="nav-item dropdown-lg">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                        </li>
                        <li class="nav-item dropdown-lg">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                        </li>
                        <li class="nav-item language">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                                <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                                <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                                <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                                <span class="user-profile"><img src="assets/images/user.jpg" class="img-circle" alt="user avatar"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item user-details">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"> <img src="assets/images/user.jpg" class="logo-icon" alt="logo icon"></div>
                                            <div class="media-body">
                                                <h6 class="mt-2 user-title">Soeng Souy</h6>
                                                <p class="user-subtitle">soengsouy@gmail.com</p>
                                            </div>
                                        </div>
                                    </a>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><a href="{{ route('profile_user') }}"> <i class="zmdi zmdi-face"></i> Profile</a></li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><a href="{{ route('logout') }}"><i class="icon-power mr-2"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
            <!--End topbar header-->
            @yield('content')
        </div><!--End content-wrapper-->
        <!--Start Back To Top Button-->
        <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
        <!--End Back To Top Button-->
        
        <!--Start footer-->
        <footer class="footer">
            <div class="container">
                <div class="text-center">
                    Copyright © 2021 Dahboard Admin
                </div>
            </div>
        </footer>
        <!--End footer-->
        
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
    </div><!--End wrapper-->
    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::to('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ URL::to('assets/js/sidebar-menu.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ URL::to('assets/js/app-script.js') }}"></script>

    <!-- simplebar js -->
    <script src="{{ URL::to('assets/plugins/simplebar/js/simplebar.js') }}"></script>

    <script src="{{ URL::to('assets/js/jquery.loading-indicator.js') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ URL::to('assets/js/app-script.js') }}"></script>
    <!-- Chart js -->
    <script src="{{ URL::to('assets/plugins/Chart.js/Chart.min.js') }}"></script>
    <!-- Index js -->
    <script src="{{ URL::to('assets/js/index.js') }}"></script>
    
</body>
</html>



