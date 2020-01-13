<?php

// Create connection
$connection = mysqli_connect("localhost", "root", "" , "klinik_final");
$id = $_GET['name'];

$_SESSION['my'] = $id;

// sql to delete a record
$sql = "DELETE FROM userprofile WHERE UserId='$id'";

mysqli_query($connection, $sql);

$linkToGo = 'location:http://localhost/klinik_2/assistant/get_patient_list.php';

header($linkToGo);

mysqli_close($connection);
?>
