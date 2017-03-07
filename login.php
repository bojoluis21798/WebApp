<?php
	require("conn.php");
	
	if(empty($_POST['username']) || empty($_POST['username'])){
		echo "no username is typed";
		header("location:index.php");
	}
?>