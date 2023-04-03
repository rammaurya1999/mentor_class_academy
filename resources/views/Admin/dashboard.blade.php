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
<link rel="icon" href="{{url('public/icons')}}/mentor.png">

  <!-- Ram 29/06/2022 here style for country city and province button -->
  <style type="text/css">
    #serbtn{
  /*display: inline-block;*/
 float: right; 
}

  </style>
  <!-- end here -->
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 
@include('admin.include.header')
@include('admin.include.sidebar')

<?php
// $table = DB::table('tbl_user')->first();
// $status = $table->Status;
// $count = DB::table('tbl_user')->where('Status',$status)->count();
?>
 
 

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
            <h1 class="m-0" >Dashboard</h1>
          </div>
            
            
                </div>    
               
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6" style="max-width: 20%;">
            
            <div class="small-box bg-info commenc-dash-card-area">
              <div class="inner">
                <h3 id="totalhospital"><?php if(isset($user_count)){ echo $user_count; }?></h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="fas fa-hospital"></i>
              </div>
              <a href="<?php echo url('Studentdata');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6" style="max-width: 20%;">
            
            <div class="small-box bg-success commenc-dash-card-area">
              <div class="inner">
                <h3 id="totalhospital"><?php if(isset($mentor_count)){ echo $mentor_count;} ?></h3>

                <p>Mentor</p>
              </div>
              <div class="icon">
                <i class="fas fa-hospital"></i>
              </div>
              <a href="<?php echo url('Mentordata');?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6" style="max-width: 20%;">
           
            <div class="small-box bg-info commenc-dash-card-area">
              <div class="inner">
                <h3 id="totaldoctor">doctor</h3>

                <p>Doctors</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-md"></i>
              </div>
              admin/dashboard
            </div>
          </div>
          
          <div class="col-lg-3 col-6" style="max-width: 20%;">
            
            <div class="small-box bg-danger commenc-dash-card-area">
              <div class="inner">
                <h3 id="totallaboratory">laboratory</h3>

                <p>Laboratories</p>
              </div>
              <div class="icon">
                <i class="fas fa-flask"></i>
              </div>
              <a > class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6" style="max-width: 20%;">
            
            <div class="small-box bg-primary commenc-dash-card-area">
              <div class="inner">
                <h3 id="totalradiology"></h3>
                <p>Radiology Centers</p>
              </div>
              <div class="icon">
                <i class="fas fa-procedures"></i>
              </div>
             <a> class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>  

          <div class="col-lg-3 col-6" style="max-width: 20%;">
            
            <div class="small-box bg-primary commenc-dash-card-area">
              <div class="inner">
                <h3 id="totalpharmacy"></h3>

                <p>Pharmacy</p>
              </div>
              <div class="icon">
                <i class="fas fa-file-medical"></i>
              </div>
              <a class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>
          </div>
          <div class="col-lg-3 col-6" style="max-width: 20%;">
           
            <div class="small-box bg-danger commenc-dash-card-area">
              <div class="inner">
                <h3 id="totalparapharmacy">pharmacy</h3>

                <p>Parapharmacy</p>
              </div>
              <div class="icon">
                <i class="fas fa-hand-holding-medical"></i>
              </div>
              <a class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
        
        <div class="col-lg-3 col-6" style="max-width: 20%;">
            
            <div class="small-box bg-info commenc-dash-card-area">
              <div class="inner">
                <h3 id="totalpharmacyduty">pharmacyduty</h3>

                <p>Pharmacy Onduty</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
                <a class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              
            </div>
          </div>
          
        
        <div class="col-lg-3 col-6" style="max-width: 20%;">
           
            <div class="small-box bg-danger commenc-dash-card-area">
              <div class="inner">
                <h3 id="totaloptician">optician</h3>

                <p>Opticians</p>
              </div>
              <div class="icon">
                <i class="fas fa-glasses"></i>
              </div>
              <a class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>
          </div>
         
   
        <div class="col-lg-3 col-6" style="max-width: 20%;">
            
            <div class="small-box bg-success commenc-dash-card-area">
              <div class="inner">
                <h3 id="totalveterinary">veterinary</h3>

                <p>Veterinary</p>
              </div>
              <div class="icon">
                <i class="fas fa-dog"></i>
              </div>
              <a class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          
        </div>
       
      </div>
    </section>
    
  </div>
  
  <footer class="main-footer">
    <strong style="margin-left: 400px;">Copyright &copy; 2014-2020</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>

  
  <aside class="control-sidebar control-sidebar-dark">
   
  </aside>
  
</div>



<script src="{{url('/')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('/')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>



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
</body>
</html>
