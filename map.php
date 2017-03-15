<html>
<?php
	require('header.php');
	if(!isset($_GET['id'])){
		exit("ERROR");
	}
	// 1 - dust 2
	// 2 - inferno
	// 3 - mirage
	$directory = "img/";
	switch($_GET['id']){
		case 1:
			$bg = "dust_2_edit.jpg";
			$maptitle = "DUST 2";
		break;
		case 2:
			$bg = "inferno_edit.jpg";
			$maptitle = "INFERNO";
		break;
		case 3:
			$bg = "mirage_edit.jpg";
			$maptitle = "MIRAGE";
		break;
		default:
			$maptitle = "";
		break;
	}
?>
<style>
	body{
		background-image: url(<?php echo $directory.$bg; ?>) !important;
	}
</style>
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