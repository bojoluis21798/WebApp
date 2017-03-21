<?php
	require("conn.php");
	$sql = "INSERT into users(username, password) values ('{$_POST['username']}','{$_POST['pass']}')";
	$result = mysqli_query($conn,$sql);
	echo json_encode($result);
?>