<?php
	require('header.php');
?>
	<head>
		<title>Tactics</title>
	</head>
	<body>
		<div class='menubg'>
			<div class='container-fluid'>
				<div class='loginform'>
					<h1 class='logintitle text-center'>TACTICS</h1>
					<div class='formproper'>
							<div class='form-group formrow row'>
								<label class='h3 text-left col-form-label col-md-11 col-md-offset-1'>Username</label>
								<div class='col-md-10 col-md-offset-1'>
									<input id='user' type='text' class='form-control' name = 'username' >
									<span class='text-danger'></span>
								</div>
							</div>
							<div class='form-group formrow row'>
								<label class='h3 text-left col-form-label col-md-11 col-md-offset-1'>Password</label>
								<div class='col-md-10 col-md-offset-1'>
									<input id='pass' type='password' class='form-control' name = 'password' >
									<span class='text-danger'></span>
								</div>
							</div>
							<div class='row forbut'>
								<button id='login' type='submit' class='btn-lg but1 col-md-10 col-md-offset-1 btn btn-default'>Log In</button>
							</div>
							<div class='row'>
								<a href='register.php'>
									<button id='reg' type='button' class='btn-lg but2 col-md-10 col-md-offset-1 btn btn-default'>Register</button>
								</a>
							</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>