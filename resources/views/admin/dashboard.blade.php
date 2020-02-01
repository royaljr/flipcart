<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Core + Admin Template | Core + Admin Template </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
    <link rel="shortcut icon" href="{{asset('/')}}assets/admin/img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" rel="stylesheet" href="{{asset('/')}}assets/admin/css/app.css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link href="{{asset('/')}}assets/admin/vendors/toastr/css/toastr.min.css" rel="stylesheet" type="text/css"/>
    <!--weathericons-->
    <link href="{{asset('/')}}assets/admin/vendors/weathericon/css/weather-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/')}}assets/admin/vendors/c3/c3.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/')}}assets/admin/vendors/nvd3/css/nv.d3.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}assets/admin/css/custom.css">

    <link href="{{asset('/')}}assets/admin/css/custom_css/dashboard2.css" rel="stylesheet" type="text/css"/>
    <!--end of page level css-->
</head>
<body class="skin-coreplus">
<div class="preloader">
    <div class="loader_img"><img src="{{asset('/')}}assets/admin/img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-expand-md navbar-static-top">
        <a href="index.html" class="logo navbar-brand">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="{{asset('/')}}assets/admin/img/logo.png" alt="logo"/>
        </a>

        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw fa-bars"></i>
            </a>
        </div>


        <div class="navbar-collapse " id="navbarNav">
            <div class="navbar-right ml-auto">
                <ul class="nav navbar-nav ">
                    <li class="nav-item dropdown messages-menu">
                        <a href="#" class="nav-link dropdown-toggle"> <i
                                class="fa fa-fw fa-envelope-o black"></i>
                            <span class="label bg-success">2</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages table-striped">
                            <li class="dropdown-title">New Messages</li>
                            <li class="msg-set message striped-col">
                                <a href="#" class="">
                                    <img class="message-image rounded-circle" src="{{asset('/')}}assets/admin/img/authors/avatar7.jpg"
                                         alt="avatar-image">

                                    <div class="message-body"><strong>Ernest Kerry</strong>
                                        <br>
                                        Can we Meet?
                                        <br>
                                        <small>Just Now</small>
                                        <span class="label bg-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li class="msg-set message">
                                <a href="#" class="">
                                    <img class="message-image rounded-circle" src="{{asset('/')}}assets/admin/img/authors/avatar6.jpg"
                                         alt="avatar-image">

                                    <div class="message-body"><strong>John</strong>
                                        <br>
                                        Dont forgot to call...
                                        <br>
                                        <small>5 minutes ago</small>
                                        <span class="label bg-success label-mini msg-lable">New</span>
                                    </div>
                                </a>
                            </li>
                            <li class="msg-set message striped-col">
                                <a href="#" class="">
                                    <img class="message-image rounded-circle" src="{{asset('/')}}assets/admin/img/authors/avatar5.jpg"
                                         alt="avatar-image">

                                    <div class="message-body">
                                        <strong>Wilton Zeph</strong>
                                        <br>
                                        If there is anything else &hellip;
                                        <br>
                                        <small>14/10/2014 1:31 pm</small>
                                    </div>

                                </a>
                            </li>
                            <li class="msg-set message">
                                <a href="#" class="">
                                    <img class="message-image rounded-circle" src="{{asset('/')}}assets/admin/img/authors/avatar1.jpg"
                                         alt="avatar-image">
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br>
                                        Let me know when you free
                                        <br>
                                        <small>5 days ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="msg-set message striped-col">
                                <a href="#" class="">
                                    <img class="message-image rounded-circle" src="{{asset('/')}}assets/admin/img/authors/avatar.jpg"
                                         alt="avatar-image">
                                    <div class="message-body">
                                        <strong>Tony</strong>
                                        <br>
                                        Let me know when you free
                                        <br>
                                        <small>5 days ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer"><a href="#">View All messages</a></li>
                        </ul>

                    </li>
                    <!--tasks-->
                    <li class="nav-item dropdown tasks-menu d-none d-sm-block">
                        <a href="#" class=" nav-link dropdown-toggle">
                            <i class="fa fa-fw fa-edit black"></i>
                            <span class="label bg-primary">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="dropdown-title ">You Have 4 Tasks</li>
                            <li class="message striped-col">
                                <a href="#" class=" ">
                                    Design some buttons
                                    <small class="pull-right">20%</small>
                                    <div class="message-body">
                                        <div class="progress progress-xs progress_task">
                                            <div class="progress-bar bg-primary" style="width: 20%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message">
                                <a href="#" class="">
                                    Create a nice theme
                                    <small class="pull-right">40%</small>
                                    <div class="message-body">
                                        <div class="progress progress-xs progress_task">
                                            <div class="progress-bar bg-success" style="width: 40%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message striped-col">
                                <a href="#" class="">
                                    Some task I need to do
                                    <small class="pull-right">60%</small>
                                    <div class="message-body">
                                        <div class="progress progress-xs progress_task">
                                            <div class="progress-bar bg-danger" style="width: 60%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message">
                                <a href="#" class="">
                                    Make beautiful transitions
                                    <small class="pull-right">80%</small>
                                    <div class="message-body">
                                        <div class="progress progress-xs progress_task">
                                            <div class="progress-bar bg-warning" style="width: 80%"
                                                 role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                 aria-valuemax="100">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer"><a href="#"> View All Tasks</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown_message">
                        <a href="#" class="nav-link dropdown-toggle toggle-right">
                            <i class="fa fa-fw fa-comments-o black"></i>
                            <span class="label bg-danger">9</span>
                        </a>
                    </li>
                    <!-- Notifications: style can be found in dropdown-->
                    <li class="nav-item dropdown notifications-menu">
                        <a href="#" class="nav-link dropdown-toggle" >
                            <i class="fa fa-fw fa-bell-o black"></i>
                            <span class="label bg-warning">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li class="dropdown-title">You have 8 notifications</li>

                            <li class="message striped-col">
                                <a href="#" class=" icon-not">
                                    <img class="message-image rounded-circle" src="img/authors/avatar3.jpg"
                                         alt="avatar-image">

                                    <div class="message-body">
                                        <strong>John Doe</strong>
                                        <br>
                                        5 members joined today
                                        <br>
                                        <span class="noti-date">Just now</span>
                                    </div>

                                </a>
                            </li>
                            <li class="message">
                                <a href="#" class=" icon-not">
                                    <img class="message-image rounded-circle" src="img/authors/avatar.jpg"
                                         alt="avatar-image">
                                    <div class="message-body">
                                        <strong>Tony</strong>
                                        <br>
                                        likes a photo of you
                                        <br>
                                        <span class="noti-date">5 min</span>
                                    </div>
                                </a>
                            </li>
                            <li class="message striped-col">
                                <a href="#" class=" icon-not">
                                    <img class="message-image rounded-circle" src="img/authors/avatar6.jpg"
                                         alt="avatar-image">

                                    <div class="message-body">
                                        <strong>John</strong>
                                        <br>
                                        Dont forgot to call...
                                        <br>
                                        <span class="noti-date">11 min</span>

                                    </div>
                                </a>
                            </li>
                            <li class="message">
                                <a href="#" class=" icon-not">
                                    <img class="message-image rounded-circle" src="{{asset('/')}}assets/admin/img/authors/avatar1.jpg"
                                         alt="avatar-image">
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br>
                                        Very long description here...
                                        <br>
                                        <span class="noti-date">1 Hour</span>
                                    </div>
                                </a>
                            </li>
                            <li class="message striped-col">
                                <a href="#" class=" icon-not ">
                                    <img class="message-image rounded-circle" src="img/authors/avatar7.jpg"
                                         alt="avatar-image">

                                    <div class="message-body">
                                        <strong>Ernest Kerry</strong>
                                        <br>
                                        2 members joined today
                                        <br>
                                        <span class="noti-date">3 Days</span>

                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer"><a href="#"> View All Notifications</a></li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown-->
                    <li class="nav-item dropdown user user-menu">
                        <a href="#" class="nav-link dropdown-toggle padding-user pt-3">
                            <img src="{{asset('/')}}assets/admin/img/authors/avatar1.jpg" width="35"
                                 class="rounded-circle img-fluid pull-left"
                                 height="35" alt="User Image">
                            <div class="riot">
                                <div>
                                    {{ Auth::user()->name }}
                                    <span>
                                        <i class="fa fa-caret-down"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('/')}}assets/admin/img/authors/avatar1.jpg" class="rounded-circle" alt="User Image">
                                <p> {{ Auth::user()->name }}</p>
                            </li>
                            <!-- Menu Body -->
                            <li class="p-t-3 nav-item" ><a href="user_profile.html" class="nav-link"> <i class="fa fa-fw fa-user"></i> My
                                    Profile </a>
                            </li>
                            <li ></li>
                            <li class="nav-item"><a href="edit_user.html" class="nav-link"> <span><i class="fa fa-fw fa-gear"></i> Account Settings</span>
                                </a></li>
                            <li  class="dropdown-divider"></li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="lockscreen.html">
                                        <i class="fa fa-fw fa-lock"></i>
                                        Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
                                        <i class="fa fa-fw fa-sign-out"></i>
                                    {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="{{asset('/')}}assets/admin/img/authors/avatar1.jpg" class="rounded-circle" alt="User Image">
                        </a>
                        <div class="content-profile pl-3">
                            <h4 class="media-heading">
                                Nataliapery
                            </h4>
                            <ul class="icon-list list-inline">
                                <li>
                                    <a href="users.html">
                                        <i class="fa fa-fw fa-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="lockscreen.html">
                                        <i class="fa fa-fw fa-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="edit_user.html">
                                        <i class="fa fa-fw fa-gear"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="login.html">
                                        <i class="fa fa-fw fa-sign-out"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{--Navigation--}}
                <ul class="navigation">
                    <li class="menu-dropdown active">
                        <a href="#">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span>Brands</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{route('add-brand')}}">
                                    <i class="fa fa-fw fa-fire"></i> Add Brands
                                </a>
                            </li>
                            <li>
                                <a href="form_editors.html">
                                    <i class="fa fa-fw fa-file-text-o"></i> Manage Brands
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                    </li>
                </ul>
                <!-- / .navigation --> </div>
            <!-- menu --> </section>
        <!-- /.sidebar --> </aside>
    <aside class="right-side right-padding">
            @yield('dashboard-content')
        <!-- /.content --> </aside>
    <!-- /.right-side --> </div>
<!-- ./wrapper -->
<!-- global js -->
<div id="qn"></div>
<script src="{{asset('/')}}assets/admin/js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<!--Sparkline Chart-->
<script src="{{asset('/')}}assets/admin/js/custom_js/sparkline/jquery.flot.spline.js"></script>
<!--c3 and d3 chart-->
<script type="text/javascript" src="{{asset('/')}}assets/admin/vendors/c3/c3.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets/admin/vendors/d3/d3.min.js"></script>
<!--nvd3 charts-->
<script type="text/javascript" src="{{asset('/')}}assets/admin/vendors/nvd3/js/nv.d3.min.js"></script>
<!--advanced news ticker-->
<script type="text/javascript" src="{{asset('/')}}assets/admin/vendors/advanced_newsTicker/js/jquery.newsTicker.js"></script>
<script src="{{asset('/')}}assets/admin/js/dashboard2.js" type="text/javascript"></script>
<!-- end of page level js -->

</body>

</html>
