<?php
	session_start();

	if(isset($_GET['s']))
	{
		$_SESSION = array();
		session_destroy();
		header('location:http://localhost/KLINIK/login.php');
		exit();
	}	
?>