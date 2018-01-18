<!DOCTYPE html>
<html>

<head>
    <title>Register | Task Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- global css -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <link type="text/css" href="{{asset('vendors/themify/css/themify-icons.css')}}" rel="stylesheet"/>
    <link href="{{asset('vendors/iCheck/css/all.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/login.css')}}" rel="stylesheet">
    <!--end of page level css-->
</head>

<body id="sign-up">
<div class="preloader">
    <div class="loader_img"><img src="{{asset('img/loader.gif')}}" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 login-form" style="border-radius:0;">
            <div class="panel-header">
                <h2 class="text-center">
                    <img src="{{asset('img/pages/clear_black.png')}}" alt="Logo">
                </h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul style="padding:0;list-style:none;">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            <ul style="padding:0;list-style:none;">
                                <li>{{ session()->get('message') }}</li>
                            </ul>
                        </div>
                    @endif
                    </div> 
                    <form action="{{route('register')}}" id="authentication" method="post" class="signup_validator">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="first" class="sr-only">Full Name</label>
                                <input type="text" class="form-control  form-control-lg" id="first" name="name" value="{{ old('name') }}"
                                       placeholder="Full name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email" class="sr-only"> E-mail</label>
                                <input type="text" class="form-control  form-control-lg" id="email" name="email"
                                       placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" class="form-control form-control-lg" id="password"
                                       name="password" placeholder="Password">
                            </div>
                        </div>
                        {{--  <div class="col-md-12">
                            <div class="form-group">
                                <label for="confirm-password" class="sr-only">Password</label>
                                <input type="password" class="form-control form-control-lg" id="confirm-password"
                                       name="password_confirm" placeholder="Confirm Password">
                            </div>
                        </div>  --}}
                        <div class="col-md-12">
                            <div class="form-group checkbox">
                                <label for="terms">
                                    <input type="checkbox" name="terms" id="terms">&nbsp; I accept the <a href="javascript:void(0)">terms &amp; Conditions</a>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Sign Up" class="btn btn-primary btn-block"/>
                            </div>
                            <span class="sign-in">Already a member? <a href="{{ route('login') }}">Sign In</a></span>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="{{asset('vendors/moment/js/moment.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('vendors/select2/js/select2.js')}}"></script>
<script src="{{asset('vendors/iCheck/js/icheck.js')}}"></script>
<script src="{{asset('vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/custom_js/register.js')}}"></script>
<!-- end of page level js -->
</body>

</html>
