<?php

	$conn = mysqli_connect('db.com','infant','12345678@','hello@123');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>