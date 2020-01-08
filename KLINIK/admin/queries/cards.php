<?php

    $connection = mysqli_connect("localhost","root","","kdb");

    $query_for_number_of_doctors = "SELECT id FROM user WHERE is_deleted IS Null AND user_type ='Doctor'";
    $query_for_number_of_assistant = "SELECT id FROM user WHERE is_deleted IS Null AND user_type ='Assistant'";
    $query_for_number_of_patients = "SELECT id FROM user WHERE is_deleted IS Null AND user_type ='Patient'";

    $result_of_doc_query = mysqli_query($connection,$query_for_number_of_doctors);
    $result_of_asst_query = mysqli_query($connection,$query_for_number_of_assistant);
    $result_of_patient_query = mysqli_query($connection,$query_for_number_of_patients);

    $_SESSION['num_doc'] = mysqli_num_rows($result_of_doc_query);
    $_SESSION['num_asst'] = mysqli_num_rows($result_of_asst_query);
    $_SESSION['num_patient'] = mysqli_num_rows($result_of_patient_query);


    mysqli_close($connection);
?>