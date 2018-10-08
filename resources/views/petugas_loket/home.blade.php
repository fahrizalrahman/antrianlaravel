@extends('layouts.app_petugas_loket')

@section('header_script')
<link rel="stylesheet" href="http://antrian.local/plugins/font-awesome/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="http://antrian.local/dist/css/adminlte.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="http://antrian.local/plugins/iCheck/flat/blue.css">
      <!-- Morris chart -->
      <link rel="stylesheet" href="http://antrian.local/plugins/morris/morris.css">
      <!-- jvectormap -->
      <link rel="stylesheet" href="http://antrian.local/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
      <!-- Date Picker -->
      <link rel="stylesheet" href="http://antrian.local/plugins/datepicker/datepicker3.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="http://antrian.local/plugins/daterangepicker/daterangepicker-bs3.css">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="http://antrian.local/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
             
      <link rel="stylesheet" href="http://antrian.local/plugins/datatables/dataTables.bootstrap4.css">
@endsection

@section('content')
  <div class="content-wrapper">
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6"><h1>Dashboard</h1></div>
              </div>
          </div>
      </section>
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card card-info">
                          <div class="card-header">
                              <h3 class="card-title">Pengunjung</h3>
                              <div class="card-tools">
                                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                              </div>
                          </div>
                          <div class="card-body">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </div>

@endsection

@section('footer_script')

<script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="http://antrian.local/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://antrian.local/plugins/morris/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="http://antrian.local/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="http://antrian.local/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="http://antrian.local/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="http://antrian.local/plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
        <script src="http://antrian.local/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="http://antrian.local/plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="http://antrian.local/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="http://antrian.local/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="http://antrian.local/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="http://antrian.local/plugins/chartjs-old/Chart.min.js"></script>
        <script src="http://antrian.local/dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="http://antrian.local/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="http://antrian.local/dist/js/demo.js"></script>
@endsection