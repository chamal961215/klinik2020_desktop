<?php

	session_start();

    $root = dirname($_SERVER['DOCUMENT_ROOT']).'/htdocs/klinik_git/klinik2020_desktop/';
    require $root . 'host_address.php';

	$connection = mysqli_connect("localhost","root","","kdb");

	if(isset($_POST['register_account']))
	{

		$email = $_POST['email'];
		$password = $_POST['password'];
		$c_password = $_POST['confirm_Password'];
		$enrollment_key = $_POST['enroll_key'];


        $result = 0;

		$query = "SELECT * FROM user WHERE email='$email' AND enrollment_key ='$enrollment_key'";

    	$result_set = mysqli_query($connection,$query);

    	$result = mysqli_num_rows($result_set);

    	if($result == 1 && $password == $c_password)
    	{
            $hashedPwd = password_hash($password, PASSWORD_BCRYPT);
            
    		$update_query = "UPDATE user SET password='$hashedPwd',user_enroll_status= 'Confirmed' WHERE email='$email'";
    		mysqli_query($connection,$update_query);
            $_SESSION['success_notice'] = "Your Registration is Completed!";
    		header('location:'.$host_address.'KLINIK/login.php?registration=success');
    	}
        elseif($result == 0)
        {   
            $_SESSION['error'] = "Email and Enrollment Key Do Not Match!";
            header('location:'.$host_address.'KLINIK/confirm_registration.php?registration=error');
        }
         elseif($result == 1 && $password != $c_password)
        {   
            $_SESSION['error'] = "Passwords Do Not Match!";
            header('location:'.$host_address.'KLINIK/confirm_registration.php?registration=error');
        }
	}





?>