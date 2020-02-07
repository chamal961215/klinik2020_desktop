 <link rel="stylesheet" type="text/css" href="css/modal2.css">
<?php
if(!isset($_SESSION))
{
    session_start();
}

include('includes/header.php');
include('includes/navbar.php');
?>
<?php 
$connection = mysqli_connect("localhost","root","","klinik final");
$diagid = $_GET['id'];
$id = $_SESSION['view_id'];

$query1 = "SELECT * FROM diagnosis WHERE DiagnosisId = '$diagid'";

$result_set = mysqli_query($connection,$query1);

$record = mysqli_fetch_assoc($result_set);


$bht =$record['BHT'];
$doa = $record['DOA'];
$dod = $record['DOD'];
$transfer = $record['TransferedFrom'];
$discharge = $record['DischargedTo'];
$diagnosis = $record['Diagnosis'];
$hb = $record['HB'];
$ps = $record['PS'];
$wbc = $record['WBC'];
$dc =$record['DC'];
$bloodp = $record['BloodPressure'];
$biochemical =$record['Biochemical'];
$radiological = $record['Radiological'];
$microbiological = $record['Microbiological'];;
$other_summary = $record['Other'];
$general = $record['General'];
$respiratory = $record['Respiratory'];
$cvs = $record['CVS'];
$cns = $record['CNS'];
$git = $record['GIT'];
$renal = $record['Renal'];
$other_condition = $record['Other_Discharge'];
$plan = $record['Plan'];
$ac = $record['ac'];
$simv = $record['simv'];
$bi = $record['bi'];
$spont = $record['spont'];
$nonin = $record['nonin'];
$o2 = $record['o2'];
$other_resp = $record['other_resp'];
$antibio = $record['antibio'];
$intrope = $record['intropes'];
$other_last = $record['other_man'];
$cvl = $record['cvl'];
$dialysis = $record['dialysis'];
$arterial = $record['arterial'];
$ictube = $record['ictube'];

?>

