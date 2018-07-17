<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<title>Tweet Academie - Register</title>
</head>
<body>
	<h1>Register</h1>
	<form id="formRegister" method="get">
		<div class="form-group mx-sm-3 mb-2">
			<label for="inputFirstname">First name</label>
			<input type="text" id = "inputFirstname" class="form-control" placeholder="John" name="inputFirstname">
		</div>
		<div class="form-group mx-sm-3 mb-2">
			<label for="inputLastname">Last name</label>
			<input type="text" id="inputLastname" class="form-control" placeholder="Smith" name="inputLastname">
		</div>
		<div class="form-group mx-sm-3 mb-2">
			<label for="inputUsername">Username</label>
			<input type="text" id="inputUsername" class="form-control" placeholder="johnsmith" name="inputUsername">
		</div>
		<div class="form-group mx-sm-3 mb-2">
			<label for="inputEmail">Email</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="johnsmith@example.com" name="inputEmail">
		</div>
		<div class="form-group mx-sm-3 mb-2">
			<label for="inputPassword">Password</label>
			<input type="password" id="inputPassword" class="form-control" name="inputPassword"  placeholder="*****">
		</div>
		<div class="form-group mx-sm-3 mb-2">
			<label for="inputPassword">Confirm password</label>
			<input type="password" id="inputPasswordConfirm" class="form-control" name="inputPasswordConfirm" placeholder="*****">
		</div>
		<input type="submit" value="Submit" id ="submitRegister" class="btn btn-primary mx-sm-3">
		<p class=" mx-sm-3 change">Already a member? <a href="signin.html">Sign in here</a></p>
	</form>
</body>
</html>