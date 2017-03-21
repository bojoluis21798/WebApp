<html>
<?php
	require('header.php');
?>
	<body>
		<div class='menubg'>
			<div class='container-fluid'>
				<div class='loginform'>
					<h1 class='logintitle text-center'>REGISTER</h1>
					<div class='formproper'>
						<div class = 'form'>
							<div class='form-group formrow row'>
								<label class='h3 text-left col-form-label col-md-11 col-md-offset-1'>Username</label>
								<div class='col-md-10 col-md-offset-1'>
									<input id = 'user' name='user' type='text' class='form-control' required>
								</div>
							</div>
							<div class='form-group formrow row'>
								<label class='h3 text-left col-form-label col-md-11 col-md-offset-1'>Password</label>
								<div class='col-md-10 col-md-offset-1'>
									<input id = 'pass' name='pass' type='password' class='form-control' required>
									<span class='passdanger text-danger'></span>
								</div>
							</div>
							<div class='form-group formrow row'>
								<label class='h3 text-left col-form-label col-md-11 col-md-offset-1'>Confirm Password</label>
								<div class='col-md-10 col-md-offset-1'>
									<input id = 'conpass' name='conpass' type='password' class='form-control' required>
									<span class='passdanger text-danger'></span>
								</div>
							</div>
							<div class='row forbut'>
									<input type='submit' id='reg' class='btn-lg but2 col-md-10 col-md-offset-1 btn btn-default' value = 'Register'>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>