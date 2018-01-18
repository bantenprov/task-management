<!DOCTYPE html>
<html lang="en">
<!--
	Bent - Bootstrap Landing Page Template by Dcrazed
	Site: https://dcrazed.com/bent-app-landing-page-template/
	Free for personal and commercial use under GNU GPL 3.0 license.
-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Management</title>
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,800,900,400,300' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="{{asset('bent/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Owl Carousel Assets -->
    <link href="{{asset('bent/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('bent/css/owl.theme.css')}}" rel="stylesheet">


    <!-- Pixeden Icon Font -->
    <link rel="stylesheet" href="{{asset('bent/css/Pe-icon-7-stroke.css')}}">

    <!-- Font Awesome -->
    <link href="{{asset('bent/css/font-awesome.min.css')}}" rel="stylesheet">


    <!-- PrettyPhoto -->
    <link href="{{asset('bent/css/prettyPhoto.css')}}" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('img/favicon.ico')}}" />

    <!-- Style -->
    <link href="{{asset('bent/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('bent/css/animate.css')}}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{asset('bent/css/responsive.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- PRELOADER -->
    <div class="spn_hol">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

 <!-- END PRELOADER -->

 <!-- =========================
     START ABOUT US SECTION
============================== -->
    <section class="header parallax home-parallax page" id="HOME">
        <h2></h2>
        <div class="section_overlay">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#" style="color:white">
                            <img src="{{asset('bent/images/logo.png')}}" alt="Logo" height="50" width="35">
                            Provinsi Banten
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- NAV -->
                            <li><a href="#HOME">HOME</a> </li>
                            <li><a href="#ABOUT">ABOUT </a> </li>                       
                             @if (Route::has('login'))                                
                                    @if (Auth::check())
                                        <li><a href="{{ route('taskManagementIndex') }}">DASHBOARD </a> </li>
                                    @else
                                        <li><a href="{{ route('login') }}">LOGIN </a> </li>
                                    @endif
                            @endif
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container- -->
            </nav>
            
            <div class="container home-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo text-center">
                                <!-- LOGO -->
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="home_text">
                            <!-- TITLE AND DESC -->
                            <h1>Task Management</h1>
                            <p>Manage tasks and projects anywhere with Task Management.</p>

                            <div class="download-btn">
                            <!-- BUTTON -->
                                @if (Route::has('login'))                                
                                    @if (Auth::check())
                                        <a class="btn home-btn wow fadeInLeft" href="{{ route('taskManagementIndex') }}"><i class="pe-7s-home"></i> Dashboard</a>
                                    @else
                                        <a class="btn home-btn wow fadeInLeft" href="{{ route('register') }}">Signup</a>
                                        <a class="btn home-btn wow fadeInLeft" href="{{ route('login') }}">Login</a>
                                    @endif
                                @endif
                                
                                <a class="tuor btn wow fadeInRight" href="#ABOUT">About <i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-4">
                        <div class="home-iphone">
                            <img style="opacity:0.7;" src="{{asset('bent/images/logo.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END HEADER SECTION -->




 <!-- =========================
     START ABOUT US SECTION
