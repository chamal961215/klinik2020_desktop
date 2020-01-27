<style>     
                  img {
                        max-width: 100%;
                        max-height: 100%;
                        }
</style>
<<style>
<!--
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
.center_text {
  text-align: center;
  border: 3px solid green;
}
-->
</style>

<link rel="stylesheet" type="text/css" href="css/modal.css">
<!-- Delete popup modal -->
<div class="bg-modal-dark">
	<div class="modal-content-box" style="display:flex; background-color: hsl(0%, 0%, 92%)" >
	<form action="querry/delete_patient.php" method="post">
		<div style="margin:auto; align-self:center; width:80%; height:30%; position: absolute;top: 40%;left: 20%;">
		<label style="font-size:18px; color: black">Are you sure you want to delete this account?</label></div>
		<button  type="submit" class="btn btn-danger btn-icon-split" id="delete_confirm" name="delete_confirm" style="height: 40px; width: 110px">
                    <span class="text">Delete</span>
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i></span>
        </button>
		<a  class="btn btn-light btn-icon-split" id="cancel" name="cancel" style="bottom: 10px; position: absolute ; right: 150px;" id="delete_cancel">

                    <span class="text">Cancel</span>
                    <span class="icon text-gray-600">
                      <i class="">X</i>
                    </span>                    
        </a>        
    </form>
	</div>
</div>
<!-- Delete popup End -->

<div style="width:100%; height:100%; overflow-y:auto">
  <?php
if(!isset($_SESSION))
{
    session_start();
}
?>
<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">





<?php include('includes/topnavbar.php');?>

<?php $_SESSION['view_id']=$_GET['id'];?>
<?php     $connection = mysqli_connect("localhost","root","","klinik final");
//$_SESSION['view_id'] = $_GET['id'];
$id = $_SESSION['view_id'];

$query1 = "SELECT * FROM userprofile WHERE UserId = '$id'";
$query2 = "SELECT * FROM patient WHERE PatientId = '$id'";
$query3 = "SELECT * FROM table_image  WHERE Image_Id = '$id'";

$result_set = mysqli_query($connection,$query1);
$result_set2 = mysqli_query($connection,$query2);
$result_set3 = mysqli_query($connection,$query3);

$record = mysqli_fetch_assoc($result_set);
$record2 = mysqli_fetch_assoc($result_set2);
$record3 = mysqli_fetch_assoc($result_set3);

$title = $record['Title'];
$fname = $record['FirstName'];
$mname = $record['MiddleName'];
$lname = $record['LastName'];
$nic_no= $record['NIC_number'];
$email= $record['Email'];
$dob = $record['DateOfBirth'];
$contact = $record['ContactNo'];
$blood = $record2['BloodType'];
$height = $record2['Height'];
$weight = $record2['Weight'];?>


  <!-- Begin Page Content -->
  <div class="container-fluid">
<div class="card mb-4 py-3  px-5 py-5  p-3 bg-gray-200 ">
                <div class="card-body col-md-">
     <table>
     <tr>
 	<td width="70%">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?php echo $title.' '. $fname.' '. $mname. ' '.$lname?></h1>
    </div>

