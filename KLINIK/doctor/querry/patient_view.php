<?php
if(!isset($_SESSION))
{
    session_start();
}
    $connection = mysqli_connect("localhost","root","","klinik final");
   //$_SESSION['view_id'] = $_GET['id'];
    $id = $_SESSION['view_id'];
    
    $query1 = "SELECT * FROM userprofile WHERE UserId = '$id'";
    $query2 = "SELECT * FROM patient WHERE PatientId = '$id'";
    $query3 = "SELECT * FROM table_image WHERE Image_Id = '$id'";

    $result_set = mysqli_query($connection,$query1);
    $result_set2 = mysqli_query($connection,$query2);
    $result_set3 = mysqli_query($connection,$query3);
    
    $record = mysqli_fetch_assoc($result_set);
    $record2 = mysqli_fetch_assoc($result_set2);
    $record3 = mysqli_fetch_assoc($result_set3);
    
    $title = $record['Title'];
    $fname = $record['FirstName'];
    $mname = $record['MiddleName'];
    $lname = $record['LastName'];
    $nic_no= $record['NIC_number'];
    $email= $record['Email'];
    $dob = $record['DateOfBirth'];
    $contact = $record['ContactNo'];
    $blood = $record2['BloodType'];
    $height = $record2['Height'];
    $weight = $record2['Weight'];
    
    if(isset($_POST))
        
        if(isset($_POST['send_mail']))
        {
            
            $clinic_date = $_POST['date_clinic'] ;
            $message = "Mr. {$fname} {$lname} your next clinic date will be on {$clinic_date}" ;
            mail('dmanrandika@gmail.com','Welcoming to the company',$message, 'FROM: saviour_technologies@yahoo.com');
        }
    else {}
    
    if(isset($_POST['delete'])){
        $deleted = '0';
        $connection_delete = mysqli_connect("localhost","root","","klinik final");
        $query_deleted = "UPDATE userprofile SET IsDeleted = '$deleted' WHERE UserId = $id";
        mysqli_query($connection_delete,$query_deleted);}
        else {
            die ("Error: " .   "<br>" . mysqli_error($connection));
        }
    
 
    
    mysqli_close($connection);