============================== -->


    <section class="about page" id="ABOUT">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- ABOUT US SECTION TITLE-->
                    <div class="section_title">
                        <h2>About Us</h2>
                        <p>Task management is the process of managing a task through its life cycle. It involves planning, testing, tracking and reporting. Task management can help either individuals achieve goals, or groups of individuals collaborate and share knowledge for the accomplishment of collective goals.[1] Tasks are also differentiated by complexity, from low to high.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="inner_about_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_phone wow fadeInLeft " data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->
                            <img style="border: 0.4px solid #CECECE" src="{{asset('bent/images/ss1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- TITLE -->
                        <div class="inner_about_title">
                            <h2>Feature List</h2>
                            
                        </div>
                        <div class="inner_about_desc">

                            <!-- SINGLE DESC -->
                            <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1s">
                                <!-- ICON -->
                                <div><i class="pe-7s-timer"></i></div>
                                <!-- HEADING DESCRIPTION -->
                                <h3>Project, Task</h3>
                                <p>Organize and categorize your work </p>
                            </div>
                            <!-- END SINGLE DESC -->


                            <!-- SINGLE DESC -->
                            <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1.5s">
                                <!-- ICON -->
                                <div><i class="pe-7s-target"></i></div>
                                <!-- HEADING DESCRIPTION -->
                                <h3>Notifications</h3>
                                <p>Email and mobile push notifications. Multiple reminders per task </p>
                            </div>
                            <!-- END SINGLE DESC -->


                            <!-- SINGLE DESC -->
                            <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="2s">
                                <!-- ICON -->
                                <div><i class="pe-7s-stopwatch"></i></div>
                                <!-- HEADING DESCRIPTION -->
                                <h3>Task Comments</h3>
                                <p>Add comments to tasks, get notified when comment is added </p>
                            </div>
                            <!-- END SINGLE DESC -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="apps_screen page" id="SCREENS">
            <div class="container-fluid device text-center">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 wow fadeInBig" data-wow-duration="1s">
                        <!-- APPS SCREEN TITLE -->
                        <div class="section_title">
                            <img style="" src="{{asset('bent/images/device-desktop.png')}}" alt="">                          
                        </div>
                        <!-- END APPS SCREEN TITLE -->
                    </div>
                </div>
            </div>
        </section>
        <div class="video_area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeInLeftBig">
                    <!-- VIDEO LEFT TITLE -->
                        <div class="video_title">
                            <h2>Display Dashboard</h2>
                            <hr>
                            <p>Screen Dashboard allows you to see all of your</p>
                        </div>                        
                    </div>
                    <div class="col-md-12 wow fadeInRightBig">
                         <!-- VIDEO -->
                        {{--  <div class="video">
                            <iframe src="https://player.vimeo.com/video/88209254?title=0&amp;byline=0&amp;portrait=0&amp;color=cc0000" width="560" height="315"></iframe>
                        </div>  --}}
                        {{-- <center> --}}
                        <img style="" src="{{asset('bent/images/ss2.png')}}" alt="ss2" srcset="">
                        {{-- </center> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="available_store">
            <div class="container  wow bounceInRight" data-wow-duration="1s">
                <div class="col-md-6">
                    <div class="available_title">
                        <h2>Available on</h2>
                        <p></p>
                    </div>
                </div>

                <!-- DOWNLOADABLE STORE -->
                <div class="col-md-6">
                    <div class="row">
                        <a href="">
                            <div class="col-md-4 no_padding">
                                <div class="single_store">
                                    <i class="fa fa-apple"></i>
                                    <div class="store_inner">
                                        <h2>MAC</h2>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="col-md-4 no_padding">
                            <a href="">
                                <div class="single_store">
                                    <i class="fa fa-linux"></i>
                                    <div class="store_inner">
                                        <h2>LINUX</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 no_padding">
                            <a href="">
                                <div class="single_store last">
                                    <i class="fa fa-windows"></i>
                                    <div class="store_inner">
                                        <h2>WINDOWS</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END DOWNLOADABLE STORE -->
            </div>
        </div>
    </section>
    <!-- End About Us -->
    <section class="fun_facts parallax">
        <div class="section_overlay">
            <div class="container wow bounceInLeft" data-wow-duration="1s">
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="single_fun_facts">
                            <i class="pe-7s-users"></i>
                            <h2><span  class="counter_num">{{ $countUser }}</span> <span></span></h2>
                            <p>User</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_fun_facts">
                            <i class="pe-7s-note2"></i>
                            <h2><span  class="counter_num">{{ $countProject }}</span> <span></span></h2>
                            <p>Project</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single_fun_facts">
                            <i class="pe-7s-comment"></i>
                            <h2><span  class="counter_num">{{ $countComment }}</span> <span></span></h2>
                            <p>Comment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END FUN FACTS -->

<!-- =========================
     FOOTER 
============================== -->

    <section class="copyright">
        <h2></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copy_right_text">
                    <!-- COPYRIGHT TEXT -->
                        <p>Copyright &copy; 2017. All Rights Reserved.</p>        
                        <p>A theme by <a href="https://dcrazed.com/">Dcrazed</a></p>
                    </div>
                     
                </div>

                <div class="col-md-6">
                    <div class="scroll_top">
                        <a href="#HOME"><i class="fa fa-angle-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOTER -->


<!-- =========================
     SCRIPTS 
============================== -->


    <script src="{{asset('bent/js/jquery.min.js')}}"></script>
    <script src="{{asset('bent/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bent/js/owl.carousel.js')}}"></script>
    <script src="{{asset('bent/js/jquery.fitvids.js')}}"></script>
    <script src="{{asset('bent/js/smoothscroll.js')}}"></script>
    <script src="{{asset('bent/js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('bent/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('bent/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('bent/js/jquery.ajaxchimp.langs.js')}}"></script>
    <script src="{{asset('bent/js/wow.min.js')}}"></script>
    <script src="{{asset('bent/js/waypoints.min.js')}}"></script>
    <script src="{{asset('bent/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('bent/js/script.js')}}"></script>


</body>
</html>