<!-- <div class="card shadow mb-4">

    <!-- Content Row -->


	<div style="margin-top:20px">
	<div><label class="col-md-4" ><a href = "<?php echo $email ?>"><?php echo $email ?></a></label></div>
	<div><label class="col-md-4"><?php echo $contact ?></label></div>
	</div>
	<div><label class="col-md-2"><B>NIC Number</B></label>
	<label><?php echo $nic_no?></label>
	</div>
	<div><label class="col-md-2"><B>Blood Type</B></label>	<label><?php echo $blood?></label></div>
	<div><label class="col-md-2"><B>Height</B></label>	<label><?php echo $height?></label></div>
	<div><label class="col-md-2"><B>Weight</B></label>	<label><?php echo $weight?></label></div>
	<div><span><label class="col-md-2"><B>Next Clinic Date</B></label><input type="date" class="form-control col-md-3" 
						id="date_clinic" placeholder="mm-dd-yyyy" name="date_clinic">
						<button  type="submit"  id="send_mail" onclick="sendMail()" name="send_mail"
	class="btn btn-secondary btn-icon-split" style="margin-left:20px; margin-top:20px;background-color:Tomato;" >
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Notify Patient</span>
                  </button>
				</span></div>
				
   	<a href="#" id="dCard"  name="dCard"
	class="btn btn-secondary btn-icon-split" style="margin-left:20px; margin-top:20px;background-color:Tomato;" >
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Diagnosis</span>
                  </a>
                  
	<!--<div>   <button type="submit"  name="edit" style="margin-top:10px; margin-left:0px ;margin-bottom:10px ;
	 onclick="document.location.href=\'edit_patient.php?id= $id ";>Edit</button> </div>-->
	
	<span>
	<a href="edit_patient.php?id= <?php $_GET['id']?> " type="submit"  id="edit" name="edit"
	class="btn btn-secondary btn-icon-split" style="margin-left:20px; margin-top:20px;background-color:DodgerBlue;" >
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>

                    <span class="text">Edit Details</span>
                  </a>
                  
   	<a href="#" id="delete"  name="delete"
	class="btn btn-secondary btn-icon-split" style="margin-left:20px; margin-top:20px;background-color:Tomato;" >
                    <span class="icon text-white-50">
                      <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Delete</span>
                  </a>
                  
    </span> 
    </td> 
    <td width="30%">            
                <div class="" style="float:right;margin-right: 30px;width:300px;height:300px" >
                <?php echo '<img style="center" src="data:image/jpeg;base64,'.base64_encode($record3['Image']).'">'?>
               <!--  <img src="img/user.jpg" class="col-md-12 mb-4 rounded-circle" alt="user image" style="width: 300px; height: 275px; margin-top:120px;"> -->  
                  <br>
                  <input type="file" name="prfile_pic_doc" style="padding-left: 50px;">
                </div>
       </td>         
                </tr>
                </table>
        
	</div>

	</div>
	</div>
        <script >
				$(document).ready(function(){
					$('#submit_data').click(function(){
						var img_name = $('#profile_pic').val();
						if (img_name == ''){ alert("You haven't selected an image")}
						else{ var extention = $('#profile_pic').val().split('.').pop().toLowerCase()
							if(jQuery.inArray(extension,['png','gif','jpg','jpeg']) == -1){
								alert("Invalid image type");
								 $('#profile_pic').val();
								 return false;
								}};
						});
					});
        </script>
        

  <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->
<!-- Functions (ex:- delete) -->
 <!--            <script>
               function delete_patient(){
            	   if (confirm("Are you sure you want to delete the patient account of "))
        		{
					return true;
                  alert("The account has been successfully deleted");
        		}
            	   else{}
             }

               function sendMail(){
            	   if (confirm("Are you sure you want to inform  of his next clinic date"))
        		{
               		
					return true;
               	 alert("The account has been successfully deleted");
        		}
            	   else{}
             }
           </script>
           
            <script>
             
                    
           </script>  -->
           <!-- Diagnosis Card -->
	<div class="bg-modal-dark2">
		<div class="modal-Dcard" style="display: flex; background-color: white">
			<div id="diag_header" class="diag_header"  ><h1 >Diagnosis Card</h1></div>
				<div class="content">
    				<div class="tabcontainer">
    					<button id="tab1">tab#1</button>
    					<button id="tab2">tab#2</button>
    					<button id="tab3">tab#3</button>
    					<button id="tab4">tab#4</button>
    					<button id="tab5">tab#5</button>
    				</div>
    				<div class="tabcontent tab1Content">
    					<div class="field"><h3 style="font-style: bold">Diagnosis</h3></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">BHT</label><input type="text" class="col-mb-3"></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">DOA</label><input type="text" class="col-mb-3"></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">DOD</label><input type="text" class="col-mb-3"></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Blood Group</label><input type="text" class="col-mb-3"></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Transfered From</label><input type="text" class="col-mb-3"></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Discharged To</label><input type="text" class="col-mb-3"></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Diagnosis</label><input type="text" class="col-mb-3" style="height: 100px"></div>
    				</div>
    				<div class="tabcontent tab2Content">
    					<div class="field"><h3 style="font-style: bold">Summary of Investigation</h3></div>
    					<div class="field"><h4 style="font-style: bold">Haematological</h4>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Hb</label><input type="text" class="col-mb-3"></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">P/s</label><input type="text" class="col-mb-3"></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">WBC</label><input type="text" class="col-mb-3"></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">DC</label><input type="text" class="col-mb-3"></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Blood Pressure</label><input type="text" class="col-mb-3"></div></div>
    				</div>
    				<div class="tabcontent tab3Content">
    					
    				</div>
    				<div class="tabcontent tab4Content">
    					
    				</div>
    				<div class="tabcontent tab5Content">
    					
    				</div>
				</div>
            <div><a  class="btn btn-light btn-icon-split" id="cancel2" name="cancel2" style="bottom: 10px; position: absolute ; right: 150px;" id="delete_cancel">
	           <span class="text">Cancel</span>
                    <span class="icon text-gray-600">
                      <i class="">X</i>
                    </span>                    
        </a>  </div>
               <div><a  class="btn btn-light btn-icon-split diagnosissubmit" id="Submit" name="Submit" style="bottom: 10px; position: absolute ; right: 30px;" id="delete_cancel">
	           <span class="text">Submit</span>
                    <span class="icon text-gray-600">
                      <i class=""></i>
                    </span>                    
        </a>  </div>
		</div>
	</div>
