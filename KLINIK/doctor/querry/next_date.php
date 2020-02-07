<?php
if(!isset($_SESSION))
{
    session_start();
}?>

<?php
$connection = mysqli_connect("localhost","root","","klinik final");

$id = $_SESSION["view_id"];


// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['next_clinic'])){
  
    $next_date = $_POST["next_date"];
    
    
    $query1 = " UPDATE `patient` SET `NextClinicDate`='$next_date' WHERE PatientId = $id";
    
    
    mysqli_query($connection,$query);
}
    
    header( "location:http://localhost/klinik/doctor/viewpatient.php?id=".$id);
    
    mysqli_close($connection);
    ?>