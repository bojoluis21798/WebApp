<?php
	require("conn.php");
	if($_POST['pass'] == $_POST['conpass']){
		$sql = "INSERT into users(username, password) values ('{$_POST['user']}','{$_POST['pass']}')";
		if($result = mysqli_query($conn,$sql)){
			header("location:index.php");
		}
	}else{
		header("location:register.php");
	}
?>