<!-- Dcard end -->

</div>
<script>
    document.getElementById("delete").addEventListener("click",
        function(){
            document.querySelector('.bg-modal-dark').style.display = "flex";
        });
</script>


<script>
    document.getElementById("tab2").addEventListener("click",
        function(){
    		document.querySelector('.tab1content').style.display = "none";
            document.querySelector('.tab2content').style.display = "block";
            document.querySelector('.tab3content').style.display = "none";
            document.querySelector('.tab4content').style.display = "none";
            document.querySelector('.tab5content').style.display = "none";     
            
        });
</script>


<script>
    document.getElementById("tab3").addEventListener("click",
        function(){
    		document.querySelector('.tab1content').style.display = "none";
            document.querySelector('.tab3content').style.display = "block";
            document.querySelector('.tab2content').style.display = "none";
            document.querySelector('.tab4content').style.display = "none";
            document.querySelector('.tab5content').style.display = "none";     
            
        });
</script>

<script>
    document.getElementById("tab1").addEventListener("click",
        function(){
    		document.querySelector('.tab2content').style.display = "none";
            document.querySelector('.tab1content').style.display = "block";
            document.querySelector('.tab3content').style.display = "none";
            document.querySelector('.tab4content').style.display = "none";
            document.querySelector('.tab5content').style.display = "none";     
            
        });
</script>

<script>
    document.getElementById("tab4").addEventListener("click",
        function(){
    		document.querySelector('.tab2content').style.display = "none";
            document.querySelector('.tab4content').style.display = "block";
            document.querySelector('.tab3content').style.display = "none";
            document.querySelector('.tab1content').style.display = "none";
            document.querySelector('.tab5content').style.display = "none";     
            
        });
</script>

<script>
    document.getElementById("tab5").addEventListener("click",
        function(){
    		document.querySelector('.tab2content').style.display = "none";
            document.querySelector('.tab5content').style.display = "block";
            document.querySelector('.tab3content').style.display = "none";
            document.querySelector('.tab4content').style.display = "none";
            document.querySelector('.tab1content').style.display = "none";     
            
        });
</script>

<script>
    document.getElementById("dCard").addEventListener("click",
        function(){
            document.querySelector('.bg-modal-dark2').style.display = "flex";
            document.querySelector('.tab2content').style.display = "none";
            document.querySelector('.tab1content').style.display = "block";
        });
</script>

<script>
    document.getElementById("cancel2").addEventListener("click",
        function(){
            document.querySelector('.bg-modal-dark2').style.display = "none";
        });
</script>

<script>
    document.getElementById("cancel").addEventListener("click",
        function(){
            document.querySelector('.bg-modal-dark').style.display = "none";
        });
</script>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
