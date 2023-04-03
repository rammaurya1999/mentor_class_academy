
<link rel="stylesheet" href="{{url('/')}}/plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="{{url('/')}}/upload/css/custom.css">
<link rel="icon" href="{{url('public/icons')}}/mentor_logo.png">
  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="{{url('/')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{url('/')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> -->
  <style type="text/css">
    .hidemenu
    {
      display: none;
    }
    .card.card-solid {
    width: 100%;
    margin-top: 20px;
}
/*#nav-hospitals button.btn.btn-primary {
    position: absolute;
    left: 20%;
}*/
/*Ram 26/08/2022 here style for import button for all language*/
/*#nav-Clinics button.btn.btn-primary{
 position: absolute;
    margin-left: 20%; 
}
#nav-Doctors button.btn.btn-primary{
 position: absolute;
    left: 20%;
  }*/


#nav-tabContent button.btn.btn-primary{
 position: absolute;
    left: 20%; 
    z-index: 10;

}
.dt-buttons button {
    width: 166px;
}
.srch_box_en {
  text-align: center;
}
.srch_box_ar {
  text-align: center;
}
.srch_box_fr {
  text-align: center;
}
thead {
    text-align: center;
}
#resultseng,#resultsarb,#resultsfre {
  text-align: center;
}
.table td, .table th {
  vertical-align: inherit;
}
.table thead th { 
  vertical-align: inherit;
}
.elevation-4 {
  box-shadow: unset !important;
}
tbody {
  text-align: center;
}
  </style>
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
     
    </ul>

    <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item"> -->
            <!-- Message Start -->
          
            <!-- Message End -->
          <!-- </a> -->
        
            <!-- Message End -->
          <!-- </a> -->
          <!-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item"> -->
            <!-- Message Start -->
            <!-- <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div> -->
            <!-- Message End --
          </a>
          <!-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->
      <!-- Notifications Dropdown Menu -->
     <!--  <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>-->
      <li class="nav-item">
        <a href="{{url('admin/Profile')}}" class="btn btn-default mt-12">My Profile</a>
        <a href="{{url('admin/logout')}}" class="btn btn-danger pull-right">Logout</a>
      </li> 
    </ul>
  </nav>