<?php
session_start();

$connection = mysqli_connect("localhost","root","","klinik");

if(isset($_POST['registration']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if($password === $cpassword)
    {
        $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
        $_SESSION['success'] = "Admin Profile Added";
        header('Location: register.php');
        }
        else
        {
        $_SESSION['status'] = "Admin Profile Not Added";
        header('Location: register.php');
        }
    }
    else
    {
        $_SESSION['status'] = "Password and Confirm Password Does not match";
        header('Location: register.php');
    }

}



if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
}

if(isset($_POST['update_btn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data is Updated";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Data is not Updated";
        header('Location: register.php');
    }
}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
  
    $query = "DELETE * FROM register WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Data is deleted";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Data is not deleted";
        header('Location: register.php');
    }
}

?>