<?php
	// Create variables to input user data in the html form
	$firt_name = filter_input(INPUT_POST, 'first_name');
	$last_name = filter_input(INPUT_POST, 'last_name');
	$email = filter_input(INPUT_POST, 'email');

	// Connect to the database
	$db_host = 'localhost';
	$db_user = 'boba_user';
	$db_pass = 'BobaIsBest';
	$db_name = 'boba_web_db';

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	// Check connection and display an error if unsuccessful
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	// If connection is successful, insert the values into the database
	else {
		$sql = "INSERT INTO sign_up (first_name, last_name, email) 
		VALUES ('$firt_name', '$last_name', '$email')";
		if ($conn->query($sql)) {
			echo "Signup Successful";
		}
		// Display error message if signup fails
		else {
			echo "Signup Failed";
		}
	}
?>