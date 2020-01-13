<?php
$connection = mysqli_connect("localhost","root","","klinik_final");

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
    
    $query1 = "INSERT INTO userprofile (Title,FirstName,MiddleName,LastName,UserType,DateOfBirth,Gender,NIC_number,Address,ContactNo,Email) VALUES ('{$title}','{$fname}' ,'{$mname}',
'{$lname}','{$user_type}','{$birth}','{$gender}','{$nic}','{$address}','{$contact_no}', '{$email}')";
    
    if (mysqli_query($connection,$query1)) {
        $patientid =mysqli_insert_id($connection);
        
        mysqli_query($connection,$patientid);
        
        $bloodtype = $_POST["bloodtype"];
        $height = $_POST["height"];
        $weight = $_POST["weight"];
        
        $query2 = "INSERT INTO patient (PatientId,BloodType,Height,Weight) VALUES ('{$patientid}','{$bloodtype}','{$height}','{$weight}') "    ;
        
        if (mysqli_query($connection,$query2)) {
        mysqli_query($connection,$query2);
        }
        else {
            die ("Error1: " . $query2 . "<br>" . mysqli_error($connection));
        }
    } else {
        die ("Error: " . $query1 . "<br>" . mysqli_error($connection));
    }
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);    
}

mysqli_close($connection);
?>