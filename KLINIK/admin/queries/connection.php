<?php
	

	if(mysqli_connect_errno()){
		die('Database connection failed' . mysqli_connect_error());
	} else {
		echo "<script>console.log('Connection Succesfull' );</script>";
	}

?>