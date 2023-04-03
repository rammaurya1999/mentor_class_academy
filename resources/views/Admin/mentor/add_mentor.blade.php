<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/plugins')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('upload/css/style.css')}}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style type="text/css">
   .mentor-form-img img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 2px solid #e5bc3d;
    padding: 5px;
  }

  .mentor-field label {
    color: black;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
  }

  .mentor-form-img {
    height: 150px;
    width: 150px;
  }

  .mentor-field input {
    border: 2px solid #222021;

  }

  .form-control:focus {

    box-shadow: unset;
    border-color: #ffc107;
  }

  .mentor-field ::placeholder {
    font-weight: 600;
  }

  .mentor-btn button:hover {
    background: #C58F24;
  }

  .mentor-btn {
    text-align: center;
  }

  .mentor-btn button {
    font-weight: 600;
    font-size: 17px;
    background: #000000;
    border: unset;
    padding: 10px 30px;

    transition: 0.5s;
  }


  .border-form {
box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    border-radius: 20px;
    padding: 30px;
   
  }
  .mb-3.ment-name-max {
    max-width: 85%;
    margin: auto;
}
select#language {
    padding: 5px 20px;
    background: #dbaf36;
    color: white;
    font-size: 17px;
    font-weight: 600;
}
.error {
  color: red;
}
    </style>

  <!-- end here -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('admin.include.header')
@include('admin.include.sidebar')


 

  <!-- Main Sidebar Container -->

      <!-- /.sidebar-menu -->
   
    <!-- /.sidebar -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-12" >
            <div class="col-sm-2" style="display: inline-block;">
            <h1 class="m-0" >Add Mentor</h1>
            </div>
            <!-- Start Student Data -->
            <section class="mt-5 ml-250">
    <div class="container">
      @if(session()->has('msg'))
      <span class="alert alert-success">{{('msg')}}</span>
      @endif
      <div class="row">
        <div class="col-md-10">
          <div class="border-form">
            <form class="m-auto" onsubmit="return validationMentor()" action="{{url('admin/mento_info')}}" method="post" enctype="multipart/Form-data" id="saveMentor" autocomplete="off" name="form_save">
            @csrf
            @if(isset($mentor))
              <div class="mentor-form-img m-auto">
                <img src="{{url('admin_logo/'.$mentor->mentor_image)}}" alt="">
              </div>
              @else
              <div class="mentor-form-img m-auto">
                <img src="{{asset('upload/img/image 14.png')}}" alt="">
              </div>
              @endif

              <div class="mb-3 ment-name-max text-center">
              <label class="mb-2 mt-4">Select files:</label>
              <input type="file" id="myfile" name="myfile" multiple accept=".png, .jpg, .jpeg" value="<?php if(isset($mentor)){echo $mentor->mentor_image;}?>">
              <input type="hidden" name="editimage" id="image2" value="<?php if(isset($mentor)){ echo $mentor->mentor_image; }else{  }?>" data="" >
             

            </div>

              <span id="img_err" class="error" style="display:none">Please select Image</span>
              <div class="mentor-field mt-3">
                <div class="mb-3">
                  <div class="mb-3 ment-name-max english">
                    <label for="exampleInputPassword1" class="form-label"> Mentor Name</label>
                    <input type="text" class="form-control mentor_name" name="name" id="exampleInputPassword1"
                      placeholder="Enter your mentor Name" value="<?php if(isset($mentor)){echo $mentor->mentor_name;}?>">
                      <span id="name_err" class="error" style="display:none">Please Enter Mentor Name</span>
                  </div>
                  
                  

                  <div class="mb-3 ment-name-max english">
                    <label for="exampleInputPassword1" class="form-label"> Mentor Email </label>
                    <input type="email" name="email" class="form-control mentor_password" id="exampleInputPassword1"
                      placeholder="Enter your mentor Password" value="<?php if(isset($mentor)){echo $mentor->mentor_email;}?>">
                      <span id="email_err" class="error" style="display:none">Please Enter Mentor Email</span>
                  </div>

                  <div class="mb-3 ment-name-max english english">
                    <label for="exampleInputPassword1" class="form-label"> Mentor Password</label>
                    <input type="password" name="Password" class="form-control mentor_email" id="exampleInputPassword1"
                      placeholder="enter your mentor Email" value="<?php if(isset($mentor)){echo $mentor->mentor_password;}?>">
                      <span id="pass_err" class="error" style="display:none">Please Enter Mentor Password</span>
                      
                  </div>

                  <div class="mb-3 ment-name-max english">
                    <label for="mobile" class="form-label"> Mentor Phone Number </label>
                    <input type="text" name="mobile" class="form-control mentor_number" id="mobile"
                      placeholder="Enter your mentor Phone Number" onkeypress="return event.charCode>=48&&event.charCode<=57 && value.length<10" value="<?php if(isset($mentor)){echo $mentor->mentor_phone_number;}?>">
                       <span id="mob_err" class="error" style="display:none">Please Enter Mentor Phone Number</span>
                  </div>
                  <div class="mb-3 ment-name-max english">
                    <label for="exampleInputPassword1" class="form-label"> Mentor Address </label>
                    <input type="text" name="address" class="form-control mentor_address" id="exampleInputPassword1"
                      placeholder="Enter your mentor Address" value="<?php if(isset($mentor)){echo $mentor->mentor_address;}?>">
                      <span id="address_err" class="error" style="display:none">Please Enter Mentor Address</span>
                  </div>
                  <div class="mb-3 ment-name-max english">
                    <label for="exampleInputPassword1" class="form-label"> Mentor Job</label>
                    <input type="text" name="job" class="form-control mentor_job" id="exampleInputPassword1"
                      placeholder="Enter your mentor Job" value="<?php if(isset($mentor)){echo $mentor->mentor_function;}?>">
                      <span id="job_err" class="error" style="display:none">Please Enter Mentor Job</span>
                  </div>

                  <input type="text" name="id" id="id" value="<?php if(isset($mentor)){echo $mentor->id;}?>">
                  <div class="mentor-btn">
                    <input type="submit" value="Submit" class="btn btn-primary" id="submit">
                  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
