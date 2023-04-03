<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mentor Data</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/plugins')}}/dist/css/adminlte.min.css">
  <link href='https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
  <link href='https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>
<style type="text/css">
  .pddlr0{
    padding-left: 0;
    padding-right: 0;
  }
  .tab-content>.active {
    display: block;
    padding: 0 15px;
}
.healthDirectoryTabs nav > .nav.nav-tabs{

  border: none;
    color:#fff;
    background:#272e38;
    border-radius:0;

}
.healthDirectoryTabs nav > div a.nav-item.nav-link,
.healthDirectoryTabs nav > div a.nav-item.nav-link.active
{
  border: none;
    padding: 10px 20px;
    color:#fff;
    background:#343a40;
    border-radius:0;
    font-size: 20px;
}

.healthDirectoryTabs nav > div a.nav-item.nav-link.active:after
 {
  content: "";
  position: relative;
  bottom: -60px;
  left: -25%;
  border: 15px solid transparent;
  border-top-color: #e74c3c ;
}
.healthDirectoryTabs .tab-content{
  background: #fdfdfd;
    line-height: 25px;
    border: 1px solid #ddd;
    border-top:5px solid #e74c3c;
    border-bottom:5px solid #e74c3c;
    padding:30px 25px;
    overflow: auto;
}

.healthDirectoryTabs nav > div a.nav-item.nav-link:hover,
.healthDirectoryTabs nav > div a.nav-item.nav-link:focus
{
  border: none;
    background: #e74c3c;
    color:#fff;
    border-radius:0;
    transition:background 0.20s linear;
}
.adbtn{

padding-top: 10px;
 padding-bottom: 10px;
}

.material-switch > input[type="checkbox"] {
     display: none;
}

.material-switch > label {
    cursor: pointer;
    height: 0px;
    position: relative;  
}
/*#dd4b39*/
.material-switch > label::before {
    background: #5cb85c;
    border-radius: 8px;
    content: '';
    height: 16px;
    margin-top: -8px;
    position: absolute;
    transition: all 0.4s ease-in-out;
    width: 40px;
    opacity: .5;
}
.material-switch > label::after {
    background: #5cb85c;
    border-radius: 16px;
    /*box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);*/
    content: '';
    height: 24px;
    left: -4px;
    margin-top: -8px;
    position: absolute;
    top: -4px;
    transition: all 0.3s ease-in-out;
    width: 24px;
}
.material-switch > input[type="checkbox"]:checked + label::before {
    background: inherit;
    opacity: 0.5;
}
.material-switch > input[type="checkbox"]:checked + label::after {
    background: inherit;
    left: 20px;
}
.material-switch {
    float: left;
    margin: 7px 5px;
}
.label-danger
{
  background-color: #e74c3c;
}

.exfl{
  margin-left: 633px;
}.exfl2{
  margin-left: 569px;
}.exfl3{
  margin-left: 569px;
}.exfl4{
  margin-left: 569px;
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
.hide1{display: none;}

table.dataTable thead th {
  padding: 10px 20px !important;
}
table.dataTable tbody tr {
  background-color: black;
}
#serbtn{
  display: inline-block;
  
  float: right;
}
tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
.srch_box_en {
    border: none;
    outline: none;
    border: 1px solid #3d3f425c;
    border-radius: 4px;
    background-color: #fdf7f700;
     text-align: center;
}

.srch_box_en:focus{
  border: 1px solid #333;
}
.srch_box_ar {
    border: none;
    outline: none;
    border: 1px solid #3d3f425c;
    border-radius: 4px;
    background-color: #fdf7f700;
     text-align: center;
}

.srch_box_ar:focus{
  border: 1px solid #333;
}
.srch_box_fr {
    border: none;
    outline: none;
    border: 1px solid #3d3f425c;
    border-radius: 4px;
    background-color: #fdf7f700;
     text-align: center;
}

.srch_box_fr:focus{
  border: 1px solid #333;
}

</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @include('admin.include.header')
  @include('admin.include.sidebar')
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mentor Detatils</h1>
          </div>
        </div>
        <div class="adbtn">
          <a href="{{url('admin/add_mentor')}}" class="btn btn-primary">Add New</a>
        </div>
      </div>
    </section>
    <section>
      <table class="table table-dark table-responsive table-hover mt-4" id="mentor_table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mentor Image</th>
      <th scope="col">Mentor Name</th>
      <th scope="col">Mentor City</th>
      <th scope="col">Mentor Function</th>
      <th scope="col">status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($mentor as $key=>$val)
  <tbody>
    <tr>
      <th>{{++$key}}</th>
      <td><img src="{{url('admin_logo/'.$val->mentor_image)}}" class="imgprofile ">
        <?php echo "<p style='display:none'>".$val->mentor_image."</p>";?>
      </td>
      <td>{{$val->mentor_name}}</td>
      <td>{{$val->mentor_address}}</td>
      <td>{{$val->mentor_function}}</td>

      <td>
        @if($val->Status==1)
        <button class="btn btn-success" onclick="ChangeStatusMentor({{$val->id}})">Active</button>
        @else
        <button class= "btn btn-danger" onclick ="ChangeStatusMentor({{$val->id}})">Inactive</button>
        @endif
      </td>
      <td>
        <a href="{{url('viewStudent/'.$val->id)}}" class="mange-admins-dlt-btn"><i class="fas fa-eye"></i></a>
        <a href="{{url('admin/add_mentor')}}?key={{base64_encode($val->id)}}" class="mange-admins-dlt-btn"><i class="fas fa-edit"></i></a>
        <a href="{{url('deleteStudent/'.$val->id)}}" class="mange-admins-dlt-btn"><i class="far fa-trash-alt"></i></a>
    </td>
      
    </tr>
  </tbody>
  @endforeach
</table>  
    </section>
  </div>
</div>

<!-- <script src="{{url('/')}}/plugins/jquery/jquery.min.js"></script>
 --><script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="{{url('/')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/plugins')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/plugins')}}/dist/js/demo.js"></script>
<!-- Page specific script -->


<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
<script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.colVis.min.js" ></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.3/js/dataTables.fixedColumns.min.js" ></script>

<script>
  function ChangeStatusMentor(id) {
    var mentor_id = id;
    alert(mentor_id)
    var token = '<?php echo csrf_token()?>';
    $.ajax({
      type:"POST",
      url:"{{url('changestatusmentor')}}",
      data:{mentor_id:mentor_id,_token:token},
      success:function(data){
        console.log(data)
        location.reload();  
      }

    })
  }

</script>

<script type="text/javascript">
         $(document).ready(function(){
            $('#mentor_table').DataTable( {

      "columnDefs": [
    { "width": "40%", "targets": 2 }
  ],
        dom: 'Bfrtip',
        buttons: [
             {   extend: 'excel',
                 text: 'Excel Export',
                 exportOptions: {
                    columns: [0,1,2,3,4,5]
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