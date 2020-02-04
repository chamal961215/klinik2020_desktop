<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!--?php include('includes/doctor_edit.php');?>-->

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Doctor</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    </div>

    <div class="tab-content" id="nav-tabContent" style="background-color: #ffffff; margin-left: -10px; margin-left: -12px; margin-top: -0.5px;" >
        <div class="tab-pane fade show active border border-top-1" id="nav-addDoctor" role="tabpanel" aria-labelledby="nav-addDoctor-tab" style="  background-color: #ffffff; padding: 25px; padding-top: 5px; padding-bottom: 20px; z-index: 0;">
            <!-- Add doctor form -->
            <form action="includes/doctor_edit.php" method="post">
                <div class="col-md-8">
                <div class="form-row mb-2" style="padding-top: 5px; margin-left: -15px; margin-right: -18px ">
                    <div class="col-md-12">
                      <label class="col-md-3" for="name_with_initial_doc" >Name With Initials</label>
                      <div class="input-group col-md-10">
                        <div class="input-group-addon">
                            <select class="browser-default custom-select rounded-left" id="title" name="title">
                              <option value="Dr." >Dr.</option>
                              
                            </select>                       
                        </div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="ex: A.B.C. abc" required></div>
                        
                        
                      </div>
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-md-5">
                         <label for="slmc_no">SLMC No.</label>
                         <input type="text" class="form-control" id="slmc_no" placeholder="#####" 
                         name="slmc_no" required>
                    </div>
                   
                   
                </div>
                    <div class="form-row mb-2">
                    <div class="col-md-6">
                        <label for="nic_no">NIC Number</label>
                        <input type="text" class="form-control" id="nic" name="nic" placeholder="ex: #########v" required>
                    </div>
                    </div>
                <div class="form-row mb-2">
                    <div class="col-md-8">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="ex: 1234 Main St" required>
                    </div>
                  </div>
                <div class="form-row">
                    <div class="col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div></div>
                    <div class="form-group col-md-4">
                    <label for="contact_no">Contact No</label>
                    <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="0712345678" required>
                    </div>
                </div>
                
                     
                    
                    <div class="form-row mb-2">
                        <button type="submit"  class="btn btn-primary col-md-10" name="submit-doctor-details" style="margin-top:31px; margin-left:0px ;"> Confirmed and Submit</button>
                    </div>
                   
                </div>
                </div>
                <div class="float-right" style="margin-top: -450px; margin-right: 20px">
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