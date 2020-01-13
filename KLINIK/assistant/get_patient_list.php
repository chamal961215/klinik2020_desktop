<?php
    include('includes/header.php');
    include('includes/navbar.php');
    ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<?php include('includes/topnavbar.php');?>

    <!-- Page Heading -->
    <div style="margin-left:30px"><div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Patient Profiles</h1>
    </div></div>

  <!-- Begin Page Content -->
  <form action="get_patient_list.php" method="post">
  <div class="container-fluid">
    <div class="form-row mb-2">

      <div class="col-md-3">
        <input type="text" class="form-control" id="userid_search" name="userid_search" placeholder="UserId">
        <button type="submit"  name="search_by_id" style="margin-top:10px; margin-left:0px ;margin-bottom:10px ;">Search</button>
      </div>

      <div class="col-md-3">
        <input type="text" class="form-control" id="name_search" name="name_search" placeholder="Name">
        <button type="submit"  name="search_by_name" style="margin-top:10px; margin-left:0px ;margin-bottom:10px ;">Search</button>
      </div>

      <div class="col-md-3">
        <input type="text" class="form-control" id="nic_no_search" name="nic_no_search" placeholder="NIC">
        <button type="submit"  name="search_by_nic_no" style="margin-top:10px; margin-left:0px ;margin-bottom:10px ;">Search</button>
      </div>

      <div class="col-md-3">
        <input type="text" class="form-control" id="contact_search" name="contact_search" placeholder="Contact No">
        <button type="submit"  name="search_by_contact" style="margin-top:10px; margin-left:0px ;margin-bottom:10px ;">Search</button>
      </div>

    </div>


    <!-- Content Row -->
    <div class="row">
      <div class="card shadow mx-auto">
        <div class="card-body">
          <div>

          <?php
            $table = '<table class="table">';
            $table .= '<thead class="thead-light"><tr><th scope="col" class="px-5" style="text-align:center;">User ID</th>
              <th scope="col" class="px-5" style="text-align:center;">Title</th>
              <th scope="col" class="px-5" style="text-align:center;">Name</th>
              <th scope="col" class="px-5" style="text-align:center;">NIC</th>
              <th scope="col" class="px-5" style="text-align:center;">Contact No</th>
              <th scope="col" class="px-5" style="text-align:center;">E-Mail</th>
              <th scope="col" class="px-5" style="text-align:center;">View</th>
              </thead>';
            include('querry/list_patient.php');
            $table .= '</table>';
            echo $table;

            ?>
            </div>
        </div>
      </div>
    </div>

</form>>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
