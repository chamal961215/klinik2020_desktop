<?php
session_start();

$root = dirname($_SERVER['DOCUMENT_ROOT']).'/htdocs/klinik_git/klinik2020_desktop/';
    require $root . 'host_address.php';

if(empty($_SESSION['id']))
{
  header('location:'.$host_address.'KLINIK/login.php');
}elseif ($_SESSION['user_type']=='Doctor') {
  header('location:'.$host_address.'KLINIK/doctor/home.php');
}elseif ($_SESSION['user_type']=='Assistant') {
  header('location:'.$host_address.'KLINIK/assistant/home.php');
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

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <link href="css/admin.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">