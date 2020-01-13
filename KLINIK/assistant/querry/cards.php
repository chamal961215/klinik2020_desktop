<?php

    $connection = mysqli_connect("localhost","root","","klinik_final");

    $query_for_number_of_patients = "SELECT UserId from userprofile";

    $result_of_patient_query = mysqli_query($connection,$query_for_number_of_patients);

    $_SESSION['num_patient'] = mysqli_num_rows($result_of_patient_query);

    mysqli_close($connection);
?>
