<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('public/images/favicon.png')}}">
<title>Dashboard</title>
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

<section id="wrapper" class="login-register" >
  <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
 @csrf
  <div class="login-box">
    <div class="white-box" style="background-color: #4f5467; color: white; border: 1px solid #7c6d6d">
      <form  class="form-horizontal form-material" id="loginform" action="index.html">
        <h3 class="box-title m-b-20 text-center" style="color: white;">Login</h3>

        <div class="form-group ">
          <div class="col-xs-12">
           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Masukkan Email"  required autofocus>
            @if ($errors->has('email'))
             <span class="invalid-feedback" role="alert">
             {{ $errors->first('email') }}
             </span>
            @endif
           </div>
        </div>

        <div class="form-group">
          <div class="col-xs-12">
            <input  autocomplete="off"  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Masukkan Password" name="password" required>
            @if ($errors->has('password'))
             <span class="invalid-feedback" role="alert">
             <strong>{{ $errors->first('password') }}</strong>
             </span>
             @endif
         </div>
        </div>



    <div class="form-group">
      <button class="btn btn-primary submit-btn btn-block" type="submit" style="border-radius:0px;">Login</button>
    </div>
 </div>
     </div>


      </form>

    </div>
  </div>
</form>
</section>
</div>
</body>
</html>



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
<!--Style Switcher -->

<style type="text/css">
 .form-control
  {
 margin-bottom: 20px;
 }

 .login-register {
    background: #574d4d52;
    height: 100%;
    position: fixed;
}
img {
    vertical-align: middle;
    height: 35px;
}
</style>
