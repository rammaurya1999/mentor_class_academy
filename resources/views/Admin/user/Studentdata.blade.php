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
  <link rel="stylesheet" href="{{url('/plugins')}}/dist/css/adminlte.min.css">
  <link href='https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
  <link href='https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>
  <!-- Ram 29/06/2022 here style for country city and province button -->
  <style type="text/css">
    #serbtn{
  /*display: inline-block;*/
 float: right; 

}
.imgprofile {
    margin-bottom: 1rem;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid lightgrey;
    margin: 0 auto;
}
.imgprofile img{
    width: 10%;
    object-fit: cover;
    height: 10%;
}
table.dataTable tbody tr {
  background-color: black;
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
      <div class="container-fluid mt-4">
        <div class="row mb-2">
         
            <div class="col-sm-6">
            <h1>Student Data</h1>
          </div>


  
<table class="table table-dark table-responsive table-hover mt-4" id="student_table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">User Image</th>
      <th scope="col">User Name</th>
      <th scope="col">User City</th>
      <th scope="col">User Function</th>
      <th scope="col">User Summary</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($student as $key=>$students)
  <tbody>
    <tr>
      <th>{{++$key}}</th>
      <td><img src="{{url('admin_logo/'.$students->user_image)}}" class="imgprofile ">
        <?php echo "<p style='display:none'>".$students->user_image."</p>";?>
      </td>
      <td>{{$students->user_name}}</td>
      <td>{{$students->user_city}}</td>
      <td>{{$students->user_function}}</td>
      <td>{{$students->user_summary}}</td>
      <td>
        @if($students->Status==1)
        <button class="btn btn-success" onclick="ChangeStatusStudents({{$students->id}})">Active</button>
        @else
        <button class= "btn btn-danger" onclick ="ChangeStatusStudents({{$students->id}})">Inactive</button>
        @endif
      </td>
      <td>
        <a href="{{url('viewStudent/'.$students->id)}}" class="mange-admins-dlt-btn"><i class="fas fa-eye"></i></a>
        <a href="{{url('editStudent/'.$students->id)}}" class="mange-admins-dlt-btn"><i class="fas fa-edit"></i></a>
        <a href="{{url('deleteStudent/'.$students->id)}}" class="mange-admins-dlt-btn"><i class="far fa-trash-alt"></i></a>
    </td>
      
    </tr>
  </tbody>
  @endforeach
</table>  

</div>
</div>
</div>
</div>
<script>
  function ChangeStatusStudents(id) {
    var student_id = id;
    var token = '<?php echo csrf_token()?>';
    $.ajax({
      type:"POST",
      url:"{{url('changestatusstudent')}}",
      data:{students_id:student_id,_token:token},
      success:function(data){
        console.log(data)
        location.reload();  
      }

    })
  }
</script>
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

<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js" ></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.3/js/dataTables.fixedColumns.min.js" ></script>

<script type="text/javascript">
         $(document).ready(function(){
            $('#student_table').DataTable( {

      "columnDefs": [
    { "width": "40%", "targets": 2 }
  ],
        dom: 'Bfrtip',
        buttons: [
             {   extend: 'excel',
                 text: 'Excel Export',
                 exportOptions: {
                    columns: [0,1,2,3,4,5,6]
                }
             }, 
           
        ],
         language: {
        searchPlaceholder: "Search"
      }

     
    } );
        });
    </script>
</body>
</html>
