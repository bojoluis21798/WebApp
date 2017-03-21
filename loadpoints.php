<?php
	require('conn.php');
	
	$sql = "SELECT * FROM points";
	$result = mysqli_query($conn,$sql);
	$smokectr = 0;
	$flashesctr = 0;
	for($i=0; $row = mysqli_fetch_assoc($result); $i++){
		if(strcmp($row['type'], "smokes") == 0 && $_GET['id'] == $row['Map_id']){
			echo "smokes[".$smokectr."] = {x: ".$row['x'].", y: ".$row['y'].","
			."t_x: ".$row['t_x'].", t_y: ".$row['t_y'].", duration: ".$row['duration'].", map_id: ".$row['Map_id']."};";
			$smokectr++;
		}else if(strcmp($row['type'], 'flashes') == 0 && $_GET['id'] == $row['Map_id']){
			echo "flashes[".$flashesctr."] = {x: ".$row['x'].", y: ".$row['y'].","
			."t_x: ".$row['t_x'].", t_y: ".$row['t_y'].", duration: ".$row['duration'].", map_id: ".$row['Map_id']."};";
			$flashesctr++;
		}
	}
?>