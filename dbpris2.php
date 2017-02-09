<?php  

	 	$servername = "localhost";
	    $username = "id752153_pijus123";
	    $password = "nasa12345";
	    $data = "id752153_sprendimas";
		
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $data);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}


?>