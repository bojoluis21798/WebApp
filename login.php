<?php
	require("conn.php");
	session_start();

	if(empty($_POST['username']) || empty($_POST['password'])){
		if(empty($_POST['username'])){
			echo -1;
		}elseif(empty($_POST['password'])){
			echo -2;
		}
		exit();
	}
	
	$sql = "SELECT * FROM users WHERE username = '{$_POST['username']}' and password = '{$_POST['password']}'";
	$result = mysqli_query($conn, $sql);
	
	echo $count = mysqli_num_rows($result);
?>