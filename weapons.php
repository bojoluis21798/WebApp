<!DOCTYPE HTML>
<html>
<?php
	require('header.php');
	require('conn.php');
	$sql = "SELECT * FROM weapons";
?>

<title>Tactics</title>
<body>
<div class = 'primary-sec'>
	<div class = 'container'>
		<div id = 'myModal' class = 'modal fade' role = 'dialog'>
			<div class = 'modal-dialog'>
				<div class = 'modal-header'>
					<button type = 'button' class = 'close' data-dismiss = 'modal'>&times;</button>
					<h3 class = 'modal-title text-center' id = 'gunname'>Gun Stats</h3>
					<img src='' id = 'gunphoto' class = 'img-responsive center-block'>
				</div>
				
				<div class = 'modal-body'>
					<table class = 'table table-bordered'>
						<thead>
							<tr>
								<th>Weapon Name</th>
								<th>Price</th>
								<th colspan = '4'>Damage (Head, Chest, Stomach, Leg)</th>
								<th>Speed</th>
							<tr>
						</thead>
						<tbody>
							<tr>
								<td id = 'weapon'></td><td id = 'price'></td><td id = 'head'></td><td id = 'chest'></td><td id = 'stomach'></td><td id = 'leg'></td><td id = 'speed'></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
		
		<div class = 'row' >
		<h1 class = 'text-center' >Weapons</h1>
			<?php
				$result = mysqli_query($conn, $sql);
				while($data = mysqli_fetch_assoc($result)){
					echo "<div class = 'col-md-6 weapons' id = '{$data['wid']}' data-name = '{$data['weapon-name']}' 
														  data-price = {$data['price']} data-head = '{$data['head_damage']}'
														  data-chest = '{$data['chest_damage']}' data-stomach = '{$data['stomach_damage']}' 
														  data-leg = '{$data['leg_damage']}' data-zoom = '{$data['speed_zoom']}'>";
														  
					echo "<img src = 'img/weapons/{$data['weapon-name']}.png' class = 'img-responsive center-block'>";
					echo "</div>";
				}
			?>
		</div>
	</div>
</div>
<?php
	require("footer.php");
?>
</body>
</html>
<script>
$(document).ready(function(){
	var x;
    $("img").on("click", function(){
		x = $(this).parent().attr("id");
		var a = $(this).parent().attr("data-name");
		var b = $(this).parent().attr("data-price");
		var c = $(this).parent().attr("data-head");
		var d = $(this).parent().attr("data-chest");
		var e = $(this).parent().attr("data-stomach");
		var f = $(this).parent().attr("data-leg");
		var g = $(this).parent().attr("data-zoom");
		$("#myModal").modal("show");
		$("#gunphoto").attr("src", "img/weapons/"+a+".png");
		$("#weapon").html(a);
		$("#price").html(b);
		$("#head").html(c);
		$("#chest").html(d);
		$("#stomach").html(e);
		$("#leg").html(f);
		$("#speed").html(g);
		
	});
});  
</script>
