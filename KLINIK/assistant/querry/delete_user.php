<?php
	session_start();

	$connection = mysqli_connect("localhost","root","","klinik_final");

	if($page==1)
	{
		$query = "UPDATE `user` SET `is_deleted`='yes' WHERE id ='$id'";

		mysqli_query($connection, $query);

		$linkToGo = 'location:http://localhost/klinik_2/assistant/get_patient_list.php?page='.$page;
		header($linkToGo);
	}
	else
	{
		$query = "UPDATE 'user' SET 'is_deleted'='yes' WHERE id ='$id'";

		mysqli_query($connection,$query);

		$previousTotalRecord = $totalRecord;
		$currenTotalRecord = $totalRecord - 1;

		$previousTotalPages = ceil($prviousTotalRecord/$num_per_page);
		$currenTotalPages = ceil($currenTotalRecord/$num_per_page);


		if($previousTotalPages!=$currenTotalPages)
		{
			$page = $page - 1;
			$linkToGo = 'location:http://localhost/klinik_2/assistant/get_patient_list.php?page='.$page;
		}
		else  
		{		
			$linkToGo = 'location:http://localhost/klinik_2/assistant/get_patient_list.php?page='.$page;
		}

		header($linkToGo);
	}

	
?>