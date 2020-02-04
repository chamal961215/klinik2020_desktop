<?php

    session_start();

    $root = dirname($_SERVER['DOCUMENT_ROOT']).'/htdocs/klinik_git/klinik2020_desktop/';
    require $root . 'host_address.php';

	$connection = mysqli_connect("localhost","root","","kdb");

	if(isset($_POST['login_user']))
	{

		$email = $_POST['email'];
		$password = $_POST['password'];

		$query = "SELECT * FROM user WHERE email='$email'";

    	$result_set = mysqli_query($connection,$query);

    	if(mysqli_num_rows($result_set) == 1)
        {
            $record = mysqli_fetch_assoc($result_set);

            $_SESSION['id'] = $record['id'];
            $_SESSION['user_type'] = $record['user_type'];
            $_SESSION['title'] = $record['title'];
            $_SESSION['name'] = $record['name'];
            $status = $record['user_enroll_status'];
            $user_type = $record['user_type'];

            $password_hash = $record['password'];

            if(password_verify($password,$password_hash))
            {
                if($user_type =='Admin' && $status =='Confirmed')
                {
                    header('location:'.$host_address.'KLINIK/admin/home.php');
                }
                elseif ($user_type =='Doctor' && $status =='Confirmed') 
                {
                    header('location:'.$host_address.'KLINIK/doctor/home.php');
                }
                elseif ($user_type =='Assistant' && $status == 'Confirmed') 
                {
                    header('location:'.$host_address.'KLINIK/assistant/home.php');
                }
                elseif ($user_type =='Doctor' && $status == 'Deleted') 
                {
                    $_SESSION['error'] = "Your Account Has Been Deleted By Admin";
                    header('location:'.$host_address.'KLINIK/login.php?login=error');
                }
                elseif ($user_type =='Assistant' && $status == 'Deleted') 
                {
                    $_SESSION['error'] = "Your Account Has Been Deleted By Admin";
                    header('location:'.$host_address.'KLINIK/login.php?login=error');
                }
                else
                {
                    $_SESSION['error'] = "Somthing Went Wrong!";
                    header('location:'.$host_address.'KLINIK/login.php?login=error');
                }
            }
            else
            {
                $_SESSION['error'] = "Email and Password Do Not Match!";
                header('location:'.$host_address.'KLINIK/login.php?login=error');
            }


        }

	}
    else
    {
        $_SESSION['error'] = "Somthing Went Wrong Please Restart the page";
        header('location:'.$host_address.'KLINIK/login.php?login=error');
    }

?>