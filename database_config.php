<?php
	$conn = mysqli_connect("127.0.0.1", "root", "", "cs2205_store");
	if(!$conn){
		echo "Error Connecting to the database!";
		exit();
	}
?>