<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('assets/dasboard/js/Chart.js') }}"></script>

    <title>@yield('title')</title>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<script src="{{ asset('assets/dasboard/js/core/jquery.3.2.1.min.js') }} " type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/dasboard/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/dasboard/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="{{ asset('assets/dasboard/css/bootstrap.min.css') }} " rel="stylesheet" />
    <link href="{{ asset('assets/dasboard/css/light-bootstrap-dashboard.css?v=2.0.0 ') }} " rel="stylesheet" />
    <link href="{{ asset('assets/dasboard/css/sb-admin-2.css ') }} " rel="stylesheet" />
    
</head>
<body"> 
<div class="wrapper">
        <div class="sidebar" data-image=" {{ asset('assets/dasboard/img/sidebar-5.jpg ') }}" data-color="blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Lab Kedungdoro
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/dashboard') }}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Master Data</p>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master :</h6>
                        <a class="collapse-item" href="{{ url('/pasien') }}">Pasien</a>
                        <a class="collapse-item" href="{{ url('/instansi') }}">Instansi</a>
                        <a class="collapse-item" href="{{ url('/test') }}">Test</a>
                    </div>
                </div>
            </li>
                    <li>
                        <a class="nav-link" href="{{ url('/pemeriksaan') }}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Pemeriksaan</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('/laporan') }}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Laporan</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('/tagihan') }}">
                            <i class="nc-icon nc-atom"></i>
                            <p>Tagihan</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <span class="d-lg-none">Dasboard</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" 
                                aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/logout') }}">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

        <main>
            @yield('content')
        </main>
    </div>
</body>


<script src="{{ asset('assets/dasboard/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/dasboard/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('assets/dasboard/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->

<!--  Chartist Plugin  -->

<!--  Notifications Plugin    -->
<script src="{{ asset('assets/dasboard/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('assets/dasboard/js/light-bootstrap-dashboard.js?v=2.0.0 ') }} " type="text/javascript"></script>
<script src="{{ asset('assets/dasboard/js/sb-admin-2.js ') }} " type="text/javascript"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript">


    
</script>
</html>