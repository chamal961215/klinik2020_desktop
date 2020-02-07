<?php
if(!isset($_SESSION))
{
    session_start();
}?>

<?php
$connection = mysqli_connect("localhost","root","","klinik final");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
    $doc_id = $_SESSION['doctor_id'];
    $id = $_SESSION["view_id"];
    
if(isset($_POST['submit_diagnosis'])){
    

    $patientid = $id;
    $bht = $_POST['BHT'];
    $doa = $_POST['DOA'];
    $dod = $_POST['DOD'];
    $transfer = $_POST['Transfered'];
    $discharge = $_POST['Discharged'];
    $diagnosis = $_POST['Diagnosis'];
    $hb = $_POST['HB'];
    $ps = $_POST['PS'];
    $wbc = $_POST['WBC'];
    $dc = $_POST['DC'];
    $bloodp = $_POST['BloodP'];
    $biochemical = $_POST['biochemical'];
    $radiological = $_POST['radiological'];
    $microbiological = $_POST['microbiological'];
    $other_summary = $_POST['other_summary'];
    $general = $_POST['general'];
    $respiratory = $_POST['respiratory'];
    $cvs = $_POST['cvs'];
    $cns = $_POST['cns'];
    $git = $_POST['git'];
    $renal = $_POST['renal'];
    $other_condition = $_POST['other_condition'];
    $plan = $_POST['plan'];
    $ac = $_POST['ac'];
    $simv = $_POST['simv'];
    $bi = $_POST['bi'];
    $spont = $_POST['spont'];
    $nonin = $_POST['nonin'];
    $o2 = $_POST['o2'];
    $other_resp = $_POST['other_resp'];
    $antibio = $_POST['antibio'];
    $intrope = $_POST['intrope'];
    $other_last = $_POST['other_last'];
    $cvl = $_POST['cvl'];
    $dialysis = $_POST['dialysis'];
    $arterial = $_POST['arterial'];
    $ictube = $_POST['ictube'];
    
    
    $query = "INSERT INTO diagnosis (PatientId,BHT,DOA,DOD,TransferedFrom,DischargedTo,Diagnosis,HB,PS,WBC,DC,BloodPressure,Biochemical,Radiological,Microbiological,Other,
                                       General,Respiratory,CVS,CNS,GIT,Renal,Other_Discharge,Plan,ac,simv,bi,spont,nonin,o2,other_resp,antibio,intropes,other_man,cvl,dialysis,arterial,ictube,date)
                VALUES ('{$patientid}','{$bht}' ,'{$doa}','{$dod}','{$transfer}','{$discharge}','{$diagnosis}','{$hb}','{$ps}',
                        '{$wbc}','{$dc}','{$bloodp}','{$biochemical}','{$radiological}','{$microbiological}','{$other_summary}','{$general}',
                         '{$respiratory}','{$cvs}','{$cns}','{$git}','{$renal}','{$other_condition}','{$plan}','{$ac}','{$simv}','{$bi}',
                          '{$spont}','{$nonin}','{$o2}','{$other_resp}','{$antibio}','{$intrope}','{$other_last}','{$cvl}','{$dialysis}','{$arterial}','{$ictube}',CURDATE())";
  
}


    mysqli_query($connection,$query);

    
    header( "location:http://localhost/klinik/doctor/viewpatient.php?id=".$id);

mysqli_close($connection);
?>