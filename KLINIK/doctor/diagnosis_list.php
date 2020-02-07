<link rel="stylesheet" type="text/css" href="css/modal.css">
<?php
    include('includes/header.php');
    include('includes/navbar.php');
    ?>
    
    

<!-- Content Wrapper -->

<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
<?php
if(!isset($_SESSION))
{
    session_start();
}?>
<?php include('includes/topnavbar.php');?>
<?php 
$connection = mysqli_connect("localhost","root","","klinik final");

$doc_id = $_SESSION['doctor_id'];
$id = $_SESSION["view_id"];

$query = "SELECT UserId,Title,FirstName,MiddleName,LastName FROM userprofile WHERE UserId = '$id' ";
$result_set = mysqli_query($connection,$query);

$record = mysqli_fetch_assoc($result_set);

$title = $record['Title'];
$fname = $record['FirstName'];
$mname = $record['MiddleName'];
$lname = $record['LastName'];

mysqli_close($connection);

?>
    <!-- Page Heading -->

	
    <div style="margin-left:30px"><div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Diagnosis for <?php echo $title.' '.$fname.' '.$lname?> </h1>
    </div></div>
	
    
  <!-- Begin Page Content -->
  <form action="get_diagnosis_list.php" method="post">
 <!--  <div class="form-row mb-2">
      <div class="input-group col-md-2" style="margin-top:10px; margin-left:100px ;margin-bottom:10px ;margin-right:20px">
              <input type="text" class="form-control bg-light border-2 small" id="userid_search" name="userid_search" placeholder="UserId" 
              aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit"  name="search_by_id">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
      </div>
      </div>-->
      </form>
      
  <div class="container-fluid">
   


    <!-- Content Row -->
    <div class="row">
    <div class="card shadow mx-auto">
     <div class="card-body">
        <div>
  <!-- <div class="form-row mb-2"> 
   <div class="col-md-3">
   <input type="text" class="form-control" id="userid_search" name="userid_search" placeholder="#########">
   <button type="submit"  name="search_by_id" style="margin-top:10px; margin-left:0px ;margin-bottom:10px ;">Search</button>
   </div>
   <div class="col-md-3">
   <input type="text" class="form-control" id="name_search" name="name_search" placeholder="#########">
   <button type="submit"  name="search_by_name" style="margin-top:10px; margin-left:0px ;margin-bottom:10px ;">Search</button>
   </div>
   </div>-->
    <?php
        $table = '<table class="table">';
        $table .= '<thead class="thead-light"><tr>
<th scope="col" class="px-5" style="text-align:center;">Date</th>
<th scope="col" class="px-5" style="text-align:center;"> Reference Number</th>
<th scope="col" class="px-5" style="text-align:center;">View</th>
</thead>';
        include('querry/get_diagnosis_list.php');
        $table .= '</table>';
        echo $table;
    ?>
    <!--<?php
        #include('quries/get_user_profile_list.php');
        #<tbody>
        #<tr>
        #<td style="text-align:center;">0000000000</td>
        #<td style="text-align:center;">Dr.</td>
        #<td style="text-align:center;">Wasantha Perera</td>
        #<td style="text-align:center;">0322267194</td>
        #<td style="text-align:center;">chamal1996@gmail.com</td>
        #<td style="text-align:center;">
        #<button type="submit" name="view_profile_btn" class="btn btn-success"><i class="fas fa-eye"></i> View </button>
        #</td>
        #<td style="text-align:center;">
        #<button type="submit" name="delete_profile_btn" class="btn btn-danger"><i class="fas fa-window-close"></i> Delete </button>
        #</td>
        #</tr>
        #</tbody>
    ?> -->
   
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