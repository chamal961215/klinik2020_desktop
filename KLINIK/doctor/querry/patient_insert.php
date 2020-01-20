<?php
if(!isset($_SESSION))
{
    session_start();
}
$connection = mysqli_connect("localhost","root","","klinik final");

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
    $doc_id = $_SESSION['doctor_id'];
    
if(isset($_POST['submit-patient-details'])){
    
  //  $createdby = $doc_id;
    $createdby = 10;
    $title = $_POST['title'];
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
    $createddate=date("Y/m/d");
    $deleted = '0';
    
    $file = addslashes(file_get_contents($_FILES["profile_pic"]["tmp_name"]));
    
    //$query_check_email = "SELECT ";
    
    $query1 = "INSERT INTO userprofile (Title,FirstName,MiddleName,LastName,UserType,DateOfBirth,
                Gender,NIC_number,Address,ContactNo,Email,CreatedBy,CreatedDate,IsDeleted)
                 VALUES ('{$title}','{$fname}' ,'{$mname}',
                '{$lname}','{$user_type}','{$birth}','{$gender}','{$nic}','{$address}',
                '{$contact_no}', '{$email}','{$createdby}','{$createddate}','{$deleted}')";
    
    
    if (mysqli_query($connection,$query1)) {
        $patientid =mysqli_insert_id($connection);
        
        mysqli_query($connection,$patientid);
        
        $bloodtype = $_POST["bloodtype"];
        $height = $_POST["height"];
        $weight = $_POST["weight"];
        
        $query2 = "INSERT INTO patient (PatientId,BloodType,Height,Weight) VALUES ('{$patientid}','{$bloodtype}','{$height}','{$weight}') "    ;
        
        $query3 = "INSERT INTO table_image (Image_Id,Image) VALUES('{$patientid}','{$file}')";
        
        if (mysqli_query($connection,$query3)) {
            mysqli_query($connection,$query3);
        }
        else {
            die ("Error3: " . $query3 . "<br>" . mysqli_error($connection));
        }
        
        if (mysqli_query($connection,$query2)) {
        mysqli_query($connection,$query2);
        }
        else {
            die ("Error2: " . $query2 . "<br>" . mysqli_error($connection));
        }
    } else {
        die ("Error: " . $query1 . "<br>" . mysqli_error($connection));
    }
    
  
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    
    
}

mysqli_close($connection);
?>