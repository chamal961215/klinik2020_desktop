<?php

// Create connection
$connection = mysqli_connect("localhost", "root", "", "kdb");
$id = $_GET['id'];

$query1 = "SELECT * FROM user WHERE id = '$id'";
$query2 = "SELECT * FROM patient WHERE PatientId = '$id'";

$result_set = mysqli_query($connection,$query1);
$result_set2 = mysqli_query($connection,$query2);

$record = mysqli_fetch_assoc($result_set);
$record2 = mysqli_fetch_assoc($result_set2);

$title = $record['Title'];
$fname = $record['FirstName'];
$mname = $record['MiddleName'];
$lname = $record['LastName'];
$dob = $record['DateOfBirth'];
$address = $record['Address'];
$nic_no= $record['NIC_number'];
$email= $record['Email'];
$contact = $record['ContactNo'];
$blood = $record2['BloodType'];
$height = $record2['Height'];
$weight = $record2['Weight'];




//mysqli_close($connection);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit-doctor-details'])){
    
    



    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $nic = $_POST['nic'];
    $staff_id = $_POST['staff_id'];
    $address = $_POST['address'];
    $user_type = $_POST['user_type'];
    $contact_no = $_POST['contact_no'];
    $last_login = $_POST['last_login'];
    $enrollment_key = $_POST['enrollment_key'];
    $slmc_no = $_POST['slmc_no'];
    
    $query3 = "UPDATE user (name,email,title,nic,staff_id,,address,user_type,contact_no,enrollment_key,slmc_no) VALUES ('{$name}','{$email}' ,'{$title}',
'{$nic}','{$staff_id}','{$address}','{$user_type}','{$contact_no}','{$enrollment_key}','{$slmc_no}') WHERE id = $id";
    
    
    if (mysqli_query($connection,$query3)) {

        
        $bloodtype = $_POST["bloodtype"];
        $height = $_POST["height"];
        $weight = $_POST["weight"];
        
        $query2 = "UPDATE patient (PatientId,BloodType,Height,Weight) VALUES ('{$patientid}','{$bloodtype}','{$height}','{$weight}') WHERE UserId = $id "    ;
        
        if (mysqli_query($connection,$query2)) {
        mysqli_query($connection,$query2);
        }
        else {
            die ("Error1: " . $query2 . "<br>" . mysqli_error($connection));
        }
    } else {
        die ("Error: " . $query1 . "<br>" . mysqli_error($connection));
    }
    
  
    
   // header('Location: ' . $_SERVER['HTTP_REFERER']);
    
    
}

mysqli_close($connection);
?>