<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<?php include('includes/topnavbar.php');?>

<?php include('querry/patient_view.php');?>


  <!-- Begin Page Content -->
  <!-- Begin Page Content -->
  <div class="container-fluid">
<div class="card mb-4 py-3 border-left-primary border-bottom-primary px-5 py-5 bg-gradient-info text-white ">
                <div class="card-body">
                </div>
 
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo $title.' '. $fname.' '. $mname. ' '.$lname?></h1>
    </div>

<!-- <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Custom Background Gradient Utilities</h6>
                </div>
                <div class="card-body">
                  <div class="px-3 py-5 bg-gradient-primary text-white">.bg-gradient-primary</div>
                  <div class="px-3 py-5 bg-gradient-success text-white">.bg-gradient-success</div>
                  <div class="px-3 py-5 bg-gradient-info text-white">.bg-gradient-info</div>
                  <div class="px-3 py-5 bg-gradient-warning text-white">.bg-gradient-warning</div>
                  <div class="px-3 py-5 bg-gradient-danger text-white">.bg-gradient-danger</div>
                  <div class="p-3 bg-gray-200">.bg-gray-200</div>
                </div>
              </div>-->

    <!-- Content Row -->
<form action="./edit_patient.php?id=<?php echo $_GET['id'];?>" method="post">

	<div style="margin-top:20px";>
	<div><label class="col-md-2" ><a href = "<?php echo $email ?>"><?php echo $email ?></a></label></div>
	<div><label class="col-md-2"><?php echo $contact ?></label></div>
	</div>
	<div><label class="col-md-2"><B>NIC Number</B></label>
	<label><?php echo $nic_no?></label>
	</div>
	<div><label class="col-md-2"><B>Blood Type</B></label>	<label><?php echo $blood?></label></div>
	<div><label class="col-md-2"><B>Height</B></label>	<label><?php echo $height?></label></div>
	<div><label class="col-md-2"><B>Weight</B></label>	<label><?php echo $weight?></label></div>
	<!--<div>   <button type="submit"  name="edit" style="margin-top:10px; margin-left:0px ;margin-bottom:10px ;
	 onclick="document.location.href=\'edit_patient.php?id= $id ";>Edit</button> </div>-->
	
	<a href="querry\patient_edit.php?id= <?php echo $id?> " type="submit" name ="edit" id="edit" class="btn btn-secondary btn-icon-split" >
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Edit Details</span>
                  </a>
</form>

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
  