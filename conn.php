<?php
	$conn = mysqli_connect("localhost", "root", "", "tactics");
	if(!$conn){
		echo "Error Connecting to the database!";
		exit();
	}
?>