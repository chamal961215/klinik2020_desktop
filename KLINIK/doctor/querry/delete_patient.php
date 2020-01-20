<?php
if(!isset($_SESSION))
{
    session_start();
}

$connection = mysqli_connect("localhost","root","","klinik final");

$id = $_SESSION['view_id'];


    if(isset($_POST['delete_confirm'])){
        $query = " UPDATE userprofile SET IsDeleted='1' WHERE  UserId = $id";
        mysqli_query($connection,$query);}
    else {
        echo "not working";
        die ("Error: " .   "<br>" . mysqli_error($connection));
    }
    header( "location:http://localhost/klinik/doctor/get_patient_list.php");//viewpatient.php?id=".$id);

?>