<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DATIKA Shop Backend</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/backend/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backend/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/backend/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backend/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/backend/admin/dist/css/skins/_all-skins.min.css">
  {{-- Morris chart --}}
  {{-- <link rel="stylesheet" href="/backend/admin/bower_components/morris.js/morris.css"> --}}
  <!-- jvectormap -->
  <link rel="stylesheet" href="/backend/admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/backend/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  {{-- Daterange picker --}}
  <link rel="stylesheet" href="/backend/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  {{-- bootstrap wysihtml5 - text editor --}}
  <link rel="stylesheet" href="/backend/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  {{-- DataTables --}}
  <link rel="stylesheet" href="/backend/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  {{-- admin css --}}
  {{--<link rel="stylesheet" href="/css/admin.css">--}}
  <link rel="stylesheet" href="/css/admin.css">

  {{-- jQuery 3 --}}
  <script src="/backend/admin/bower_components/jquery/dist/jquery.min.js"></script>

  {{-- jQuery UI 1.11.4 --}}
  <script src="/backend/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>

  @include('backend.layout.partial.style_header')

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
  @stack('css')
  @include('log-viewer::_template.style')
</head>
<body class="fixed sidebar-mini sidebar-mini-expand-feature skin-red">
<div class="wrapper">
  @include('backend.layout.partial.top-navigation')
  @include('backend.layout.partial.left-navigation')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>

      {{--{{ Breadcrumbs::render() }}--}}

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          @include('flash::message')
          @if (isset($errors) && count($errors))
            <div class="alert alert-danger alert-dismissible alert-absolute">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h4><i class="icon fa fa-ban"></i> Errors!</h4>
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>
      </div>
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('backend.layout.partial.footer')
  {{-- @include('backend.layout.partial.control-sidebar') --}}
  {{--   Add the sidebar's background. This div must be placed immediately after the control sidebar --}}
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{{--<script>--}}
  {{--$.widget.bridge('uibutton', $.ui.button);--}}
{{--</script>--}}
<!-- Bootstrap 3.3.7 -->
<script src="/backend/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
{{-- Morris.js charts --}}
{{--<script src="/backend/admin/bower_components/raphael/raphael.min.js"></script>--}}
{{--<script src="/backend/admin/bower_components/morris.js/morris.min.js"></script>--}}

{{-- Sparkline --}}
{{-- <script src="/backend/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script> --}}

{{-- jvectormap --}}
{{-- <script src="/backend/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script> --}}
{{-- <script src="/backend/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> --}}

{{-- jQuery Knob Chart --}}
{{-- <script src="/backend/admin/bower_components/jquery-knob/dist/jquery.knob.min.js"></script> --}}

<!-- daterangepicker -->
<script src="/backend/admin/bower_components/moment/min/moment.min.js"></script>
<script src="/backend/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/backend/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/backend/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/backend/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/backend/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/backend/admin/dist/js/adminlte.min.js"></script>
{{-- AdminLTE dashboard demo (This is only for demo purposes) --}}
{{-- <script src="/backend/admin/dist/js/pages/dashboard.js"></script> --}}
{{-- AdminLTE for demo purposes --}}
{{-- <script src="/backend/admin/dist/js/demo.js"></script> --}}

{{-- DataTables --}}
<script src="/backend/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/backend/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/js/admin.js"></script>
@include('backend.layout.partial.script_footer')
@stack('js')
{{--Log View--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment-with-locales.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/js/bootstrap-datetimepicker.min.js"></script>
<script>
    Chart.defaults.global.responsive      = true;
    Chart.defaults.global.scaleFontFamily = "'Source Sans Pro'";
    Chart.defaults.global.animationEasing = "easeOutQuart";
</script>
@yield('modals')
@yield('scripts')
</body>
</html>
