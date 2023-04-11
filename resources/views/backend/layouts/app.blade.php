<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> BMRC | @yield('title') </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('backend')}}/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('backend')}}/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini login-page">
<div class="wrapper">
    <!-- Navbar -->
    @include('backend.partials.nav')
    <!-- /.navbar -->
    @include('backend.partials.sidebar')
    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content-wrapper -->
{{--    @include('backend.partials.footer')--}}
    @include('backend.partials.footer')

</div>

<script src="{{asset('backend')}}/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('backend')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('backend')}}/js/adminlte.js"></script>
<script src="{{asset('backend')}}/plugins/chart.js/Chart.min.js"></script>
<script src="{{asset('backend')}}/js/pages/dashboard3.js"></script>
</body>
</html>
