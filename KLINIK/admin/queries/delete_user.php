<?php
	session_start();
	$root = dirname($_SERVER['DOCUMENT_ROOT']).'/htdocs/klinik_git/klinik2020_desktop/';
    require $root . 'host_address.php';

	$connection = mysqli_connect("localhost","root","","kdb");

	$id = $_GET['id'];
	$page = $_GET['page'];
	//$totalRecord = $_SESSION['totalRecord'];
	//$num_per_page = 5;
	$search = $_GET['search'];

	if($page==1)
	{
		$query = "UPDATE `user` SET `is_deleted`='yes' WHERE id ='$id'";

		mysqli_query($connection,$query);

		$linkToGo = 'location:'.$host_address.'KLINIK/admin/userProfiles.php?page='.$page;
		header($linkToGo);
	}
	else
	{	
		$queryTotalp = "SELECT * from user WHERE is_deleted IS Null AND user_type!='Admin'";

		$totalRecordp = mysqli_query($connection,$queryTotalp);


		$query = "UPDATE `user` SET `is_deleted`='yes' WHERE id ='$id'";
		mysqli_query($connection,$query);


		$queryTotalc = "SELECT * from user WHERE is_deleted IS Null AND user_type!='Admin'";

		$totalRecordc = mysqli_query($connection,$queryTotalc);

		
		$previousTotalRecord = mysqli_num_rows($totalRecordp);
		$currenTotalRecord = mysqli_num_rows($totalRecordc);
		$_SESSION['previousTotalPages'] = ceil($previousTotalRecord/5);
		$_SESSION['currenTotalPages'] = ceil($currenTotalRecord/5);

		echo $previousTotalPages;


		if($_SESSION['previousTotalPages']!=$_SESSION['currenTotalPages'])
		{
			$page = $page - 1;
			$linkToGo = 'location:'.$host_address.'KLINIK/admin/userProfiles.php?page='.$page;
		}
		else  
		{		
			$linkToGo = 'location:'.$host_address.'KLINIK/admin/userProfiles.php?page='.$page;
		}

		header($linkToGo);

	}

	
?>