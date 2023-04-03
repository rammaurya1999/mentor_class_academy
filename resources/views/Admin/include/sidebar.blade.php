<head>

    <style type="text/css">
      
      /*ul li ul{
          margin-left:0px;
      }*/
      span.brand-text.font-weight-light {
          font-size: 28px;
          line-height: 0;
          text-align: center;
          font-weight: 600 !important;
          width: 100%;
          display: inline-block;
          color: #00e4ea;
      }
      span.brand-text.font-weight-light span{
          color: #f00;
      }
      .nav-sidebar .nav-treeview li a{
          padding-left: 20px;
      }
      .nav-sidebar .nav-item .nav-link {
          padding: .5rem .4rem !important;
      }
      .nav-sidebar .nav-treeview>.nav-item>.nav-link>.nav-icon {
          margin-left: 16px;
      }
      .ledtpadding .nav-item .nav-link i {
          padding-left: 20px !important;
      }
      
      .main-sidebar {
          overflow: hidden;
    overflow-y: auto;
    height: 100% !important;
    display: block;
    position: fixed !important; 
      }

      .nav-sidebar .nav-link>p>.right {
           top: 17px; 
      }

    </style>

</head>
<?php
$admin_id = session()->get('admin_id');
$adminId = DB::table('_admin')->where('id',$admin_id)->first();
?>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <center><img src="{{url('public/images/mentor.png')}}" alt="" height="100px" width="150px"></center>
      <!-- <span class="brand-text font-weight-light"> <span>Find</span> Doctor <span>+</span></span> 
        style for img tag> style="opacity: .8" class for img tag> class="brand-image img-circle elevation-3"-->
    </a>



    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('admin_logo/'.$adminId->image)}}" class="center" >
        </div>
        <div class="info">
          <a href="#" class="d-block">{{$adminId->admin_name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button> 
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{url('admin/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p style="font-size: 18px;">
                Dashboard
                
              </p>
            </a>
   
          </li>



          
          <li class="nav-item <?php if(isset($AproveUser)){ echo "menu-open"; }?>" onclick="collapseDropDown()">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p style="font-size: 18px;">
              Mentor/Student
                 <i class="fas fa-angle-down right "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item <?php if(isset($AproveUser)){ echo "menu-open"; }?>">
            <a href="{{url('Studentdata')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p style="font-size: 18px">
              Student
               <!-- <i class="right fas fa-angle-right"></i>  --> 
              </p>
            </a>
            <li class="nav-item <?php if(isset($user)){ echo "menu-open"; }?>">
            <a href="{{url('Mentordata')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p style="font-size: 18px">
              Mentor
               <!-- <i class="right fas fa-angle-right"></i>  --> 
              </p>
            </a>
           </li>
           <!-- <li class="nav-item <?php if(isset($usertype)){ echo "menu-open"; }?>">
            <a href="{{url('admin/usertype')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p style="font-size: 18px">
              User Type
               <!-- <i class="right fas fa-angle-right"></i>  --> 
              </p>
            </a>
           </li> -->
            </ul>

          </li>
          <li class="nav-item <?php if(isset($ModuleSetting)){ echo "menu-open"; }?>">
            <a href="{{url('/admin/moduleSetting')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p style="font-size: 18px">
              Module Setting
               <!-- <i class="right fas fa-angle-right"></i>  --> 
              </p>
            </a>
           </li>

          <li class="nav-item <?php if(isset($myaccount)){ echo "menu-open"; }?>" onclick="collapseDropDown()">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p style="font-size: 18px;">
               My Account
                 <i class="fas fa-angle-down right "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item <?php if(isset($myprofile)){ echo "menu-active"; }?> ">
                <a href="{{url('admin/Profile')}}" class="nav-link <?php if(isset($myprofile)){ echo 'active'; }else{ echo 'inactive';}?> ">
                  <!-- <i class="far fa-circle "></i> -->
                  <i class="nav-icon fas fa-user"></i>
                  <p>My Profile</p>
                </a>
              </li>
              <li class="nav-item <?php if(isset($changepass)){ echo "menu-active"; }?>">
                <a href="{{url('admin/change_Password')}}" class="nav-link <?php if(isset($changepass)){ echo 'active'; }else{ echo 'inactive';}?>">
                  <!-- <i class="far fa-circle"></i> -->
                  <i class="nav-icon fas fa-key"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>

          </li>
         <!-- Ram 30/06/2022 here code for Sub-Admin  -->
          <li class="nav-item <?php if (isset($admin_id) && $admin_id != 1){echo 'hidemenu';}?> <?php if(isset($admin)){ echo "menu-open"; }?>" onclick="collapseDropDown()">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p style="font-size: 18px;">
               Sub Account
                 <i class="fas fa-angle-down right "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item <?php if(isset($myprofile1)){ echo "menu-active"; }?> ">
                <a href="{{url('admin/sub_admin_profile')}}" class="nav-link <?php if(isset($myprofile1)){ echo 'active'; }else{ echo 'inactive';}?> ">
                  <!-- <i class="far fa-circle "></i> -->
                  <i class="nav-icon fas fa-user"></i>
                  <p>My Profile</p>
                </a>
              </li>
             <!--  <li class="nav-item <?php if(isset($changepassword1)){ echo "menu-active"; }?>">
                <a href="{{url('admin/sub_change_password')}}" class="nav-link <?php if(isset($changepassword1)){ echo 'active'; }else{ echo 'inactive';}?>">
                  <!-- <i class="far fa-circle"></i> -->
                  <!-- <i class="nav-icon fas fa-key"></i> -->
                  <!-- <p>Change Password</p> -->
                <!-- </a> -->
              <!-- </li> -->
            </ul>

          </li>
          <!-- end here -->
          <li class="nav-item <?php if(isset($staff)){ echo "menu-open"; }?>">
            <a href="{{url('admin/staff_user')}}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p style="font-size: 18px">
               Staff User 
               <!-- <i class="right fas fa-angle-right"></i>  --> 
              </p>
            </a>
           </li>

          
          <li class="nav-item  <?php if(isset($health_directory)){ echo "menu-open"; }?>" onclick="collapseDropDown()">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-heartbeat"></i>
              <p style="font-size: 18px;">
              Health Directory
                <i class="fas fa-angle-down right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{url('admin/hospital')}}" class="nav-link <?php if(isset($hosp)){echo "active"; }?>">
                  <i class=" nav-icon fas fa-hospital-symbol nav-th"></i>

                  <p>Hospital</p>
                </a>
              </li>

               <!-- <li class="nav-item <?php if(isset($municipal)){echo "menu-open";}?>">
                <a href="{{url('admin/municipal')}}" class="nav-link <?php if(isset($municipal)){echo "active"; }else{echo "inactive";}?>">
                  <i class=" nav-icon fas fa-bus nav-th"></i>

                  <p>muncipality</p>
                </a>
              </li> -->
              <!-- <li class="nav-item ">
                <a href="#" class="nav-link">
                  <i class=" fas fa-clinic-medical nav-th"></i>
                  <p>Clinic</p>
                   <i class="fas fa-angle-down right"></i>
                <span class="badge badge-info right"></span>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('admin/clinic')}}" class="nav-link <?php if(isset($clini)){ echo "active"; }else{ echo "inactive";}?>">
                      <i  class="nav-icon fas fa-circle nav-th"></i>
                      <p >Clinic</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/clinic_specilality')}}" class="nav-link <?php if(isset($clinicspl)){ echo "active"; }else{ echo "inactive";}?>">
                      <i style="margin-left: 40px;" class="nav-icon fas fa-circle nav-th"></i>
                      <p >Add Clinic Speciality</p>
                    </a>
                  </li>
               </ul>
              </li> -->
             
         
            
              <!-- <li class="nav-item <?php if(isset($clini)){ echo "menu-open";}else{}?> "> -->
                <!-- <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-clinic-medical nav-th"></i>
                  <p>Clinic</p>
                   <i class="fas fa-angle-down right"></i>
                <span class="badge badge-info right"></span>
                </a> -->
                   <!-- <ul class="nav nav-treeview"> -->
                  <li class="nav-item">
                    <a href="{{url('admin/clinic')}}" class="nav-link <?php if(isset($clini)){ echo "active"; }else{ echo "inactive";}?>">
                      <i class="nav-icon fas fa-clinic-medical nav-th"></i>
                      <p >Clinic</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{url('admin/clinic_specilality')}}" class="nav-link <?php if(isset($clinicspl)){ echo "active"; }else{ echo "inactive";}?>">
                      <i class="nav-icon fas fa-clinic-medical nav-th"></i>
                      <p >Add Clinic Speciality</p>
                    </a>
                  </li>
                  <!-- style="margin-left: 40px;" remove style from i tag inside clinic and clinic speciality-->
               <!-- </ul> -->
              <!-- </li> -->

                <!-- <li class="nav-item <?php if(isset($docto)){ echo "menu-open";}else{echo "menu-close";}?> "> -->
                <!-- <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-md nav-th"></i>
                  <p>Doctor</p>
                   <i class="fas fa-angle-down right"></i>
                <span class="badge badge-info right"></span>
                </a> -->
                   <!-- <ul class="nav nav-treeview"> -->
                  <li class="nav-item">
                    <a href="{{url('admin/doctor')}}" class="nav-link <?php if(isset($docto)){ echo "active"; }else{ echo "inactive";}?>">
                      <i class="nav-icon fas fa-user-md nav-th"></i>
                      <p >Doctor</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/doctor_specilality')}}" class="nav-link <?php if(isset($doctorspl)){ echo "active"; }else{ echo "inactive";}?>">
                      <i class="nav-icon fas fa-user-md nav-th"></i>
                      <p >Add Doctor Speciality</p>
                    </a>
                  </li>

               <!-- </ul> -->
              <!-- </li> -->

              <li class="nav-item">
              <a href="{{url('admin/laboratory')}}" class="nav-link <?php if(isset($laboratry)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-flask nav-th"></i>
                  <p>Laboratory</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/radiology')}}" class="nav-link <?php if(isset($radiolgy)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-procedures nav-th"></i>
                  <p>Radiology Center</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/optician')}}" class="nav-link <?php if(isset($opti)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-glasses nav-th"></i>
                  <p>Optician</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/veterinary')}}" class="nav-link <?php if(isset($vete)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-dog nav-th"></i>
                  <p>Veterinary</p>
                </a>
              </li>

              <!-- <li class="nav-item ">
                <a href="{{url('admin/hospital')}}" class="nav-link <?php if(isset($hosp)){echo "active"; }?>">
                  <i class=" nav-icon fas fa-hospital-symbol nav-th"></i>
                  <p>Hospital</p>
                </a>
              </li> -->
            
            </ul>
          </li>

           <li class="nav-item  <?php if(isset($healthcare)){ echo "menu-open"; }?>" onclick="collapseDropDown()">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hand-holding-medical"></i>
              <p style="font-size: 18px;">
               Pharmacy
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ledtpadding">
              <li class="nav-item ">
                <a href="{{url('admin/pharmacy')}}" class="nav-link <?php if(isset($pharm)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="fas fa-file-medical nav-th"></i>
                  <p>Guarding Pharmacy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/para_pharmacy')}}" class="nav-link <?php if(isset($para_pharm)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="fas fa-hand-holding-medical nav-th"></i>
                  <p>Parapharmacy</p>
                </a>
              </li>
               <!-- <li class="nav-item">
                <a href="{{url('admin/drugstore')}}" class="nav-link <?php if(isset($drugst)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="fas fa-briefcase-medical nav-th"></i>
                  <p>Drugstore</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{url('admin/pharmacy_onduty')}}" class="nav-link <?php if(isset($onduty)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="fas fa-notes-medical nav-th"></i>
                  <p>Pharmacy Onduty</p>
                </a>
              </li>
               
              
            </ul>
          </li>


          <li class="nav-item  <?php if(isset($diagnosi)){ echo "menu-open"; }?>" onclick="collapseDropDown()">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-diagnoses"></i>
              <p style="font-size: 18px;"> Diagnosis   
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{url('admin/diagnosis')}}" class="nav-link <?php if(isset($diagno)){ echo "active"; }else{ echo "inactive";}?>" style ="margin-left: 26px;">
                  <i class="fas fa-diagnoses nav-th"></i>
                  <p>Diagnosis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/advice')}}" class="nav-link <?php if(isset($ad)){ echo "active"; }else{ echo "inactive";}?>" style ="margin-left: 26px;">
                  <i class="fas fa-info-circle nav-th"></i>
                  <p>Tips</p>
                </a>
              </li>
            </ul>

          </li>
           <li class="nav-item  <?php if(isset($medicin)){ echo "menu-open"; }?>" onclick="collapseDropDown()">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-capsules"></i>
              <p style="font-size: 18px;">
                Medicines
                <i class="right fas fa-angle-down"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/medicine')}}" class="nav-link  <?php if(isset($med)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="fas fa-capsules nav-icon"></i>
                  <p>Medication</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/prescription')}}" class="nav-link  <?php if(isset($pre)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="fas fa-notes-medical nav-icon"></i>
                  <p>Prescription</p>
                </a>
              </li>
            </ul>

          </li>
            <li class="nav-item <?php if(isset($myspace)){ echo "menu-open"; }?>" onclick="collapseDropDown()">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-link"></i>
              <p style="font-size: 18px;">
              My Space
                 <i class="fas fa-angle-down right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/contactus')}}" class="nav-link">
                  <i class="fas fa-phone-volume nav-icon"></i>
                  <p>Contact Us</p>
                </a>
              </li>
        <li class="nav-item">
                <a href="{{url('admin/my_favourite')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>My Favourite</p>
                </a>
              </li> 
            </ul>

          </li>
          <li class="nav-item">
                <a href="{{url('admin/notification')}}" class="nav-link  <?php if(isset($noti)){ echo "active"; }else{ echo "inactive";}?>" onclick="collapseDropDown()">
                  <i class="nav-icon fas fa-bell "></i>
                   <p style="font-size: 18px;">Notification
                   <i class="fas fa-angle-right right"></i>
                  </p>

                </a>
            </li>

            <!-- Ram 22/11/2022 here code for design to sidebar for localization and website settings -->
            <li class="nav-item  <?php if(isset($localization)){ echo "menu-open"; }?> <?php if(isset($localization)){ echo "active"; }else{ echo "inactive";}?>" onclick="collapseDropDown()">
              <a href="#" class="nav-link" >
              <i class="nav-icon fas fa-map-marker"></i>
              <p style="font-size: 18px;">
              Localization
                 <i class="fas fa-angle-down right"></i>
              </p>
            </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                <a href="{{url('admin/country')}}" class="nav-link <?php if(isset($country)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-globe-africa"></i>
                  <p>Add Country</p>
                </a>
              </li>
              <!-- Ram 22/11/2022 here code for province and city -->
              <li class="nav-item">
                <a href="{{url('admin/province')}}" class="nav-link <?php if(isset($province)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-globe-africa"></i>
                  <p>Add Province</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{url('admin/city')}}" class="nav-link <?php if(isset($city)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-globe-africa"></i>
                  <p>Add City</p>
                </a>
              </li>
              </ul>
            </li>

            <li class="nav-item  <?php if(isset($websetting)){ echo "menu-open"; }?> <?php if(isset($websetting)){ echo "active"; }else{ echo "inactive";}?>">
              <a href="#" class="nav-link" >
              <i class="nav-icon fas fa-cog"></i>
              <p style="font-size: 18px;">
              Website Settings
                 <i class="fas fa-angle-down right"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item ">
            <a href="{{url('admin/services')}}" class="nav-link <?php if(isset($service)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Service List</p>
                </a>
              </li> 

              <li class="nav-item ">
            <a href="{{url('admin/our_service')}}" class="nav-link <?php if(isset($ourservice)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-list-ol"></i>
                  <p>Our Services</p>
                </a>
              </li>   
              
              <li class="nav-item ">
            <a href="{{url('admin/home')}}" class="nav-link <?php if(isset($home)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-home"></i>
                  <p>Home</p>
                </a>
              </li> 

             <li class="nav-item ">
            <a href="{{url('/admin/news')}}" class="nav-link <?php if(isset($newsletter)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-newspaper"></i>
                  <p>News</p>
                </a>
              </li>  

              <li class="nav-item ">
          <a href="{{url('admin/contact_details')}}" class="nav-link <?php if(isset($contact)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-id-card"></i>
                  <p>Contact Details</p>
                </a>
              </li> 
              <!-- mon -->
              <li class="nav-item ">
              <a href="{{url('admin/termscondition')}}" class="nav-link <?php if(isset($term)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-file-alt"></i>
                  <p>Terms & Conditions</p>
                </a>
              </li> 

              <li class="nav-item ">
                <a href="{{url('admin/legal_notice')}}" class="nav-link <?php if(isset($legal)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-balance-scale"></i>
                  <p>Legal Notice</p>
                </a>
              </li> 

              <li class="nav-item ">
                <a href="{{url('admin/about_us')}}" class="nav-link <?php if(isset($about)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-address-card"></i>
                  <p>About us</p>
                </a>
              </li> 
            </ul>
          </li>

            <!-- end here -->
          <li class="nav-item  <?php if(isset($Other)){ echo "menu-open"; }?>">
            <a href="#" class="nav-link" >
              <i class="nav-icon fas fa-copy"></i>
              <p style="font-size: 18px;">
              Other Services
                 <i class="fas fa-angle-down right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="{{url('admin/upimage')}}" class="nav-link <?php if(isset($upimage)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="fas fa-images nav-icon"></i>
                  <p>Upload Images</p>
                </a>
              </li> -->
              
              
              <!-- end here -->
             <li class="nav-item ">
              <a href="{{url('admin/complaint')}}" class="nav-link <?php if(isset($complaint)){ echo "active"; }else{ echo "inactive";}?>">
                <i class="nav-icon fas fa-file-alt"></i>
                  <p>Complaints</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{url('admin/sponser')}}" class="nav-link <?php if(isset($sponsor)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-hands-helping"></i>
                  <p>Sponser</p>
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{url('admin/useful_number')}}" class="nav-link <?php if(isset($usnumber)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-phone-alt"></i>
                  <p>Useful Numbers</p>
                </a>
              </li> 
              <li class="nav-item ">
            <a href="{{url('admin/health_care')}}" class="nav-link <?php if(isset($healthcare)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-briefcase-medical"></i>
                  <p>Healthcare</p>
                </a>
              </li> 
              
              <li class="nav-item ">
              <a href="{{url('admin/privacy_policy')}}" class="nav-link  <?php if(isset($pri)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="nav-icon fas fa-file-alt"></i>
                  <p>Privacy & Policy</p>
                </a>
              </li> 
            </li> 
             
               
   <!--                <li class="nav-item">
            <a href="{{url('admin/contact_inquery')}}" class="nav-link <?php if(isset($contact)){ echo "active"; }else{ echo "inactive";}?>">
                  <i class="fa fa-list nav-icon"></i>
                  <p>Contact Enquiry</p>
                </a>
              </li>  -->



             </ul>

          </li>
             

        </ul>
            


            
          
      </nav>
    </div>
    <script> 
        const collapseDropDown = () => {
        const openMenu = document.querySelectorAll(".menu-is-opening");
        openMenu.forEach(element => {
          element.classList.remove("menu-is-opening");
          let innerUl = element.getElementsByTagName("UL")[0];
          innerUl.style.display = 'none';
        });
      }

    </script>
  </aside>