<!-- Content Wrapper -->
  <link rel="stylesheet" type="text/css" href="css/modal2.css">
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<?php include('includes/topnavbar.php');?>

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->

	           <!-- Diagnosis Card -->
	<div class="bg-modal-dark2">
		<div class="modal-Dcard" style="display: block; background-color: white">
			<div id="diag_header" class="diag_header"  ><h1 >Diagnosis Card</h1></div>
				<div class="content">
    				<div class="tabcontainer">
    					<button id="tab1">tab#1</button>
    					<button id="tab2">tab#2</button>
    					<button id="tab3">tab#3</button>
    					<button id="tab4">tab#4</button>
    				</div>
    				<form action="querry/diagnosis_insert.php" method="post">
    				<div class="tabcontent tab1Content">
    					<div class="field"><h3 style="font-style: bold">DIAGNOSIS</h3></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">BHT</label><label  class="col-mb-3"><?php echo $bht?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">DOA</label><label  class="col-mb-3"><?php echo $doa?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">DOD</label><label   class="col-mb-3"><?php echo $dod?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Blood Group</label><label  class="col-mb-3"><?php echo $transfer?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Transfered From</label><label  class="col-mb-3"><?php echo $transfer?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Discharged To</label><label class="col-mb-3"><?php echo $discharge?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Diagnosis</label><label  class="col-mb-3" style="height: 100px"><?php echo $diagnosis?></label></div>
    				</div>
    				<div class="tabcontent tab2Content" style="overflow-y: scroll; display: none;">
    					<div class="field"><h3 style="font-style: bold">SUMMARY OF INVESTIGATION</h3></div>
    					<div class="field"><h4 style="font-style: bold">Haematological</h4>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Hb</label><label class="col-mb-3"><?php echo $hb?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">P/s</label><label  class="col-mb-3"><?php echo $ps?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">WBC</label><label  class="col-mb-3"><?php echo $wbc?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">DC</label><label class="col-mb-3"><?php echo $dc?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Blood Pressure</label><label  class="col-mb-3"><?php echo $bloodp?></label></div></div>
    					<div class="field"><h4 style="font-style: bold">Biochemical</h4>
    					<div class="field"><label  class="col-mb-6" style ="height: 100px;width: 500px; margin-left: 10px"><?php echo $biochemical?></label></div></div>
    					<div class="field"><h4 style="font-style: bold">Radiological</h4>
    					<div class="field"><label  class="col-mb-6" style ="height: 100px;width: 500px; margin-left: 10px"><?php echo $radiological?></label></div></div>
    					<div class="field"><h4 style="font-style: bold">Microbiological</h4>
    					<div class="field"><label   class="col-mb-6" style ="height: 100px;width: 500px; margin-left: 10px"><?php echo $microbiological?></label></div></div>
    					<div class="field"><h4 style="font-style: bold">Other</h4>
    					<div class="field"><label class="col-mb-6" style ="height: 100px;width: 500px; margin-left: 10px"><?php echo $other_summaryr?></label></div></div>
    				</div>
    				<div class="tabcontent tab3Content" style="overflow-y: scroll ;display: none;">
    					<div class="field"><h3 style="font-style: bold">CONDITIONS ON DISCHARGE</h3></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">General</label><label  class="col-mb-3"><?php echo $general?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Respiratory</label><label class="col-mb-3"><?php echo $respiratory?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">CVS</label><label class="col-mb-3"><?php echo $cvs?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">CNS</label><label class="col-mb-3"><?php echo $cns?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">GIT</label><label class="col-mb-3"><?php echo $git?></label></div>
						<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Renal</label><label class="col-mb-3"><?php echo $renal?></label></div>
						<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px;">Other</label><label style="" class="col-mb-3"><?php echo $other_condition?></label></div>
						<div class="field"><h4 style="font-style: bold">Plan on discharge</h4>
    					<div class="field"><label class="col-mb-6" style ="height: 100px;width: 500px; margin-left: 10px"><?php echo $plan?></label></div></div>
    				</div>
    				<div class="tabcontent tab4Content" style="overflow-y: scroll ; display: none;">
    					<div class="field"><h3 style="font-style: bold">MANAGEMENT</h3></div>
    					<div class="field"><h4 style="font-style: bold">Respiratory Support</h4>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">AC</label><label class="col-mb-3"><?php echo $ac?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">SIMV</label><label class="col-mb-3"><?php echo $simv?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Bi Level</label><label class="col-mb-3"><?php echo $bi?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Spontaneous</label><label class="col-mb-3"><?php echo $spont?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Non invasive</label><label class="col-mb-3"><?php echo $nonin?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">O2 mask/prongs/T piece</label><label class="col-mb-3"><?php echo $o2?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Other</label><label  class="col-mb-3"><?php echo $other_resp?></label></div>
    					</div>
    					<div class="field"><h4 style="font-style: bold">Antibiotics</h4>
    					<div class="field"><label class="col-mb-6" style ="height: 100px;width: 500px; margin-left: 10px"><?php echo $antibio?></label>></div></div>
    					<div class="field"><h4 style="font-style: bold">Intropes</h4>
    					<div class="field"><label class="col-mb-6" style ="height: 100px;width: 500px; margin-left: 10px"><?php echo $intrope?></label></div></div>
    					<div class="field"><h4 style="font-style: bold">Other</h4>
    					<div class="field"><label class="col-mb-6" style ="height: 100px;width: 500px; margin-left: 10px"><?php echo $other_last?></label>></div></div>
    					<div class="field"><h4 style="font-style: bold">Procedures</h4>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">CVL</label><label class="col-mb-3"><?php echo $cvl?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Dialysis</label><label class="col-mb-3"><?php echo $dialysis?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">Arterial</label><label class="col-mb-3"><?php echo $arterial?></label></div>
    					<div class="field"><label class="col-mb-3 labels" style="margin-right: 20px; margin-left: 60px; margin-bottom:10px; margin-top: 10px;">IC tube</label><label class="col-mb-3"><?php echo $ictube?></label></div></div>
    				</div>
				</div>
		<div><a  href='http://localhost/klinik/doctor/viewpatient.php?id=<?php echo $id?>' class="btn btn-light btn-icon-split" id="cancel2" name="cancel2" style="bottom: 10px; position: absolute ; right: 50px;">
	           <span class="text">Cancel</span>
                    <span class="icon text-gray-600">
                      <i class="">X</i></a>
                    </span>                    
          </div>
		</div>
	</div>
  </div>
  </div>
  
  <!-- /.container-fluid -->
<!-- End of Main Content -->
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


<!-- <script>
    document.getElementById("cancel2").addEventListener("click",
        function(){
            document.querySelector('.bg-modal-dark2').style.display = "none";
        });
</script> -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
