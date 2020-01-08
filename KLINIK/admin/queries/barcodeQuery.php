<?php
include('includes/header.php');
include('includes/navbar.php');
?>
            

            <div class="col-lg-6">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Barcode</h6>
                </div>
                <div class="card-body">
                  <div style="margin-left: 5%">
					<?php
					include 'barcode128.php';
					$name = $_POST['name'];
					$id = $_POST['id'];

					echo "<p class='inline'><span ><b>Item: $product</b></span>".bar128(stripcslashes($_POST['id']))."<span ><b>Price: ".$id." </b><span></p>&nbsp&nbsp&nbsp&nbsp";
					?>
				</div>
                </div>
              </div>

            </div>


	</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>