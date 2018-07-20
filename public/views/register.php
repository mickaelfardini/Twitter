<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/Twitter/public/css/style.css">
	<title>Tweet Academie - Register</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="offset-md-6 offset-lg-4 offset-xl-4 col-sm-12 col-md-6 col-lg-4 col-xl-3">
				<h1 class="text-center">Register</h1>
				<form id="formRegister">
					<div class="form-group mx-sm-3 mb-2">
						<label for="Firstname">First name</label>
						<input type="text" id ="Firstname" class="form-control" placeholder="John" name="Firstname">
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label for="Lastname">Last name</label>
						<input type="text" id="Lastname" class="form-control" placeholder="Smith" name="Lastname">
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label for="Username">Username</label>
						<input type="text" id="Username" class="form-control" placeholder="johnsmith" name="Username">
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label for="Email">Email</label>
						<input type="email" id="Email" class="form-control" placeholder="johnsmith@example.com" name="Email">
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label for="Password">Password</label>
						<input type="password" id="Password" class="form-control" name="Password"  placeholder="Password">
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label for="Password">Confirm password</label>
						<input type="password" id="PasswordConfirm" class="form-control" name="PasswordConfirm" placeholder="Password">
					</div>
					<div class="text-center">
						<input type="button" value="Submit" id="submitRegister" class="btn btn-primary mx-sm-3">
						<p class="mx-sm-3 change" id="error" style="color: red;"></p>
						<p class=" mx-sm-3 change">Already a member? <a href="./signin/">Sign in here</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="public/js/script.js"></script>
</body>
</html>