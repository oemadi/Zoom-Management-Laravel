<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/images/favicon.png')}}">
<<<<<<< HEAD
<title>Daftar</title>
=======
<title>SELAMAT DATANG</title>
>>>>>>> 81e2a8088923e12142692814006d03869ed27ea5
  <!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Bootstrap Core CSS -->
<link href="{{url('public/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{url('public/css/animate.css')}}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{url('public/css/style.css')}}" rel="stylesheet">

<!-- scripts -->
</head>
<!-- color CSS -->
<body style="background: #f9fcfe">
<div class="container">
    <div class="row">
<div class="col-md-4">
</div>
 <div class="col-md-4">
<div class="panel panel-info">
<div class="panel-heading" style="text-align: center;">Login</div>
<div class="panel-wrapper collapse in" aria-expanded="true">
<div class="panel-body">
<<<<<<< HEAD
            <div class="box-body">
             @if (Session::has('ckosong'))
              <div class="alert alert-danger alert-dismissable">{{ Session::get('ckosong') }}
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              </div>
             @endif
            </div><div class="box-body">
             @if (Session::has('gagal'))
              <div class="alert alert-danger alert-dismissable">{{ Session::get('gagal') }}
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              </div>
             @endif
            </div>
            <div class="box-body">
             @if (Session::has('check'))
              <div class="alert alert-danger alert-dismissable">{{ Session::get('check') }}
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              </div>
             @endif
            </div>

            <div class="box-body">
             @if (Session::has('succes'))
              <div class="alert alert-success alert-dismissable">{{ Session::get('succes') }}
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               </div>
             @endif
            </div>
=======

>>>>>>> 81e2a8088923e12142692814006d03869ed27ea5
<form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="form-horizontal form-material">
 @csrf
    <div class="form-group ">
      <div class="col-xs-12">
<<<<<<< HEAD
       <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Masukkan Email"  required autofocus>
            @if ($errors->has('email'))
=======
       <input id="nik" type="nik" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" name="nik" value="{{ old('nik') }}" placeholder="Masukkan Nik"  required autofocus>
            @if ($errors->has('nik'))
>>>>>>> 81e2a8088923e12142692814006d03869ed27ea5
             <span class="invalid-feedback" role="alert">
             {{ $errors->first('nik') }}
             </span>
            @endif
      </div>
    </div>
     <div class="form-group ">
       <div class="col-xs-12">
<<<<<<< HEAD
         <input  autocomplete="off"  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Masukkan Password" name="password" required>
=======
         <input  autocomplete="off"  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Masukkan 8 digit Nik/Nip dari pertama" name="password" required>
>>>>>>> 81e2a8088923e12142692814006d03869ed27ea5
            @if ($errors->has('password'))
             <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('password') }}</strong>
             </span>
             @endif
          </div>
        </div>
         <div class="form-group">
          <button class="btn btn-info submit-btn btn-block" type="submit" style="border-radius:0px;">Login</button>
        </div>
     </div>
     </div>
      </form>
    </div>
   </div>
 </div>
</div>
</div>
</div>
</div>
</body>
</html>
<!-- jQuery -->
<script src="{{url('public/plugins/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{url('public/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{url('public/plugins/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
<!--slimscroll JavaScript -->
<script src="{{url('public/js/jquery.slimscroll.js')}}"></script>
<!--Wave Effects -->
<!-- Custom Theme JavaScript -->
<script src="{{url('public/js/custom.min.js')}}"></script>
<style type="text/css">
    .panel {
     border-radius: 0;
      margin-bottom: 15px;
      border: 1px solid #e4dfdf;
      margin: 5% auto 0;
     width: 100%; }
     html {
    position: relative;
    min-height: 100%;
    background: #f9fcfe;
}
</style>
