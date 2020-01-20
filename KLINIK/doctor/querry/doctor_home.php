<?php

if(!isset($_SESSION))
{
    session_start();
}

$connection = mysqli_connect("localhost","root","","klinik final");

$doc_id = $_SESSION['doctor_id'];
$query = "SELECT * FROM userprofile WHERE CreatedBy = '$doc_id'";


$result_set = mysqli_query($connection,$query);

$_SESSION['num_patients']=mysqli_num_rows($result_set);

$number_patients = $_SESSION['num_patients'];

//if($result_set){
    
//    while ($record = mysqli_fetch_assoc($result_set)){
  //      $_SESSION['view_id'] = $record['UserId'];
        
//    }
    
//    $name = $record['FirstName'].' '.$record['MiddleName'].' '.$record['LasttName'];
//}

mysqli_close($connection);