<?php
if(!isset($_SESSION))
{
    session_start();
}

include('includes/header.php');
include('includes/navbar.php');
include('querry/doctor_home.php');

?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
	
<?php 	$_SESSION['doctor_id'] = 10 ?>
	
      <!-- Main Content -->
      <div id="content">


        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

       
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         
          <ul class="navbar-nav ml-auto">

            
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
              </a>
     
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                  </div>
                  <div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>

          <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Dr.XYZ</span>
                <div class="icon-circle bg-info">
                      <i class="fas fa-user"></i>
                </div>
              </a>

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
             <!--  <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>-->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Home</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- No of Assitants -->
            <div class="col-xl-8 col-md-8 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                 <div class="card-body">
                 
                <div class="card border-left-primary shadow h-100 py-1">
                <div class="card-body">
                 <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Number of Patients created</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo  $number_patients?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  
                  <div class="row no-gutters align-items-center">
                     <div class="col mr-2">
                      <div class="text-m font-weight-bold text-success text-uppercase mb-1">Recent patients</div>
                      <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Mr.aaaaaa
                          <button type="submit" name="registration" class="btn btn-primary">
                            <i class="fas fa-fw fa-eye"></i>
                          </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Mr.bbbbbb
                          <button type="submit" name="registration" class="btn btn-primary">
                            <i class="fas fa-fw fa-eye"></i>
                          </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Mr.cccccc
                          <button type="submit" name="registration" class="btn btn-primary">
                            <i class="fas fa-fw fa-eye"></i>
                          </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Mr.dddddd
                          <button type="submit" name="registration" class="btn btn-primary">
                            <i class="fas fa-fw fa-eye"></i>
                          </button>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          Mr.eeeeee
                          <button type="submit" name="registration" class="btn btn-primary">
                            <i class="fas fa-fw fa-eye"></i>
                          </button>
                        </li>
                      </ul>
                      </div>
                  </div>
                </div>
              </div>
            </div>


 

            </div>
                </div>
              </div>
            </div>

          

     
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>





