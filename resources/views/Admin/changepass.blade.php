<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Change password| General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/plugins')}}/dist/css/adminlte.min.css">

</head>
<style type="text/css">
  span{
    color: red;
  }
</style>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 @include('admin.include.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 
@include('admin.include.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
        <!--   <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">My profile</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->

            <!-- /.card -->

               <!-- @if (Session::has('message'))

               <span class="alert {{ Session::get('alert-class', 'alert-success') }}"   >{!! Session::get('message') !!}</span>
              @endif -->
       
            <!-- Horizontal Form -->
          <!--/.col (left) -->
          <!-- right column -->
       
            </div>



            <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>

               
              <!-- /.card-header -->
              <!-- form start -->
              <span class="alert alert-success" id="oldpass_success" style="display:none;">Your Password has been change successfully</span>
              <span class="alert alert-danger" id="oldpass_error" style="display:none;">Please enter correct old password</span>
              <!-- @if(Session::has('msg'))
<span class="alert alert-info">{{ Session::get('msg') }}</span>
@endif -->
                   <form > 

                @csrf
                
                <div class="card-body col-md-8 from-cover-main-area">
                  <div class="form-group">
                    <label >Old Password</label>
                    <input type="text" class="form-control old "  name="oldpass" placeholder="Enter old password" value="" >
                  </div>
                  <span id="oldpass"></span>
                 
                  <div class="form-group">
                    <label >New Password</label>
                     <input type="Password" name="newpass" class="form-control pass "  placeholder="Enter new password" value="" >
                  </div>   
                  <span id="newpass"></span>
                  <div class="form-group">
                    <label >Confirm Password</label>
                    <input type="password" name="mobile" class="form-control confirm" placeholder="Confirm password" value="" >
                  <span id="cpass"></span>
                  <div id="cp" style="color: red;"></div>
                  <input type="hidden" name="id" value="3">
               
                </div>

               <div class="form-group">
                <div class="change-password-btn-area">
                  <button type="button"  id='bt' class="btn btn-primary">Submit</button>
                </div>
                </div>
                </div>
                <!-- /.card-body -->
              </form>
              

            </div>
            <!-- /.card -->



       
            <!-- Horizontal Form -->
           

          <!--/.col (left) -->
          <!-- right column -->
       
            </div>

            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-rc
    </div>
    <strong>Copyright &copy; 2014-2020 <!-- <a href="https://adminlte.io">AdminLTE.io</a> -->.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="{{url('/')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/plugins')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/plugins')}}/dist/js/demo.js"></script>
<!-- Page specific script -->

<script>
    $(document).ready(function(){
        $('#bt').click(function(){
            var oldpass = $('.old').val();
            var password = $('.pass').val();
            var newpass   = $('.confirm').val();
            var token = '<?php echo csrf_token(); ?>'
            if(oldpass==null || oldpass =='' || oldpass==' '){
                var a = 'Please Enter the old password';
                $('#oldpass').text(a);
                return false;
            }
            else if(password == null || password == '' || password == ' '){
                var b = 'Please Enter the Password';
                $('#newpass').text(b);
                $('#oldpass').text('');
                return false;
            }
            else if(newpass == null || newpass == '' || newpass == ' '){
                var c = "Please Enter the Confirm password";
                $('#cpass').text(c);
                $('#oldpass').text('');
                $('#newpass').text('');
                return false;
            }
            else if (password!=newpass){
                var d = 'Invalid Confirm Password';       
                $('#cp').text(d);
                $('#oldpass').text('');
                $('#cpass').text('');
                $('#newpass').text('');
                return false;
            }else{
                $('#oldpass').text('');
                $('#newpass').text('');
                $('#cpass').text('');
                $('#cp').text('');

            }
            $.ajax({
                type:"POST",
                url:"{{url('admin/update_Password')}}",
                data:{oldpass:oldpass,password:password,newpass:newpass,_token:token},
                success:function(data){
                    console.log(data);
                    // location.reload();
                    if ($.trim(data) == 0){
                        $('#oldpass_success').show();
                        $('#oldpass_error').hide();
                    }
                    if ($.trim(data) == 1){
                        $('#oldpass_error').show();
                        $('#oldpass_success').hide();
                    }
                }
            })
        });

    })
</script>

</body>
</html>
