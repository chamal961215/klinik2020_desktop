

<?php

// Create connection

if(isset($_POST['edit-assistant-details'])){
$connection = mysqli_connect("localhost", "root", "", "kdb");
//$id = $_GET['id'];


//mysqli_close($connection);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

    $name = $_POST['name'];
    $email = $_POST['email'];
    //$title = $_POST['title'];
    $nic = $_POST['nic'];
    //$staff_id = $_POST['staff_id'];
    $address = $_POST['address'];
    //$user_type = $_POST['user_type'];
    $contact_no = $_POST['contact_no'];
    //$last_login = $_POST['last_login'];
    //$enrollment_key = $_POST['enrollment_key'];
    $staff_id = $_POST['staff_id'];
    
    $query3 = "UPDATE user (name,email,nic,address,contact_no,staff_id) SET ('{$name}','{$email}',
    '{$nic}','{$address}','{$contact_no}','{$staff_id}') WHERE email = '$email'";
   
   
    mysqli_query($connection,$query3);

    echo "Updated successfully";
    
    }else {
        echo "Something went wrong";
    }
    
  
    
   mysqli_close($connection);
?>