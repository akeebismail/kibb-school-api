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
    <link href="{{asset('front/css/theme/default.css')}}" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="{{asset('fronts/plugins/jquery-jvectormap/jquery-jvectormap.css')}}" rel="stylesheet" />
    <link href="{{asset('fronts/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css')}}" rel="stylesheet" />
    <link href="{{asset('fronts/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->


    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{asset('fronts//plugins/pace/pace.min.js')}}"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body>
    @yield('main')
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
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{asset('fronts/plugins/gritter/js/jquery.gritter.js')}}"></script>
    <script src="{{asset('fronts/plugins/flot/jquery.flot.min.js')}}"></script>
    <script src="{{asset('fronts/plugins/flot/jquery.flot.time.min.js')}}"></script>
    <script src="{{asset('fronts/plugins/flot/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('fronts/plugins/flot/jquery.flot.pie.min.js')}}"></script>
    <script src="{{asset('fronts/plugins/sparkline/jquery.sparkline.js')}}"></script>
    <script src="{{asset('fronts/plugins/jquery-jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('fronts/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('fronts/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('fronts/js/dashboard.min.js')}}"></script>
    <script src="{{asset('fronts/js/apps.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
        });
    </script>
    <!-- ================== END PAGE LEVEL JS ================== -->

</body>
</html>
