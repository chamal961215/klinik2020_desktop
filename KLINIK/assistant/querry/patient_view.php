<?php

    $connection = mysqli_connect("localhost","root","","klinik_final");
    $id = $_GET['id'];
    $query1 = "SELECT * FROM userprofile WHERE UserId = '$id'";
    $query2 = "SELECT * FROM patient WHERE PatientId = '$id'";

    $result_set = mysqli_query($connection,$query1);
    $result_set2 = mysqli_query($connection,$query2);
    
    $record = mysqli_fetch_assoc($result_set);
    $record2 = mysqli_fetch_assoc($result_set2);
    
    $title = $record['Title'];
    $fname = $record['FirstName'];
    $mname = $record['MiddleName'];
    $lname = $record['LastName'];
    $nic_no = $record['NIC_number'];
    $email = $record['Email'];
    $contact = $record['ContactNo'];
    $blood = $record2['BloodType'];
    $height = $record2['Height'];
    $weight = $record2['Weight'];

   
    function edit() {
       // href ( \'edit_patient.php?id='$id') ;
    }
    
    mysqli_close($connection);
?>


