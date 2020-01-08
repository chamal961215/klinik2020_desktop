<?php
session_start();
if(empty($_SESSION['id']))
{
  header('location:http://localhost/KLINIK/login.php');
}elseif ($_SESSION['user_type']=='Doctor') {
  header('location:http://localhost/KLINIK/doctor/home.php');
}elseif ($_SESSION['user_type']=='Assistant') {
  header('location:http://localhost/KLINIK/assistant/home.php');
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

  >

<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
<style type="text/css" media="print">
    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */

    }
</style>

</head>