</div> 
</div>
</div>
</div>
</div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong style="margin-left: 400px;">Copyright &copy; 2014-2020</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
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
<!-- jQuery UI 1.11.4 -->
<script src="{{url('/')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- end here -->
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{url('/')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{url('/')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{url('/')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{url('/')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('/')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{url('/')}}/plugins/moment/moment.min.js"></script>
<script src="{{url('/')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('/')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{url('/')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{url('/')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/plugins')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/plugins')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('/plugins')}}/dist/js/pages/dashboard.js"></script>





  <script>
    
    function validationMentor(){
      // alert()
      var mentorName = $('.mentor_name').val();
      var mentorEmail = $('.mentor_email').val();
      var mentorPass = $('.mentor_password').val();
      var mentorNumber = $('.mentor_number').val();
      var mentorJob = $('.mentor_job').val();
      var mentorAddress = $('.mentor_address').val();
      <?php 
      if(isset($mentor) && $mentor!='')
      {
      ?>
      var image='<?php echo $mentor->mentor_image;?>'
    <?php }else{?>
      var image=$('#myfile').val();
    <?php }?>
     alert(image)
     if(image=='')
     {
      $('#img_err').show();
        return false;
     }

     else if(image!='')
     {
      var image_size =$('#myfile')[0].files[0].size;
      var maxMb = 100000;
      if(image_size>maxMb)
      {
        alert("Image should be less than 1 MB");
        return false;
      }
      else
      {
         if(mentorName == ''){
        $('#img_err').hide();
        $('#name_err').show();
        return false;
      }
      else if(mentorEmail == ''){
        $('#name_err').hide();
        $('#email_err').show();
       
        return false;
      }
      else if(mentorPass == ''){
        $('#name_err').hide();
        $('#email_err').hide();
        $('#pass_err').show();
        return false;
      }
      else if(mentorNumber == ''){
        $('#name_err').hide();
        $('#email_err').hide();
        $('#pass_err').hide();
        $('#mob_err').show();
        return false;
      }
      else if(mentorAddress == ''){
        $('#name_err').hide();
        $('#email_err').hide();
        $('#pass_err').hide();
        $('#mob_err').hide();
        $('#address_err').show();
        return false;
      }
      else if(mentorJob == ''){
        $('#name_err').hide();
        $('#email_err').hide();
        $('#pass_err').hide();
        $('#mob_err').hide();
        $('#address_err').hide();
        $('#job_err').show();
        return false;
      }
      }

     }
     
      

    }
  </script>

</body>
</html>
