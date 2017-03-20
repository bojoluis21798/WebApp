<html>
<?php
	require('header.php');
?>
<script src='js/main.js'></script>
<script>
	var flag = <?php echo (isset($_GET['visited']))?1:0;?>;
</script>
<body>
	<?php
		require('headerbar.php');
	?>
	<div class='row contentbody'>
		<div class='col-md-12'>
			<div class='row'>
				<div class='col-md-8 col-md-offset-2'>
					<div class='row text-center'>
						<span class='h1 title'>WELCOME TO TACTICS</span>
					</div>
					<div class='row text-center'>
						<span class='h3 desc'>Interactive CS:GO Maps</span>
					</div>
				</div>
			</div>
			<div class='row options'>
				<div class='col-md-12'>
					<a href="map.php?id=1">
						<div class='map'>
							<div class='opts' id='dust2'>
								<div class='bg'>
								</div>
							</div>
							<div class='maptitle text-center'><span class='h2 mapname'>DUST 2</span></div>
						</div>
					</a>
					<a href="map.php?id=2">
						<div class='map'>
							<div class='opts' id='inferno'>
								<div class='bg'>
								</div>
							</div>
							<div class='maptitle text-center'><span class='h2 mapname'>INFERNO</span></div>
						</div>
					</a>
					<a href="map.php?id=3">
						<div class='map'>
							<div class='opts' id='mirage'>
								<div class='bg'>
								</div>
							</div>
							<div class='maptitle text-center'><span class='h2'>MIRAGE</span></div>
						</div>
					</a>
					</div>
			</div>
		</div>
	</div>
	</div>
	<?php require('footer.php'); ?>
</body>
</html>