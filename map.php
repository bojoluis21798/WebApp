<html>
<?php
	require('header.php');
	if(!isset($_GET['id'])){
		exit("ERROR");
	}
	// 1 - dust 2
	// 2 - inferno
	// 3 - mirage
	
	switch($_GET['id']){
		case 1:
			$maptitle = "DUST 2";
		break;
		case 2:
			$maptitle = "INFERNO";
		break;
		case 3:
			$maptitle = "MIRAGE";
		break;
		default:
			$maptitle = "";
		break;
	}
?>
<body>
	<?php
		require('headerbar.php');
	?>
	<div class='row contentbody'>
		<div class='col-md-12'>
			<div class='row'>
				<div class='col-md-8 col-md-offset-2'>
					<div class='row text-center'>
						<span class='h1 title'><?php echo $maptitle; ?></span>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</body>
</html>