<?php
include('includes/header.php');
include('includes/navbar.php');
?>
            

            <div class="col-lg-6">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Barcode Generator</h6>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" method="post" action="barcodeQuery.php">
                    <div class="form-group">
                      <label class="control-label col-sm-4" for="Name">Patient Name</label>
                      <div class="col-sm-12">
                        <input autocomplete="OFF" type="text" class="form-control" id="name" name="name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-4" for="id">Patient ID:</label>
                      <div class="col-sm-12">
                        <input autocomplete="OFF" type="text" class="form-control" id="id" name="id">
                      </div>
                    </div>
                    <!--
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="rate">Rate</label>
                      <div class="col-sm-12">          
                        <input autocomplete="OFF" type="text" class="form-control" id="rate"  name="rate">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="print_qty">Barcode Quantity</label>
                      <div class="col-sm-12">          
                        <input autocomplete="OFF" type="print_qty" class="form-control" id="print_qty"  name="print_qty">
                      </div>
                    </div>
                  -->

                    <div class="form-group">        
                     <div class="col-sm-offset-2 col-sm-12">
                       <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

            </div>


	</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>