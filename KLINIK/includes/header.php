<?php
session_start();
if(empty($_SESSION['id']))
{

}
else
{
  if($_SESSION['user_type']=='Admin')
  {
    header('location:http://localhost/KLINIK/admin/home.php');
  } 
  elseif($_SESSION['user_type']=='Doctor') 
  {
  header('location:http://localhost/KLINIK/doctor/home.php');
  }
  elseif($_SESSION['user_type']=='Assistant') 
  {
  header('location:http://localhost/KLINIK/assistant/home.php');
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KLINIK</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

