<?php
if(!isset($_SESSION))
{
    session_start();
}?>

<?php

$connection = mysqli_connect("localhost","root","","klinik final");

$id = $_SESSION["view_id"];



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
$gender =$record['Gender'];
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

if(isset($_POST['edit-patient-details'])){
  
    
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
    
  //  $query3 = "UPDATE userprofile SET Title = $title ,FirstName = $fname,MiddleName = $mname ,LastName = $lname,
  //              UserType = $user_type,DateOfBirth = $birth,Gender = $gender,NIC_number = $nic_no ,Address = $address,
  //              ContactNo = $contact_no,Email = $email WHERE UserId = $id"; 
    
    $query3 = " UPDATE `userprofile` SET `Title`='$title',`FirstName`='$fname',`MiddleName`='$mname',`LastName`='$lname',
    `UserType`='$user_type',`NIC_number`='$nic_no',`DateOfBirth`='$birth',`Gender`='$gender',
    `Address`='$address',`ContactNo`='$contact_no',`Email`='$email'
     WHERE UserId = $id";
    
    
    if (mysqli_query($connection,$query3)) {
        mysqli_query($connection,$query3);
    }
    else {
        die ("Error1: " . $query3 . "<br>" . mysqli_error($connection));
    }

        
        $bloodtype = $_POST["bloodtype"];
        $height = $_POST["height"];
        $weight = $_POST["weight"];
        
        $query4 = "UPDATE patient SET BloodType='$bloodtype' ,Height='$height' ,Weight='$weight' WHERE PatientId = $id "    ;
        
        if (mysqli_query($connection,$query4)) {
        mysqli_query($connection,$query4);
        }
        else {
            die ("Error1: " . $query4 . "<br>" . mysqli_error($connection));
        }
        $id = $_SESSION["view_id"];
      //  header( "location:http://localhost/klinik/doctor/viewpatient.php?id=".urlencode($current_id['id']) );
        header( "location:http://localhost/klinik/doctor/viewpatient.php?id=".$id);
}

  

mysqli_close($connection);
?>