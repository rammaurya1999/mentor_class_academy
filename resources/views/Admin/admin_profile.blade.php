<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Profile| General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/plugins')}}/dist/css/adminlte.min.css">

</head>
<style type="text/css">
  .card-body{

    margin-left: 180px;
  }
  
  .form-group.imgprofile {
    margin-bottom: 1rem;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid #ebecec;
    margin: 0 auto;
}
.form-group.imgprofile img{
    width: 100%;
    object-fit: cover;
    height: 100%;
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
            <h1>My Profile</h1>
          </div>
          <!-- <div class="col-sm-6">
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">My Profile</h3>
              </div>

               <!-- @if (Session::has('update')) -->
        <!-- <li style="color: green;">{!! session('update') !!}</li> -->
   <!-- @endif -->
   <form method="post" action="{{url('admin/UpdateProfile')}}" enctype="multipart/form-data"> 
              <!-- /.card-header -->
              <!-- form start -->
              @csrf
                
                 <div class="card-body admin-profile-aligment">
                  <div class="row"> 
                   <div class="col-md-4">
                    <div class="user-admin-profile-img">
                     <div class="form-group imgprofile">
                      <img src="{{url('admin_logo/'.$admin_data->image)}}" class="center" >
                    </div>
                    <div class="form-group" >
                     <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" accept="image/*">
                    </div>
                    <span id="imggg" style="color: red;"></span> 
                    </div> 
                   </div> 
                   <div class="col-md-8">
                    <div class="user-detail-input-box">
                     <div class="row">
                      <div class="col-md-12">
                       <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter name here" value="{{$admin_data->admin_name}}" required >
                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="admin_id"  value="{{$admin_data->id}}"  >
                        <input type="hidden" class="form-control" id="exampleInputEmail1" name="editimage"  value="{{$admin_data->image}}"  >
                      </div> 
                      </div>
                      <div class="col-md-6">
                       <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control " id="exampleInputEmail1" placeholder="Enter email here" value="{{$admin_data->admin_email}}" required>
                      </div> 
                      </div>
                      <div class="col-md-6">
                       <div class="form-group">
                        <label >Mobile Number</label>
                         <input type="text" name="mobile" class="form-control " placeholder="Enter mobile number here" value="{{$admin_data->mobile_number}}" required>
                       </div> 
                      </div>
                      <div class="col-md-12">
                       <div class="form-group">
                        <label >Address</label>
                        <input type="text" name="address" class="form-control " placeholder="Enter address here" value="{{$admin_data->address}}" required >
                        </div>
                      </div> 
                     </div>
                    
                     <div class="card-footer">
                        <input type="submit" value="Update" class="btn btn-primary">
               </div> 
                    </div>
                   </div>
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
    <strong style="margin-left:300px;">Copyright &copy; 2014-2020 <a href="https://adminlte.io">FindDoctors</a>.</strong> All rights reserved.
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
$(function () {
  bsCustomFileInput.init();
});
</script>

<script type="text/javascript">


 $(document).ready(function(){
  $("#bt").click(function(){
    
    var pass = $(".pass").val();
    var confirm = $(".confirm").val();

if (confirm !== pass){

     $("#cp").append("<b>change password must be same as new password</b>");

}

  });
});



</script>

</body>
</html>
