<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'online result monitoring system') }}</title>

    <!-- Styles -->
    <!-- Bootstrap -->
    <link href="{{ url('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href={{url('assets/vendors/font-awesome/css/font-awesome.min.css')}} rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href={{url('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')}} rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href={{url('assets/css/custom.min.css')}} rel="stylesheet">

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <!-- Scripts -->
    <script>
        window.Laravel ={!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                </div>
                <!-- /menu profile quick info -->
                <br />
                @include('includes.sidebar')
                @include('includes.head')
            </div>
        </div>
        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
                @yield('content')
            <!-- /top tiles -->
            <div class="row">
                <br />
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- /footer content -->
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>





    <!-- Scripts -->
    <!-- jQuery -->
    <script src={{url('assets/vendors/jquery/dist/jquery.min.js')}}></script>
    <!-- Bootstrap -->
    <script src={{url('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}></script>
    <!-- FastClick -->
    <script src={{url('assets/vendors/fastclick/lib/fastclick.js')}}></script>
    <!-- NProgress -->
    <script src={{url ('assets/vendors/nprogress/nprogress.js')}}></script>
    <!-- Chart.js -->
    <!-- gauge.js -->
    <script src={{url('assets/vendors/gauge.js/dist/gauge.min.js')}}></script>
    <!-- bootstrap-progressbar -->
    <script src={{url("assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js")}}></script>
    <!-- iCheck -->
    <script src={{url("assets/vendors/iCheck/icheck.min.js")}}></script>
    <!-- Skycons -->
    <script src={{url("assets/vendors/skycons/skycons.js")}}></script>
    <!-- Flot -->
    <script src={{url("assets/vendors/Flot/jquery.flot.js")}}></script>
    <script src={{url("assets/vendors/Flot/jquery.flot.pie.js")}}></script>
    <script src={{url("assets/vendors/Flot/jquery.flot.time.js")}}></script>
    <script src={{url("assets/vendors/Flot/jquery.flot.stack.js")}}></script>
    <script src={{url("assets/vendors/Flot/jquery.flot.resize.js")}}></script>
    <!-- Flot plugins -->
    <script src={{("assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js")}}></script>
    <script src={{url("assets/vendors/flot-spline/js/jquery.flot.spline.min.js")}}></script>
    <script src={{url('assets/vendors/flot.curvedlines/curvedLines.js')}}></script>
    <!-- DateJS -->
    <script src={{url("assets/vendors/DateJS/build/date.js")}}></script>
    <!-- JQVMap -->
    <script src={{url("assets/vendors/jqvmap/dist/jquery.vmap.js")}}></script>
    <script src={{url("assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js")}}></script>
    <script src={{url("assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js")}}></script>
    <!-- bootstrap-daterangepicker -->
    <script src={{url("assets/vendors/moment/min/moment.min.js")}}></script>
    <script src={{url("assets/vendors/bootstrap-daterangepicker/daterangepicker.js")}}></script>

    <!-- Custom Theme Scripts -->
    <script src={{url("assets/build/js/custom.min.js")}}></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>
    $('#dob').datepicker();
</script>
</body>
</html>
