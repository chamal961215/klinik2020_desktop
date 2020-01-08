<?php
    include('Mail.php');
    
    session_start();

    $connection = mysqli_connect("localhost","root","","kdb");

    if(isset($_POST['submit-doc-details'])){
	

        $name = $_POST['name'];
        $email = $_POST['email'];
        $title = 'Dr.';
        $nic = $_POST['NIC_no'];
        $slmc_no = $_POST['slmc_no'];
        $address = $_POST['address'];
        $contact_no = $_POST['contact_no'];
        $enrollment_key = $_POST['enroll_key'];
        $user_type ='Doctor';
        $user_enroll_status ='Pending';

        $email_check = "SELECT email FROM user WHERE email='$email' AND is_deleted IS Null";
        $email_available = mysqli_query($connection,$email_check);

        if(mysqli_num_rows($email_available))
        {
            $_SESSION['error'] = "This email has been alreadey used for someone";
            header('location:http://localhost/KLINIK/admin/userRegistration.php?doc_fail=error');
        }
        else
        {
            $query = "INSERT INTO user (name,email,title,nic,address,slmc_no,contact_no,enrollment_key,user_type,user_enroll_status) VALUES ('{$name}' , '{$email}' , '{$title}' , '{$nic}' , '{$address}' , '{$slmc_no}' , '{$contact_no}' , '{$enrollment_key}' , '{$user_type}','{$user_enroll_status}')";

            $link = "http://localhost/KLINIK/confirm_registration.php?enrollment_key=".$enrollment_key."&email=".$email;
            $subject = "Registration for KLINIK";
            $body = nl2br("Dear Dr. ".$name.",\n    You are registered as a Doctor for the KLINIK system by the admin. Use this link in below to create your password and to complete your registraion. Your enrollment key is ".$enrollment_key." \n\n".$link."\n\nThank you. \n\n ****Don't reply to this email****");

            Mail::sendmail($subject,$body,$email);


            mysqli_query($connection,$query);

            $_SESSION['success'] = "Registrtion is partially completed";
            header('location:http://localhost/KLINIK/admin/userRegistration.php?doc=success');
        }
    }

    elseif (isset($_POST['submit-asst-details'])) {

        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $title = $_POST["title"];
        $nic = $_POST['NIC_no'];
        $staff_id = $_POST['staff_id'];
        $address = $_POST['address'];
        $contact_no = $_POST['contact_no'];
        $enrollment_key = $_POST['enroll_key'];
        $user_type ='Assistant';
        $user_enroll_status ='Pending';

        $email_check = "SELECT email FROM user WHERE email='$email' AND is_deleted IS Null";
        $email_available = mysqli_query($connection,$email_check);

        if(mysqli_num_rows($email_available))
        {
            $_SESSION['error'] = "This email has been alreadey used for someone";
            header('location:http://localhost/KLINIK/admin/userRegistration.php?asst_fail=error');
        }
        else
        {

            $query = "INSERT INTO user (name,email,title,nic,address,staff_id,contact_no,enrollment_key,user_type,user_enroll_status) VALUES ('{$name}' , '{$email}' , '{$title}' , '{$nic}' , '{$address}' , '{$staff_id}' , '{$contact_no}' , '{$enrollment_key}' , '{$user_type}','{$user_enroll_status}')";

            $link = "http://localhost/KLINIK/confirm_registration.php?enrollment_key=".$enrollment_key."&email=".$email;
            $subject = "Registration for KLINIK";
            $body = nl2br("Dear ".$title." ".$name.",\n    You are registered as an assistant for the KLINIK system by the admin. Use this link in below to create your password and to complete your registraion. Your enrollment key is ".$enrollment_key." \n\n".$link."\n\nThank you. \n\n ****Don't reply to this email****");

            Mail::sendmail($subject,$body,$email);

            mysqli_query($connection,$query);


            $_SESSION['success'] = "Registrtion is partially completed";
            header('location:http://localhost/KLINIK/admin/userRegistration.php?asst=success');

        }
    }    

    mysqli_close($connection);
?>