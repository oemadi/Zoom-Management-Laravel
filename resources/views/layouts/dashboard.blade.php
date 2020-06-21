<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="{{url('')}}/public/images/favicon.png">
<title>automataseminar</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Bootstrap Core CSS -->
<link href="{{url('')}}/public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="{{url('')}}/public/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

 <link href="{{url('')}}/public/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{url('')}}/public/plugins/dropify/dist/css/dropify.min.css">
<link href="{{url('')}}/public/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/public/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<link href="{{url('')}}/public/plugins/icheck/skins/all.css" rel="stylesheet">
<link href="{{url('')}}/public/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">

<!-- Menu CSS -->
<link href="{{url('')}}/public/plugins/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
<!-- morris CSS -->
<!-- animation CSS -->
<link href="{{url('')}}/public/css/animate.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{url('')}}/public/css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="{{url('')}}/public/plugins/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />



 <link href="{{url('')}}/public/css/colors/gray-dark.css" id="theme"  rel="stylesheet">
<link href="{{url('')}}/public/plugins/custom-select/custom-select.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/public/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
<link href="{{url('')}}/public/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
<link href="{{url('')}}/public/plugins/summernote/dist/summernote.css" rel="stylesheet" />
<link href="{{url('')}}/public/js/buttons.dataTables.min.css" rel="stylesheet" />
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<div id="wrapper">


  <!-- Top Navigation -->
  <nav class="navbar navbar-default navbar-static-top m-b-0">
    <div style="background: #350970;" class="navbar-header">
	<a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>

      <div style="background: #350970;" class="top-left-part">
      <p class="text-center" style="padding-top:20px;font-weight:bold">AUTO EO</p>
      </div>

      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>

      </ul>

    </div>

  </nav>

      @include('layouts.sidebar')


  <!-- Page Content -->
  <div id="page-wrapper" >
    <div class="container-fluid">
      <!-- .row -->
        @yield('content')

    <footer class="footer text-center"> 2020 &copy; Admin  </footer>
  </div>
  <!-- /#page-wrapper -->
</div>

<!-- /#wrapper -->
<!-- jQuery -->

<script src="{{url('')}}/public/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{url('')}}/public/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{url('')}}/public/plugins/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="{{url('')}}/public/js/jquery.slimscroll.js"></script>
<!--Morris JavaScript -->
<script src="{{url('')}}/public/plugins/raphael/raphael-min.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{url('')}}/public/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- jQuery peity -->
<script src="{{url('')}}/public/plugins/peity/jquery.peity.min.js"></script>
<script src="{{url('')}}/public/plugins/peity/jquery.peity.init.js"></script>
<!--Wave Effects -->
<script src="{{url('')}}/public/js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="{{url('')}}/public/js/custom.min.js"></script>

 <script src="{{url('')}}/public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('')}}/public/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>

<link href="{{url('')}}/public/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />

<script src="{{url('')}}/public/plugins/sweetalert/sweetalert.min.js"></script>
<script src="{{url('')}}/public/plugins/sweetalert/jquery.sweet-alert.custom.js"></script>

<script src="{{url('')}}/public/plugins/custom-select/custom-select.min.js" type="text/javascript"></script>
<script src="{{url('')}}/public/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{{url('')}}/public/plugins/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="{{url('')}}/public/plugins/dropify/dist/js/dropify.min.js"></script>
<script type="text/javascript" src="{{url('')}}/public/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="{{url('')}}/public/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="{{url('')}}/public/plugins/summernote/dist/summernote.min.js"></script>
<script src="{{url('')}}/public/plugins/icheck/icheck.min.js"></script>
<script src="{{url('')}}/public/plugins/icheck/icheck.init.js"></script>
<script src="{{url('')}}/public/js/cbpFWTabs.js"></script>
<script type="text/javascript" src="{{url('')}}/public/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="{{url('')}}/public/js/jszip.min.js"></script>
<script type="text/javascript" src="{{url('')}}/public/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="{{url('')}}/public/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
</body>
</html>


<style type="text/css">
   .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 15px 8px;
    font-size: 12px;
}
b {
    font-weight: 300;
}
label {
    font-weight: 300;
}
.container-fluid {
    background: none;
  }

</style>
