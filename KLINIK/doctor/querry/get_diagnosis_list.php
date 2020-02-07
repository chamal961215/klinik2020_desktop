<?php
if(!isset($_SESSION))
{
    session_start();
}?>
<?php

    $connection = mysqli_connect("localhost","root","","klinik final");
    
    $doc_id = $_SESSION['doctor_id'];
    $id = $_SESSION["view_id"];

    $query2 = "SELECT date,DiagnosisId,PatientId FROM diagnosis WHERE PatientId = '$id' ";
    
    
    $result_set2 = mysqli_query($connection,$query2);
    
    $record2 = mysqli_fetch_assoc($result_set2);
    
    
    $date = $record2['date'];
    $diagnosisNum = $record2['DiagnosisId'];

    if($result_set2){

    	while ($record2 = mysqli_fetch_assoc($result_set2)){
    	    $_SESSION['view_id'] = $record2['PatientId'];
    		$table .= '<tr>';
    		$table .= '<td style="text-align:center;">'. $record2['date'] . '</td>';
    		$table .= '<td style="text-align:center;">'. $record2['DiagnosisId']. '</td>';
    		$table .= '<td style="text-align:center;"><button type="button" name="view_profile_btn" class="btn btn-success" 
            onClick="document.location.href=\'view_diagnosis.php?id='. $record2['DiagnosisId'].'\'"><i class="fas fa-eye" ></i> View </button> </td>';
    		$table .= '</tr>';
    	}
    	

    }

    mysqli_close($connection);
    ?>