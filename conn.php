<?php
	$conn = mysqli_connect("localhost", "root", "root", "tactics");
	if(!$conn){
		echo "Error Connecting to the database!";
		exit();
	}
?>