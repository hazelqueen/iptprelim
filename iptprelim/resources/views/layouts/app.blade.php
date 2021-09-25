<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
          rel="stylesheet">
          
    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css"
          integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ=="
          crossorigin="anonymous"/>

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
          integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
          crossorigin="anonymous"/>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
          integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
          crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="data:image/jpeg;base64,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"
                         class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="data:image/jpeg;base64,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"
                             class="img-circle elevation-2"
                             alt="User Image">
                        <p>
                            {{ Auth::user()->name }}
                            <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.something
        </div>
        <strong>Copyright &copy; {{ date('Y') }} <a href="https://adminlte.io">{{ env('APP_NAME') }}</a>.</strong> All rights
        reversed.
    </footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" 
        crossorigin="anonymous"></script>
        
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js"
        integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA=="
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"
        integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg=="
        crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
        integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg=="
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous"></script>
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.min.js" integrity="sha512-J+763o/bd3r9iW+gFEqTaeyi+uAphmzkE/zU8FxY6iAvD3nQKXa+ZAWkBI9QS9QkYEKddQoiy0I5GDxKf/ORBA==" crossorigin="anonymous"></script>

<script>
    $(function () {
        bsCustomFileInput.init();
    });
    
    $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

        /** add active class and stay opened when selected */
    var url = window.location;

    // for sidebar menu entirely but not cover treeview
    $('ul.nav-sidebar a').filter(function() {
        return this.href == url;
    }).addClass('active');

    // for treeview
    $('ul.nav-treeview a').filter(function() {
        return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');

</script>

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>
