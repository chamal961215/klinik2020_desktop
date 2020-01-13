<?php
include('includes/header.php');
include('includes/navbar.php');
include('querry/cards.php');
?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php include('includes/topnavbar.php');?>
        </nav>
        <!-- End of Topbar -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Home</h1>
          </div>

            <!-- No of patients -->
                      <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                          <div class="card-body">
                            <div class="row no-gutters align-items-center">
                              <div class="col mr-2">

                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                  Number of Patients
                                </div>
                                <?php
                                    $n_patient='<div class="h5 mb-0 font-weight-bold text-gray-800">'.$_SESSION['num_patient'].'</div>';
                                    echo "{$n_patient}";
                                ?> 

                              </div>
                              
                              <div class="col-auto">
                                <i class="fas fa-wheelchair fa-2x text-gray-300"></i>
                              
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

            </div>
      </div>
      <!-- End of Main Content -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>