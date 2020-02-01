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
                                    Natali
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
                                <p> Nataliapery</p>
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
                                    <a href="login.html">
                                        <i class="fa fa-fw fa-sign-out"></i>
                                        Logout
                                    </a>
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
                <ul class="navigation">
                    <li>
                        <a href="index.html">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">Dashboard V1</span>
                        </a>
                    </li>
                    <li class="active" id="active">
                        <a href="index2.html">
                            <i class="menu-icon fa fa-fw fa-tachometer"></i>
                            <span class="mm-text ">Dashboard V2</span>
                        </a>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span>Forms</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="form_elements.html">
                                    <i class="fa fa-fw fa-fire"></i> Form Elements
                                </a>
                            </li>
                            <li>
                                <a href="form_editors.html">
                                    <i class="fa fa-fw fa-file-text-o"></i> Form Editors
                                </a>
                            </li>
                            <li>
                                <a href="form_validations.html">
                                    <i class="fa fa-fw fa-warning"></i> Form Validations
                                </a>
                            </li>
                            <li>
                                <a href="form_layouts.html">
                                    <i class="fa fa-fw fa-fire"></i> Form Layouts
                                </a>
                            </li>
                            <li>
                                <a href="form_wizards.html">
                                    <i class="fa fa-fw fa-cog"></i> Form Wizards </a>
                            </li>
                            <li>
                                <a href="complex_forms.html">
                                    <i class="fa fa-fw fa-newspaper-o"></i> Complex Forms </a>
                            </li>
                            <li>
                                <a href="complex_forms2.html">
                                    <i class="fa fa-fw fa-newspaper-o"></i> Complex Forms 2</a>
                            </li>
                            <li>
                                <a href="radio_checkboxes.html">
                                    <i class="fa fa-fw fa-check-square-o"></i> Radio and Checkbox </a>
                            </li>
                            <li>
                                <a href="dropdowns.html">
                                    <i class="fa fa-fw fa-chevron-circle-down"></i> Drop Downs
                                </a>
                            </li>
                            <li>
                                <a href="datepicker.html">
                                    <i class="fa fa-fw fa-calendar-o"></i> Date pickers
                                </a>
                            </li>
                            <li>
                                <a href="advanceddate_pickers.html">
                                    <i class="fa fa-fw fa-calendar"></i> Advanced Date pickers
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span>
                                    UI Features
                                </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="general_components.html">
                                    <i class="fa fa-fw fa-plug"></i> General Components
                                </a>
                            </li>
                            <li>
                                <a href="pickers.html">
                                    <i class="fa fa-fw fa-paint-brush"></i> Pickers
                                </a>
                            </li>
                            <li>
                                <a href="buttons.html">
                                    <i class="fa fa-fw fa-delicious"></i> Buttons
                                </a>
                            </li>
                            <li>
                                <a href="tabs_accordions.html">
                                    <i class="fa fa-fw fa-copy"></i> Tabs &amp; Accordions
                                </a>
                            </li>
                            <li>
                                <a href="fonts.html">
                                    <i class="fa fa-fw fa-font"></i> Font Icons
                                </a>
                            </li>
                            <li>
                                <a href="grid_layout.html"><i class="fa fa-fw fa-columns"></i> Grid Layout
                                </a>
                            </li>
                            <li>
                                <a href="advanced_modals.html">
                                    <i class="fa fa-fw fa-suitcase"></i> Advanced Modals
                                </a>
                            </li>
                            <li>
                                <a href="gridstack.html">
                                    <i class="fa fa-fw fa-slack"></i> Grid Stack
                                </a>
                            </li>
                            <li>
                                <a href="tags_input.html">
                                    <i class="fa fa-fw fa-tag"></i> Tags Input
                                </a>
                            </li>
                            <li>
                                <a href="nestable_list.html">
                                    <i class="fa fa-fw fa-navicon"></i> Nestable List
                                </a>
                            </li>
                            <li>
                                <a href="sweet_alert.html">
                                    <i class="fa fa-fw fa-bell"></i> Sweet Alert
                                </a>
                            </li>
                            <li>
                                <a href="toastr_notifications.html">
                                    <i class="fa fa-fw fa-desktop"></i> Toastr Notifications
                                </a>
                            </li>
                            <li>
                                <a href="notifications.html">
                                    <i class="fa fa-fw fa-flag"></i> Notifications
                                </a>
                            </li>
                            <li>
                                <a href="session_timeout.html">
                                    <i class="fa fa-fw fa-rocket"></i> Session Timeout
                                </a>
                            </li>
                            <li>
                                <a href="draggable_portlets.html">
                                    <i class="fa fa-fw fa-random"></i> Draggable Portlets
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-briefcase"></i>
                            <span>
                                    UI Components
                                </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="timeline.html">
                                    <i class="fa fa-fw fa-clock-o"></i> Timeline
                                </a>
                            </li>
                            <li>
                                <a href="transitions.html"> <i class="fa fa-fw fa-star-half-empty"></i> Transitions </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#"> <i class="menu-icon fa fa-table"></i>
                            <span>DataTables</span>
                            <span class="fa arrow">
                                </span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="simple_tables.html">
                                    <i class="fa fa-fw fa-tasks"></i> Simple tables
                                </a>
                            </li>
                            <li>
                                <a href="datatables.html">
                                    <i class="fa fa-fw fa-database"></i> Data Tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_datatables.html">
                                    <i class="fa fa-fw fa-table"></i> Advanced Tables
                                </a>
                            </li>
                            <li>
                                <a href="responsive_datatables.html">
                                    <i class="fa fa-fw fa-table"></i> Responsive DataTables
                                </a>
                            </li>
                            <li>
                                <a href="bootstrap_tables.html">
                                    <i class="fa fa-fw fa-table"></i> Bootstrap Tables
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#"> <i class="menu-icon fa fa-bar-chart-o"></i>
                            <span>Charts</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="flot_charts.html">
                                    <i class="fa fa-fw fa-area-chart"></i> Flot Charts
                                </a>
                            </li>
                            <li>
                                <a href="nvd3_charts.html"> <i class="fa fa-fw fa-line-chart"></i> NVD3 Charts </a>
                            </li>
                            <li>
                                <a href="circle_sliders.html"> <i class="fa fa-fw fa-sun-o"></i> Circle Sliders </a>
                            </li>
                            <li>
                                <a href="chartjs_charts.html"> <i class="fa fa-fw fa-pie-chart"></i> Chartjs Charts </a>
                            </li>
                            <li>
                                <a href="dimple_charts.html"> <i class="fa fa-fw fa-area-chart"></i> Dimple Charts </a>
                            </li>
                            <li>
                                <a href="amcharts.html"> <i class="fa fa-fw fa-line-chart"></i> Amcharts </a>
                            </li>
                            <li>
                                <a href="chartist.html"> <i class="fa fa-fw fa-bar-chart"></i> Chartist Charts </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-fw fa-calendar"></i>
                            <span>Calendar</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="calendar.html">
                                    <i class=" menu-icon fa fa-fw fa-calendar"></i>
                                    <span>Calendar</span>
                                    <small class="badge badge-success badge-pill float-right text-white mt-1">7</small>
                                </a>
                            </li>
                            <li>
                                <a href="calendar2.html">
                                    <i class=" menu-icon fa fa-fw fa-calendar-o"></i>
                                    <span>Advanced Calendar</span>
                                    <small class="badge badge-success badge-pill float-right text-white mt-1">6</small>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-fw fa-photo"></i>
                            <span>Gallery</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="masonry_gallery.html">
                                    <i class="fa fa-fw fa-file-image-o"></i> Masonry Gallery
                                </a>
                            </li>
                            <li>
                                <a href="multiplefile_upload.html">
                                    <i class="fa fa-fw fa-cloud-upload"></i> Multiple File Upload
                                </a>
                            </li>
                            <li>
                                <a href="dropify.html">
                                    <i class="fa fa-fw fa-dropbox"></i> Dropify
                                </a>
                            </li>
                            <li>
                                <a href="image_hover.html">
                                    <i class="fa fa-file-image-o"></i> Image Hover
                                </a>
                            </li>
                            <li>
                                <a href="image_filter.html">
                                    <i class="fa fa-filter"></i> Image Filter
                                </a>
                            </li>
                            <li>
                                <a href="image_magnifier.html">
                                    <i class="fa  fa-search-plus"></i> Image Magnifier
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#"> <i class="menu-icon fa fa-fw fa-users"></i> <span>Users</span> <span
                                class="fa arrow"></span> </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="users.html">
                                    <i class="fa fa-list" aria-hidden="true"></i> Users List
                                </a>
                            </li>
                            <li>
                                <a href="addnew_user.html">
                                    <i class="fa fa-fw fa-user"></i> Add New User
                                </a>
                            </li>
                            <li>
                                <a href="user_profile.html">
                                    <i class="fa fa-fw fa-user-md"></i> View Profile
                                </a>
                            </li>
                            <li>
                                <a href="deleted_users.html">
                                    <i class="fa fa-fw fa-times"></i> Deleted Users
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-map-marker"></i>
                            <span>Maps</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="google_maps.html">
                                    <i class="fa fa-fw fa-globe"></i> Google Maps
                                </a>
                            </li>
                            <li>
                                <a href="vector_maps.html">
                                    <i class="fa fa-fw fa-map-marker"></i> Vector Maps
                                </a>
                            </li>
                            <li>
                                <a href="advanced_maps.html">
                                    <i class="fa fa-fw fa-location-arrow"></i> Advanced Maps
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-files-o"></i>
                            <span>Pages</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="lockscreen.html"> <i class="fa fa-fw fa-lock"></i> Lockscreen </a></li>
                            <li><a href="lockscreen2.html"> <i class="fa fa-fw fa-lock"></i> Lockscreen V2 </a></li>
                            <li><a href="invoice.html"> <i class="fa fa-fw fa-newspaper-o"></i> Invoice </a></li>
                            <li><a href="blank.html"> <i class="fa fa-fw fa-file-o"></i> Blank </a></li>
                            <li><a href="login.html"> <i class="fa fa-fw fa-sign-in"></i> Login </a></li>
                            <li><a href="login2.html"> <i class="fa fa-fw fa-space-shuttle"></i> Login V2 </a></li>
                            <li><a href="register.html"> <i class="fa fa-fw fa-sign-out"></i> Register </a></li>
                            <li><a href="register2.html"> <i class="fa fa-fw fa-trello"></i> Register V2 </a></li>
                            <li><a href="404.html"> <i class="fa fa-fw fa-unlink"></i> 404 Error </a></li>
                            <li><a href="500.html"> <i class="fa fa-fw fa-frown-o"></i> 500 Error </a></li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-th"></i>
                            <span>Layouts</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="menubarfold.html">
                                    <i class="fa fa-fw fa-list-alt"></i> Menubar Fold
                                </a>
                            </li>
                            <li>
                                <a href="layout_horizontal_menu.html">
                                    <i class="fa fa-fw fa-bars"></i> Horizontal Menu
                                </a>
                            </li>
                            <li>
                                <a href="layout_footer.html">
                                    <i class="fa fa-fw  fa-ellipsis-h"></i> Sticky Footer
                                </a>
                            </li>
                            <li>
                                <a href="boxed.html">
                                    <i class="fa fa-fw fa-th-large"></i> Boxed Layout
                                </a>
                            </li>
                            <li>
                                <a href="layout_fixed_header.html">
                                    <i class="fa fa-fw fa-th-list"></i> Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="layout_boxed_fixed_header.html">
                                    <i class="fa fa-fw fa-th"></i> Boxed &amp; Fixed Header
                                </a>
                            </li>
                            <li>
                                <a href="layout_fixed.html">
                                    <i class="fa fa-fw fa-indent"></i> Fixed Header &amp; Menu
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-sitemap"></i>
                            <span>
                                    Menu levels
                                </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw fa-sitemap"></i> Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw fa-sitemap"></i> Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw fa-sitemap"></i> Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw fa-sitemap"></i> Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw fa-sitemap"></i> Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw fa-sitemap"></i> Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw fa-sitemap"></i> Level 3
                                                    <span class="fa arrow"></span>
                                                </a>
                                                <ul class="sub-menu sub-submenu">
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-fw fa-sitemap"></i> Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-fw fa-sitemap"></i> Level 4
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fa fa-fw fa-sitemap"></i> Level 4
                                                            <span class="fa arrow"></span>
                                                        </a>
                                                        <ul class="sub-menu sub-submenu">
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-fw fa-sitemap"></i> Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-fw fa-sitemap"></i> Level 5
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-fw fa-sitemap"></i> Level 5
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw fa-sitemap"></i> Level 4
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw fa-sitemap"></i> Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw fa-sitemap"></i> Level 1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw fa-sitemap"></i> Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw fa-sitemap"></i> Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw fa-sitemap"></i> Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw fa-sitemap"></i> Level 2
                                            <span class="fa arrow"></span>
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

        <section class="content-header">
            <div class="row">
                <div class="col-md-6 col-6">
                    <div class="header-data">
                        <h1>Dashboard</h1>
                        <p>Welcome To Core Plus</p>
                    </div>
                </div>
                <div class="col-md-6 col-6">
                    <div class="header-charts">
                        <div class="sparkline-chart pull-right d-none d-md-block">
                            <div class="number" id="sparkline_line"></div>
                            <small class="server-title">Server Load:</small>
                        </div>
                        <div class="sparkline-chart pull-right">
                            <div class="number" id="sparkline_bar"></div>
                            <small class="sales-title">Daily Sales:</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header sales-header">
                            <h3 class="heading_text card-title d-inline-block">Sales</h3>
                            <span class="pull-right line-bar-charts">
                                <button class="btn btn-sm btn-link chart_switch" data-chart="bar">Bar Chart</button>
                                <button class="btn btn-sm btn-default chart_switch" data-chart="line">Line Chart
                                </button>
                            </span>
                        </div>
                        <div class="card-body">
                            <div id="sales-line-bar" style="height:280px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card weather-widget mt-1">
                        <div class="row weather-data">
                            <div class="col-md-12 temperature">
                                <h2>19<sup><sup>o</sup><sub>c</sub></sup></h2>
                                <p class="location"><i class="fa fa-map-marker text-default" aria-hidden="true"></i>
                                    Hong Kong, China</p>
                                <p>Showers till tomorrow morning</p>
                                <i class="wi wi-night-rain icon"></i>
                            </div>
                        </div>
                        <div class="weather-footer">
                            <div class="text-center row">
                                <div class="col-lg-3 col-2 popup popup1 pr-0">
                                    <h5>MON</h5>
                                    <i class="wi wi-day-lightning"></i>
                                    <p>21<sup>o<sub>c</sub></sup></p>
                                </div>
                                <div class="col-lg-3 col-2 popup pr-0">
                                    <h5>TUE</h5>
                                    <i class="wi wi-cloudy"></i>
                                    <p>28<sup>o<sub>c</sub></sup></p>
                                </div>
                                <div class="col-lg-3 col-2 popup pr-0">
                                    <h5>WED</h5>
                                    <i class="wi wi-night-rain-mix"></i>
                                    <p>26<sup>o<sub>c</sub></sup></p>
                                </div>
                                <div class="col-lg-3 col-2 popup pr-0">
                                    <h5>THU</h5>
                                    <i class="wi wi-day-sunny"></i>
                                    <p>31<sup>o<sub>c</sub></sup></p>
                                </div>
                                <div class="col-2 d-xl-none d-lg-none d-md-block d-sm-block d-block popup pr-0">
                                    <h5>FRI</h5>
                                    <i class="wi wi-day-lightning"></i>
                                    <p>24<sup>o<sub>c</sub></sup></p>
                                </div>
                                <div class="col-2 d-xl-none d-lg-none d-md-block d-sm-block d-block popup pl-0">
                                    <h5>SAT</h5>
                                    <i class="wi wi-night-alt-snow"></i>
                                    <p>25<sup>o<sub>c</sub></sup></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header d-inline-block">
                            <h3 class="card-title">Live Views</h3>
                        </div>
                        <div class="card-body real-time">
                            <div class="total-visits">
                                <span>238</span>
                                <small>visitors On-line</small>
                                <div class="progress">
                                    <div role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"
                                         style="width: 23%;" class="progress-bar bg-info">
                                    </div>
                                </div>
                            </div>
                            <div class="visit-source">
                                <div class="visit-count pull-left">
                                    <small>82 <span>Direct</span></small>
                                    <div class="progress">
                                        <div role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 29.1%;" class="progress-bar bg-primary">
                                        </div>
                                    </div>
                                </div>
                                <div class="visit-count pull-left">
                                    <small>156 <span>Search</span></small>
                                    <div class="progress">
                                        <div role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 70.9%;" class="progress-bar bg-danger">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="visitors-os pull-left text-center">
                                    <p>43.4%</p>
                                    <span>Windows</span>
                                </div>
                                <div class="visitors-os pull-left text-center">
                                    <p>32.4%</p>
                                    <span>Mac Os</span>
                                </div>
                                <div class="visitors-os pull-left text-center">
                                    <p>34.2%</p>
                                    <span>Others</span>
                                </div>
                            </div>
                            <div id='chart-live' class='chart half with-transitions'>
                                <svg></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card panel-widget">
                        <div class="card-header">
                            <h3 class="card-title">Daily Traffic</h3>
                        </div>
                        <div class="card-header d-inline-block">
                            <ul class="basic-list">
                                <li><img src="{{asset('/')}}assets/admin/img/chrome.png" alt="chrome"> Chrome
                                    <span class="right label bg-success pull-right">42.8%</span></li>
                                <li><img src="{{asset('/')}}assets/admin/img/firefox.png" alt="firefox">Firefox
                                    <span class="right label bg-danger pull-right">16.9%</span></li>
                                <li><img src="{{asset('/')}}assets/admin/img/safari.png" alt="safari">Safari
                                    <span class="right label bg-primary pull-right">15.5%</span></li>
                                <li><img src="{{asset('/')}}assets/admin/img/opera.png" alt="opera">Opera
                                    <span class="right label bg-info pull-right">11.8%</span></li>
                                <li><img src="{{asset('/')}}assets/admin/img/Ie.png" alt="Internet Explorer">IE
                                    <span class="right label bg-danger pull-right">3.2%</span></li>
                                <li><img src="{{asset('/')}}assets/admin/img/mobile.png" alt="mobile">Mobile
                                    <span class="right label bg-warning pull-right">3%</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header d-inline-block">
                            <h3 class="card-title">Recent Activities</h3>
                        </div>
                        <div class="card-body">
                            <ul class="auto-update">
                                <li>
                                    <div class="activity">
                                        <div class="activity-image pull-left">
                                            <img src="{{asset('/')}}assets/admin/img/authors/avatar.jpg" alt="profile-image"
                                                 class="rounded-circle media-image">
                                        </div>
                                        <div class="activity-content pull-left">
                                            <h5 class="heading text-primary">Praesent ornare nisl lorem</h5>
                                            <p class="text-muted">
                                                <small>7 min ago</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity">
                                        <div class="activity-image pull-left">
                                            <img src="{{asset('/')}}assets/admin/img/authors/avatar2.jpg" alt="profile-image"
                                                 class="rounded-circle media-image">
                                        </div>
                                        <div class="activity-content pull-left">
                                            <h5 class="heading text-primary">Nunc ultrices</h5>
                                            <p class="text-muted">
                                                <small>10 min ago</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity">
                                        <div class="activity-image pull-left">
                                            <img src="{{asset('/')}}assets/admin/img/authors/avatar3.jpg" alt="profile-image"
                                                 class="rounded-circle media-image">
                                        </div>
                                        <div class="activity-content pull-left">
                                            <h5 class="heading text-primary">Praesent ornare nisl</h5>
                                            <p class="text-muted">
                                                <small>Yesterday at 10:20pm</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity">
                                        <div class="activity-image pull-left">
                                            <img src="{{asset('/')}}assets/admin/img/authors/avatar4.jpg" alt="profile-image"
                                                 class="rounded-circle media-image">
                                        </div>
                                        <div class="activity-content pull-left">
                                            <h5 class="heading text-primary">Nunc ultrices tortor eu</h5>
                                            <p class="text-muted">
                                                <small>2 days ago at 1:20pm</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity">
                                        <div class="activity-image pull-left">
                                            <img src="{{asset('/')}}assets/admin/img/authors/avatar5.jpg" alt="profile-image"
                                                 class="rounded-circle media-image">
                                        </div>
                                        <div class="activity-content pull-left">
                                            <h5 class="heading text-primary">Praesent ornare nisl</h5>
                                            <p class="text-muted">
                                                <small>Just now</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="activity">
                                        <div class="activity-image pull-left">
                                            <img src="{{asset('/')}}assets/admin/img/authors/avatar7.jpg" alt="profile-image"
                                                 class="rounded-circle media-image">
                                        </div>
                                        <div class="activity-content pull-left">
                                            <h5 class="heading text-primary">Nunc ultrices tortor eu massa</h5>
                                            <p class="text-muted">
                                                <small>2 min ago</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Server Load</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="load-measure">
                                    <h5>CPU Load:</h5>
                                    <canvas id="cpu-load" height="300" width="300"></canvas>
                                </div>
                                <div class="load-measure">
                                    <h5>Disk Space Used:</h5>
                                    <canvas id="space-used" height="300" width="300"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                    <div class="card panel-widget">
                        <div class="card-header">
                            <h3 class="card-title">To Do List</h3>
                        </div>
                        <div class="card-body tasks_list task-row">
                            <form class="row list_of_items">
                                <div class="todolist_list showactions">
                                    <div class="col-md-9 col-sm-9 col-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck checkbox checkbox-info">
                                            <input type="checkbox" class="striked styled">
                                            <label>
                                            </label>
                                        </div>
                                        <div class="todotext  todoitemjs"> The Passage has a strong culture of volunteering
                                        </div>
                                    </div>
                                    <div class="col-md-2  col-sm-2 col-3 todoitembtns">
                                        <a href="#" class="tododelete redcolor pull-right">
                                            <i class="fa fa-times showbtns" aria-hidden="true"></i>
                                        </a>
                                        <span class="striks pull-right showbtns">|</span>
                                        <a href="#" class="todoedit pull-right">
                                            <i class="fa fa-pencil showbtns" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="un-do pull-right" hidden>
                                            <i class="fa fa-repeat showbtns" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-9 col-sm-9 col-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck checkbox checkbox-info">
                                            <input type="checkbox" class="striked">
                                            <label>
                                            </label>
                                        </div>
                                        <div class="todotext  todoitemjs">There are many variations of passages here
                                        </div>
                                    </div>
                                    <div class="col-md-2  col-sm-2 col-3 todoitembtns">
                                        <a href="#" class="tododelete redcolor pull-right">
                                            <i class="fa fa-times showbtns" aria-hidden="true"></i>
                                        </a>
                                        <span class="striks pull-right showbtns">|</span>
                                        <a href="#" class="todoedit pull-right">
                                            <i class="fa fa-pencil showbtns" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="un-do pull-right" hidden>
                                            <i class="fa fa-repeat showbtns" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-9 col-sm-9 col-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck checkbox checkbox-info">
                                            <input type="checkbox" class="striked">
                                            <label>
                                            </label>
                                        </div>
                                        <div class="todotext  todoitemjs">It has roots in a piece of classical Latin
                                        </div>
                                    </div>
                                    <div class="col-md-2  col-sm-2 col-3 todoitembtns">
                                        <a href="#" class="tododelete redcolor pull-right">
                                            <i class="fa fa-times showbtns" aria-hidden="true"></i>
                                        </a>
                                        <span class="striks pull-right showbtns">|</span>
                                        <a href="#" class="todoedit pull-right">
                                            <i class="fa fa-pencil showbtns" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="un-do pull-right" hidden>
                                            <i class="fa fa-repeat showbtns" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="todolist_list showactions">
                                    <div class="col-md-9 col-sm-9 col-8 nopadmar custom_textbox1">
                                        <div class="todoitemcheck checkbox checkbox-info">
                                            <input type="checkbox" class="striked">
                                            <label>
                                            </label>
                                        </div>
                                        <div class="todotext  todoitemjs">Combined with a handful of model sentence
                                        </div>
                                    </div>
                                    <div class="col-md-2  col-sm-2 col-3 todoitembtns">
                                        <a href="#" class="tododelete redcolor pull-right">
                                            <i class="fa fa-times showbtns" aria-hidden="true"></i>
                                        </a>
                                        <span class="striks pull-right showbtns">|</span>
                                        <a href="#" class="todoedit pull-right">
                                            <i class="fa fa-pencil showbtns" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="un-do pull-right" hidden>
                                            <i class="fa fa-repeat showbtns" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <div class="todolist_list adds task add_new">

                                <form id="main_input_box" class="col-12 my-2 my-lg-0">
                                    <div class="row">
                                        <div class="form-group pull-left col-lg-9 col-md-8 col-sm-7 pr-md-0 col-12">
                                            <label class="control-label sr-only" for="custom_textbox">Add Task</label>
                                            <input id="custom_textbox" name="item" type="text" required
                                                   placeholder="Add list item here" class="form-control mr-sm-2" aria-label="text"/>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-sm-3 pl-md-0  col-12">
                                            <input type="submit" value="Add Task"
                                                   class="btn btn-primary add_button add_task"/>
                                            <input type="button" value="Save" class="btn btn-info save_todo"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row social_popup">
                <div class="col-11 col-sm-10 col-md-6 offset-md-2 social_popup_icons">
                    <div class="social-icons">
                        <div><i class="fa fa-google google" aria-hidden="true"></i></div>
                        <div><i class="fa fa-facebook facebook" aria-hidden="true"></i></div>
                        <div><i class="fa fa-twitter twitter" aria-hidden="true"></i></div>
                        <div><i class="fa fa-linkedin linkedin" aria-hidden="true"></i></div>
                        <div><i class="fa fa-youtube-square youtube" aria-hidden="true"></i></div>
                        <div><i class="fa fa-dribbble dribbble" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div id="right">
                <div id="slim2">
                    <div class="rightsidebar-right">
                        <div class="rightsidebar-right-content">
                            <h5 class="rightsidebar-right-heading rightsidebar-right-heading-first text-uppercase text-xs">
                                <i class="menu-icon  fa fa-fw fa-paw"></i> Contacts
                            </h5>
                            <ul class="list-unstyled margin-none">
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{asset('/')}}assets/admin/img/authors/avatar1.jpg" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-primary"></i> Alanis
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{asset('/')}}assets/admin/img/authors/avatar.jpg" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-primary"></i> Rolando
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{asset('/')}}assets/admin/img/authors/avatar2.jpg" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-primary"></i> Marlee
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{asset('/')}}assets/admin/img/authors/avatar3.jpg" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-warning"></i> Marlee
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{asset('/')}}assets/admin/img/authors/avatar4.jpg" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-danger"></i> Kamryn
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{asset('/')}}assets/admin/img/authors/avatar5.jpg" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-muted"></i> Cielo
                                    </a>
                                </li>
                                <li class="rightsidebar-contact-wrapper">
                                    <a class="rightsidebar-contact" href="#">
                                        <img src="{{asset('/')}}assets/admin/img/authors/avatar7.jpg" height="20" width="20"
                                             class="rounded-circle pull-right" alt="avatar-image">
                                        <i class="fa fa-circle text-xs text-muted"></i> Charlene
                                    </a>
                                </li>
                            </ul>
                            <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                <i class="fa fa-fw fa-tasks"></i> Tasks
                            </h5>
                            <ul class="list-unstyled m-t-25">
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <small class="pull-right text-muted">
                                                40% Complete
                                            </small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-success" role="progressbar"
                                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 40%">
                                                    <span class="sr-only">
                                                        40% Complete (success)
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <small class="pull-right text-muted">
                                                20% Complete
                                            </small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 20%">
                                                    <span class="sr-only">
                                                        20% Complete
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <small class="pull-right text-muted">
                                                60% Complete
                                            </small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 60%">
                                                    <span class="sr-only">
                                                        60% Complete (warning)
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <small class="pull-right text-muted">
                                                80% Complete
                                            </small>
                                        </p>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                 aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                 style="width: 80%">
                                                    <span class="sr-only">
                                                        80% Complete (danger)
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                <i class="fa fa-fw fa-group"></i> Recent Activities
                            </h5>
                            <div>
                                <ul class="list-unstyled">
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-comment fa-fw text-primary"></i> New Comment
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-twitter fa-fw text-success"></i> 3 New Followers
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-envelope fa-fw text-info"></i> Message Sent
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-tasks fa-fw text-warning"></i> New Task
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-upload fa-fw text-danger"></i> Server Rebooted
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-warning fa-fw text-primary"></i> Server Not Responding
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart fa-fw text-success"></i> New Order Placed
                                        </a>
                                    </li>
                                    <li class="rightsidebar-notification">
                                        <a href="#">
                                            <i class="fa fa-money fa-fw text-info"></i> Payment Received
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- right side bar end -->
        </section>
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
