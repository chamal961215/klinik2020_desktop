<?php
	session_start();
	$root = dirname($_SERVER['DOCUMENT_ROOT']).'/htdocs/klinik_git/klinik2020_desktop/';
    require $root . 'host_address.php';

	if(isset($_GET['s']))
	{
		$_SESSION = array();
		session_destroy();
		header('location:'.$host_address.'KLINIK/login.php');
		exit();
	}	
?>