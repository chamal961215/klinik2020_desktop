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
      <h1 class="h3 mb-0 text-gray-800">User Registration</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="margin-top: -10px;">
            <a class="nav-item nav-link active" id="nav-addDoctor-tab" data-toggle="tab" href="#nav-addDoctor" role="tab" aria-controls="nav-addDoctor" aria-selected="true" style="z-index: 1">Add Doctor</a>
            <a class="nav-item nav-link" id="nav-addAssistant-tab" data-toggle="tab" href="#nav-addAssistant" role="tab" aria-controls="nav-addAssistant" aria-selected="false" style="z-index: 1">Add Assistant</a>
        </div>
    </nav>
    </div>

    <div clss="row">

    <div class="tab-content" id="nav-tabContent" style="background-color: #ffffff; margin-left: -10px; margin-left: -12px; margin-top: -0.5px;" >
        <div class="tab-pane fade show active border border-top-1" id="nav-addDoctor" role="tabpanel" aria-labelledby="nav-addDoctor-tab" style="  background-color: #ffffff; padding: 25px; padding-top: 5px; padding-bottom: 20px; z-index: 0;">
            <!-- Add doctor form -->
            <form action="queries/process-registraion-by-admin.php" method="post">
                <div class="col-md-8">
                <div class="form-row mb-2" style="padding-top: 5px; margin-left: -15px; margin-right: -18px ">
                    <div class="col-md-12">
                      <label class="col-md-3" for="name_with_initial_doc" >Name With Initials</label>
                      <div class="input-group col-md-10">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Dr.</div>
                        </div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="ex: A.B.C. abc" required>
                      </div>
                    </div>
                </div>
                 <div class="form-row mb-2">
                    <div class="col-md-5">
                         <label for="slmc_no">SLMC No</label>
                         <input type="text" class="form-control" id="slmc_no" placeholder="#####" name="slmc_no" required>
                    </div>
                    <div class="col-md-5">
                         <label for="NIC_no">NIC No</label>
                         <input type="text" class="form-control" id="NIC_no" name="NIC_no" placeholder="##########" required>
                    </div> 
                </div>
                 <div class="form-row mb-2">
                    <div class="col-md-10">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="ex: 1234 Main St" required>
                    </div>
                 </div>
                <div class="form-row">
                    <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="contact_no">Contact No</label>
                    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="0712345678" required>
                    </div>
                </div>
                <div class="form-row pb-3">
                    <div class="col-md-5">
                        <label for="enroll_key">Enrollment Key</label>
                        <input type="text" class="form-control" id="enroll_key" name="enroll_key" placeholder="ex: Enroll@2019" required>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary col-md-10" name="submit-doc-details" style="margin-top:31px; margin-left:0px;"> Confirmed & Submit</button>
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
        <div class="tab-pane fade border border-top-1" id="nav-addAssistant" role="tabpanel" aria-labelledby="nav-addAssistant-tab" style="  background-color: #ffffff; padding: 25px; padding-top: 5px; padding-bottom: 20px; z-index: 0;">
            <!-- Add asistant form -->
           <form action="queries/process-registraion-by-admin.php" method="post">
                <div class="col-md-8">
                <div class="form-row mb-2" style="padding-top: 5px; margin-left: -15px; margin-right: -18px ">
                    <div class="col-md-12">
                      <label class="col-md-3" for="name_with_initial_asst" >Name With Initials</label>
                      <div class="input-group col-md-10">
                        <div class="input-group-addon">
                            <select class="browser-default custom-select rounded-left" id="titles" name="title">
                              <option value="Mr." >Mr.</option>
                              <option value="Ms." >Ms.</option>
                              <option value="Mrs.">Mrs.</option>
                            </select>                       
                        </div> 
                        <input type="text" class="form-control ml-2 rounded-left" id="name" name="name" placeholder="ex: A.B.C. abc" required>
                      </div>
                    </div>
                </div>
                 <div class="form-row mb-2">
                    <div class="col-md-5">
                         <label for="staff_id">Staff ID</label>
                         <input type="text" class="form-control" id="staff_id" placeholder="#####" name="staff_id" required>
                    </div>
                    <div class="col-md-5">
                         <label for="NIC_no">NIC No</label>
                         <input type="text" class="form-control" id="NIC_no" placeholder="##########" name="NIC_no" required>
                    </div> 
                </div>
                 <div class="form-row mb-2">
                    <div class="col-md-10">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="ex: 1234 Main St" required>
                    </div>
                 </div>
                <div class="form-row">
                    <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="contact_no_asst">Contact No</label>
                    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="0712345678" required>
                    </div>
                </div>
                <div class="form-row pb-3" style="padding-top: -12px;">
                    <div class="col-md-5">
                        <label for="enroll_key">Enrollment Key</label>
                        <input type="text" class="form-control" id="enroll_key" name="enroll_key" placeholder="ex: Enroll@2019" required>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary col-md-10" name="submit-asst-details" style="margin-top:31px; margin-left:0px;"> Confirmed & Submit</button>
                    </div>
                </div>
                </div>
                <div class="float-right" style="margin-top: -365px; margin-right: 30px">
                  <img src="img/user.jpg" class="col-md-12 mb-4 rounded-circle" alt="user image" style="width: 300px; height: 275px;">
                  <br>
                  <input type="file" name="profile_pic_asst" style="padding-left: 50px;">
                </div>
            </form>
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

