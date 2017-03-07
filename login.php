<?php
	require("conn.php");
	session_start();

	if(empty($_POST['username']) || empty($_POST['username'])){
		echo "no username is typed";
		header("location:index.php");
	}
	
	$sql = "SELECT * FROM users WHERE username = '{$_POST['username']}' and password = '{$_POST['password']}'";
	$result = mysqli_query($conn, $sql);
	
	$count = mysqli_num_rows($result);
	
	if($count == 1){
		echo "login successful!";
	}else{
		header("location:index.php");
	}	

?>