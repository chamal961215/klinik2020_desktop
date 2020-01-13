<?php

// Create connection
$connection = mysqli_connect("localhost", "root", "", "klinik_final");
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

if(isset($_POST['submit-patient-details'])){
    
    $title = $_POST["title"];
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['lastname'];
    $birth = $_POST['date_birth'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $nic = $_POST['nic_no'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $user_type ='Patient';
    
    $query3 = "UPDATE userprofile (Title,FirstName,MiddleName,LastName,UserType,DateOfBirth,Gender,NIC_number,Address,ContactNo,Email) VALUES ('{$title}','{$fname}' ,'{$mname}',
'{$lname}','{$user_type}','{$birth}','{$gender}','{$nic}','{$address}','{$contact_no}', '{$email}') WHERE UserId = $id";
    
    
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