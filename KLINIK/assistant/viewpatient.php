<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<?php include('includes/topnavbar.php');

?>
<?php include ('querry/patient_view.php');?>

  <!-- Begin Page Content -->
  <div class="container-fluid">   
	  	  
  <div class="mb-9">

      <div class="card shadow shadow">
        <div class="card-body">
    

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1> 	<?php echo $title.' '. $fname.' '. $mname. ' '.$lname?></h1>
    </div>

    <!-- Content Row -->
<form action="./edit_patient.php?id=<?php echo $_GET['id'];?>" method="post">

	<div>
		<label class="col-md-2"><B>NIC Number</B></label>
		<label><?php echo $nic_no?></label>
	</div>

	<div>
		<label class="col-md-2"><B>E-Mail</B></label>
		<label><?php echo $email?></label>
	</div>

	<div>
		<label class ="col-md-2"><B>Contact Number</B></label>
		<label><?php echo $contact ?></label>
	</div>

	<div>
		<label class="col-md-2"><B>Blood Type</B></label>
		<label><?php echo $blood?></label>
	</div>

	<div>
		<label class="col-md-2"><B>Height</B></label>
		<label><?php echo $height?></label>
	</div>
	
	<div>
		<label class="col-md-2"><B>Weight</B></label>
		<label><?php echo $weight?></label>
	</div>

	<div>
		<button class="btn btn-primary col-md-1" type="submit"  name="edit"
				style="margin-top:31px; margin-left:0px ; onclick="document.location.href=\'edit_patient.php?id= $id ";>Edit Profile</button>
		<button class="btn btn-danger col-md-1" style="margin-top:31px; margin-left:0px" type="button"  data-toggle="modal" data-target="#myModal">Delete Profile</button>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
  
		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title">Delete the Profile</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		</div>
		<div class="modal-body">
			
			<label>Are sure that you want to delete profile of the patient, <?php echo $title.' '. $fname.' '. $mname. ' '.$lname?>?</label>
				
		</div>
		<div class="modal-footer">


			<?php
				$formToDelete ='<a class="btn btn-danger col-md-2"  href="http://localhost/KLINIK_2/assistant/querry/patient_delete.php?name='.$id.'">Delete</a>';
				echo $formToDelete;
			?>
			



			<button type="button" class="btn btn-default col-md-2" name="delete-patient"data-dismiss="modal">Close</button>

</div>

      </div>
    </div>
	
  	</div>
</div>

	</div>

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