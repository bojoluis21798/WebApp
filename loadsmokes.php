<?php
	require('conn.php');
	
	$sql = "SELECT * FROM smokes";
	$result = mysqli_query($conn,$sql);
	for($i=0; $row = mysqli_fetch_assoc($result); $i++){
		echo "smokes[".$i."] = {x: ".$row['x'].", y: ".$row['y'].","
		."t_x: ".$row['t_x'].", t_y: ".$row['t_y'].", duration: ".$row['duration']."};";
	}
?>