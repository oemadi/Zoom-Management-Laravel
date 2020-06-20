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
<body>
<!-- Preloader -->
<!-- <div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div> -->
<section id="wrapper" class="login-register">
  <div class="login-box">
    <div class="white-box">

      <form class="form-horizontal form-material" id="loginform" action="index.html">
        <h3 class="box-title m-b-20">Sign In</h3>
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
               name="name" value="{{ old('name') }}" required autofocus placeholder="Nama">
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
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
               name="alamat" value="{{ old('name') }}" required autofocus placeholder="Alamat">
                 @if ($errors->has('name'))
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('name') }}</strong>
                     </span>
                 @endif
          </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
             <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required  autofocus placeholder="Email">
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
            <p>Already have an account? <a href="login.html" class="text-primary m-l-5"><b>Sign In</b></a></p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
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
