<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>::Admin Login::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('/')}}assets/admin/img/favicon.ico" />
    <!-- Bootstrap -->
    <!-- global css -->
    <link href="{{asset('/')}}assets/admin/css/app.css" rel="stylesheet">
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="{{asset('/')}}assets/admin/vendors/iCheck/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/admin/css/custom.css">
    <link href="{{asset('/')}}assets/admin/vendors/iCheck/css/all.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/admin/css/login2.css" rel="stylesheet">
    <!--end page level css-->
</head>

<body class="bg-slider">
<div class="preloader">
    <div class="loader_img"><img src="{{asset('/')}}assets/admin/img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<div class="container">
    <div class="row " id="form-login">
        <div class="col-md-6  col-sm-8  col-12 mx-auto login-content offset-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="text-center">
                            Login
                            <small> with</small>
                            <img src="{{asset('/')}}assets/admin/img/pages/logo.png" alt="logo">
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row row-bg-color">
                <div class="col-lg-12 col-12 core-login">
                    <div class="form-horizontal" id="authentication">
                        <!-- CSRF Token -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group ">
                                    <label class="control-label" for="email">{{ __('E-Mail Address') }}</label>
                                    <div class="input-group">
                                        <input type="email" placeholder="Email Address" class="form-control"
                                               name="email" id="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="password">PASSWORD</label>
                                    <div class="input-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember" id="remember"> &nbsp;
                                    <label for="remember"> Remember Me </label>
                                    @if (Route::has('password.request'))
                                        <a id="forgot" class="text-primary forgot1  pull-right btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="form-group ">
                                    <button type="submit"  class="btn btn-primary login-btn">{{ __('Login') }}</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script src="{{asset('/')}}assets/admin/js/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('/')}}assets/admin/js/bootstrap.min.js" type="text/javascript"></script>
{{--<script src="{{asset('/')}}assets/admin/js/backstretch.js"></script>--}}
<!-- end of global js -->
<!-- page level js -->
<script type="text/javascript" src="{{asset('/')}}assets/admin/vendors/iCheck/js/icheck.js"></script>
<script src="{{asset('/')}}assets/admin/vendors/bootstrapvalidator/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('/')}}assets/admin/js/custom_js/login.js"></script>
<!-- end of page level js -->
</body>

</html>
