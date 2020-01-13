<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<?php include('includes/topnavbar.php');?>

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Patient Registration</h1>
    </div>

    <!-- Content Row --> 
    <div class="row">


    </div>



    <div class="tab-content" id="nav-tabContent" style="background-color: #ffffff; margin-left: -10px; margin-left: -12px; margin-top: -0.5px;" >
        <div class="tab-pane fade show active border border-top-1" id="nav-addDoctor" role="tabpanel" aria-labelledby="nav-addDoctor-tab" style="  background-color: #ffffff; padding: 25px; padding-top: 5px; padding-bottom: 20px; z-index: 0;">
            <!-- Add doctor form -->
            <form action="querry/patient_insert.php" method="post">
                <div class="col-md-8">
                <div class="form-row mb-2" style="padding-top: 5px; margin-left: -15px; margin-right: -18px ">
                    <div class="col-md-12">
                      <label class="col-md-3" for="name_with_initial_doc" >Full Name</label>
                      <div class="input-group col-md-10">
                        <div class="input-group-addon">
                            <select class="browser-default custom-select rounded-left" id="title" name="title">
                              <option value="Mr." >Mr.</option>
                              <option value="Ms." >Miss.</option>
                              <option value="Mrs.">Mrs.</option>
                            </select>                       
                        </div>
                        <div class="col-md-3"><input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required></div>
                        <div class="col-md-3"><input type="text" class="form-control" id="middlename" name="middlename" placeholder="Middle Name" required></div>
                        <div class="col-md-3"><input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required></div>
                        
                      </div>
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">
                         <label for="date_birth">Date of Birth</label>
                         <input type="text" class="form-control" id="date_birth" placeholder="YYYY-MM-DD" name="date_birth" required>
                    </div>
                   
                   
                    <div class="col-mid-5">
                         <div class="input-group-addon col-md-8">
                          <label for="gender">Gender</label>
                            <select class="browser-default custom-select rounded-left" id="gender" name="gender">
                              <option value="Mr." >Male</option>
                              <option value="Ms." >Female</option>
                            </select>                       
                       
                    </div>
                    </div>
                </div>
                    <div class="form-row mb-2">
                    <div class="col-md-6">
                        <label for="nic_no">NIC Number</label>
                        <input type="text" class="form-control" id="nic_no" name="nic_no" placeholder="eg: 000000000V" required>
                    </div>
                    </div>
                 <div class="form-row mb-2">
                    <div class="col-md-10">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="No., Street, City" required>
                    </div>
                 </div>
                <div class="form-row">
                    <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="abc@ghilk.com" required>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="contact_no">Contact No</label>
                    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="0712345678" required>
                    </div>
                </div>
                <div class="form-row pb-3">
                    <div class="col-md-3">
                        <label for="bloodtype">Blood Type</label>
                            <select class="browser-default custom-select rounded-left" id="bloodtype" name="bloodtype">
                              <option value="A+" >A+</option>
                              <option value="A-" >A-</option>
                              <option value="B+" >B+</option>
                              <option value="B-" >B-</option>
                              <option value="AB+" >AB+</option>
                              <option value="AB-" >AB-</option>
                              <option value="O+" >O+</option>
                              <option value="O-" >O-</option>
                            </select>
                         </div>
                     <div class="col-md-3">
                   		<label for="height">Height</label>
                    	<input type="text" class="form-control" id="height" name="height" placeholder="(in cm)" required>
                    </div>
                     <div class="col-md-3">
                   		<label for="weight">Weight</label>
                    	<input type="text" class="form-control" id="weight" name="weight" placeholder="(in kg)" required>
                    </div>
                    </div>
                    <div class="form-row mb-2">
                        <button type="submit"  class="btn btn-primary col-md-10" name="submit-patient-details" style="margin-top:31px; margin-left:0px ;"> Confirmed and Submit</button>
                    </div>
                   
                </div>
                </div>
                <div class="float-right" style="margin-top: -365px; margin-right: 30px">
                  <img src="img/user.jpg" class="col-md-12 mb-4 rounded-circle" alt="user image" style="width: 300px; height: 275px;">
                  <br>
                  <input type="file" name="prfile_pic_doc" style="padding-left: 50px;">
                </div>
             
	</form>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
