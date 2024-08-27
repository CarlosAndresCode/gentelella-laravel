<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/ico" />
    <title> System - {{ $titlePage ?? ''}} </title>

    <!-- Bootstrap -->
    <link href="{{ asset('asset/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('asset/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('asset/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('asset/build/css/custom.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <x-partials.logo route="/dashboard" emoji="fa fa-users" title="LOGO"></x-partials.logo>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <x-partials.profile-info nameUser="{{ Auth::user()->name }}"></x-partials.profile-info>
                <!-- /menu profile quick info -->

                <!-- sidebar menu -->
                <x-partials.nav></x-partials.nav>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <x-partials.footer-buttons></x-partials.footer-buttons>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <x-partials.top-nav></x-partials.top-nav>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            {{ $slot }}
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <x-partials.footer></x-partials.footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="{{ asset('asset/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('asset/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('asset/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('asset/vendors/nprogress/nprogress.js') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset('asset/build/js/custom.min.js') }}"></script>
</body>
</html>
