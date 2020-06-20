<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/images/favicon.png')}}">
<title>Daftar</title>
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
<div class="col-md-3">
</div>
 <div class="col-md-6">
<div class="panel panel-info">
            <div class="panel-heading" style="text-align: center;">Daftar</div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body">
                 <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" class="form-horizontal form-material" >
        @csrf
        <div class="form-group ">
          <div class="col-xs-12">
              <input id="nik" type="text" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}"
               name="nik" value="{{ old('nik') }}" required autofocus placeholder="Nik">
                 @if ($errors->has('nik'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('nik') }}</strong>
                     </span>
                 @endif
          </div>
        </div>
         <div class="form-group ">
          <div class="col-xs-12">
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
               name="name" value="{{ old('name') }}" required autofocus placeholder="Nama" autocomplete="off">
                 @if ($errors->has('name'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('name') }}</strong>
                     </span>
                 @endif
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
               name="hp" value="{{ old('name') }}" required autofocus placeholder="HP">
                 @if ($errors->has('name'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('name') }}</strong>
                     </span>
                 @endif
          </div>
        </div>
         <div class="form-group ">
          <div class="col-xs-12">
            <textarea class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
               name="alamat" value="{{ old('name') }}" required autofocus placeholder="Alamat" rows="4" cols="50"></textarea>
                 @if ($errors->has('name'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('name') }}</strong>
                     </span>
                 @endif
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  required  autofocus placeholder="Alamat Email" autocomplete="off">
             @if ($errors->has('email'))
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('email') }}</strong>
                 </span>
             @endif
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
           <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="tahun_kerja_terakhir" value="{{ old('name') }}" required autofocus placeholder="Tahun kerja Terakhir">
           @if ($errors->has('name'))
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('name') }}</strong>
               </span>
           @endif
          </div>
        </div>
         <div class="form-group ">
          <div class="col-xs-12">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="usia" value="{{ old('name') }}" required autofocus placeholder="Usia">

             @if ($errors->has('name'))
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('name') }}</strong>
                 </span>
             @endif
          </div>
        </div>

         <div class="form-group ">
          <div class="col-xs-12">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
             @if ($errors->has('password'))
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('password') }}</strong>
                 </span>
             @endif
          </div>
        </div>

         <div class="form-group ">
          <div class="col-xs-12">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
        </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup">Saya menyetujui semua Ketentuan<a href="#">Terms</a></label>
            </div>
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Sudah memiliki akun ? <a href="{{route('login')}}" class="text-primary m-l-5"><b>Log in</b></a></p>
          </div>
        </div>
      </form>
    </div>
     </div>
    </div>
              </div>
            </div>
          </div>
<!-- <section id="wrapper" class="">
  <div class="login-box">
    <div class="white-box" style="margin-top: -20%;">
       <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" class="form-horizontal form-material" >
        @csrf
        <h3 class="box-title m-b-20 text-center">Daftar</h3>
        <div class="form-group ">
          <div class="col-xs-12">
              <input id="nik" type="text" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}"
               name="nik" value="{{ old('nik') }}" required autofocus placeholder="Nik">
                 @if ($errors->has('nik'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('nik') }}</strong>
                     </span>
                 @endif
          </div>
        </div>
         <div class="form-group ">
          <div class="col-xs-12">
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
               name="name" value="{{ old('name') }}" required autofocus placeholder="Nama" autocomplete="off">
                 @if ($errors->has('name'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('name') }}</strong>
                     </span>
                 @endif
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
               name="hp" value="{{ old('name') }}" required autofocus placeholder="HP">
                 @if ($errors->has('name'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('name') }}</strong>
                     </span>
                 @endif
          </div>
        </div>
         <div class="form-group ">
          <div class="col-xs-12">
            <textarea class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
               name="alamat" value="{{ old('name') }}" required autofocus placeholder="Alamat" rows="4" cols="50"></textarea>
                 @if ($errors->has('name'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('name') }}</strong>
                     </span>
                 @endif
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  required  autofocus placeholder="Alamat Email" autocomplete="off">
             @if ($errors->has('email'))
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('email') }}</strong>
                 </span>
             @endif
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
           <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="tahun_kerja_terakhir" value="{{ old('name') }}" required autofocus placeholder="Tahun kerja Terakhir">
           @if ($errors->has('name'))
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $errors->first('name') }}</strong>
               </span>
           @endif
          </div>
        </div>
         <div class="form-group ">
          <div class="col-xs-12">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="usia" value="{{ old('name') }}" required autofocus placeholder="Usia">

             @if ($errors->has('name'))
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('name') }}</strong>
                 </span>
             @endif
          </div>
        </div>

         <div class="form-group ">
          <div class="col-xs-12">
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
             @if ($errors->has('password'))
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('password') }}</strong>
                 </span>
             @endif
          </div>
        </div>

         <div class="form-group ">
          <div class="col-xs-12">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
        </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
            </div>
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
          </div>
        </div>
        <div class="form-group m-b-0">
          <div class="col-sm-12 text-center">
            <p>Sudah memiliki akun ? <a href="{{route('login')}}" class="text-primary m-l-5"><b>Log in</b></a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section> -->
</div>
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
</body>
</html>
<style type="text/css">
    .panel {
     border-radius: 0;
      margin-bottom: 15px;
      border: 1px solid #e4dfdf;
      margin: 5% auto 0;
     width: 100%; }
</style>
