<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="../../../../fonts.googleapis.com/cssff98.css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{asset('fronts/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
    <link href="{{asset('fronts/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('fronts/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('fronts/css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('fronts/css/style.min.css')}}" rel="stylesheet" />
    <link href="{{asset('fronts/css/style-responsive.min.css')}}" rel="stylesheet" />
    <link href="{{asset('fronts/css/theme/default.css')}}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    @yield('pageCSS')
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <!-- ================== END PAGE LEVEL STYLE ================== -->


    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{asset('fronts//plugins/pace/pace.min.js')}}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body >
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->


    <!-- begin #page-container -->
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-default navbar-fixed-top">
            @yield('header')
        </div>
        <!-- end #header -->

        <!-- begin #sidebar -->
        <div id="sidebar" class="sidebar">
            @yield('sidebar')
        </div>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content">
            @yield('content')
        </div>

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>

    <!-- Scripts -->
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{asset('fronts/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('fronts/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
    <script src="{{asset('fronts/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
    <script src="{{asset('fronts/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="assets/crossbrowserjs/html5shiv.js"></script>
    <script src="assets/crossbrowserjs/respond.min.js"></script>
    <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="{{asset('fronts/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('fronts//plugins/jquery-cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('fronts/js/dashboard.min.js')}}"></script>
    <script src="{{asset('fronts/js/apps.min.js')}}"></script>
    @yield('pageScript')
    <script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
        });
    </script>
    <!-- ================== END PAGE LEVEL JS ================== -->

</body>
</html>
