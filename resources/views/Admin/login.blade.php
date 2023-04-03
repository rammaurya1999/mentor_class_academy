<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Admin| Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('plugins/')}}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{url('/')}}/upload/css/custom.css">
  <style>
      .error_msg{ display:none; }
      img {
    vertical-align: middle;
    border-style: none;
    height: 150px;
    width: 359px;
}
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
   <!-- <img src="https://itdevelopmentservices.com/finddoctor/public/images/logo.png" alt="logo"> -->
   <img src="{{url('public/images/mentor.png')}}" alt="logo">
  </div>
  <!-- /.login-logo -->
  <!--@if (Session::has('wrong'))-->
  <!--      <li>{!! session('wrong') !!}</li>-->
  <!-- @endif-->
  <li class="error_msg"></li>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control name" class="name" name="name" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control password" class="password" name="password" placeholder="Password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" >
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="button" value="Sign In" id="adminlogin" class="btn btn-primary btn-block">
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p> -->
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{url('/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/plugins')}}/dist/js/adminlte.min.js"></script>
<script>
$('#adminlogin').click(function(){
  var name = $('.name').val();
  var password = $('.password').val();
  var token = "<?=csrf_token()?>";
  if(!name){
    $('.name').css('border','1px solid red');
  }else if(!password){
    $('.password').css('border','1px solid red');
  } else{
    $('.name').css('border','');
    $('.password').css('border','')
  }
  $.ajax({
    type:"POST",
    url:"{{url('loginSuccess')}}",
    data:{name:name,password:password,_token:token},
    success:function(data){
      console.log(data);
      if($.trim(data)=="done"){
        window.location.href="{{url('admin/dashboard')}}";
      } else{
        $('.error_msg').css('display','block');
        $('.error_msg').text("Username or Password inccorect!");
      }
    }
  });
});
</script>

</body>
</html>
