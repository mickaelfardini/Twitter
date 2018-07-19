<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tweet Academie - Sign in</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/Twitter/public/css/style.css">
</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="offset-md-6 offset-lg-5 offset-xl-4 col-sm-12 col-md-6 col-lg-4 col-xl-3">
				<h1>Sign in</h1>
				<form id="formSignin" method="get">
					<div class="form-group mx-sm-3 mb-2">
						<label for="signUsername">Username</label>
						<input type="text" id="signUsername" class="form-control" placeholder="johnsmith" name="username">
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label for="signPassword">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<input type="button" value="Submit" id="submitSignin" class="btn btn-primary mx-sm-3">
					<p class="mx-sm-3 change" id="error" style="color: red;"></p>
					<p class=" mx-sm-3 change">Not a member yet? <a href="/Twitter/register">Register here</a></p>
				</form>
			</div>
		</div>
	</div>
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="/Twitter/public/js/script.js"></script>
</body>
</html>