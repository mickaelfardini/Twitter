<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Tweet Academie - Sign in</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
	<h1>Sign in</h1>
	<form id="signUser" method="get">
		<div class="form-group mx-sm-3 mb-2">
			<label for="signUsername">Username</label>
			<input type="text" id="signUsername" class="form-control" placeholder="johnsmith" name="signUsername">
		</div>
		<div class="form-group mx-sm-3 mb-2">
			<label for="signPassword">Password</label>
			<input type="password" class="form-control" name="signPassword" placeholder="*****">
		</div>
		<input type="submit" value="Submit" id ="submitSign" class="btn btn-primary mx-sm-3">
		<p class=" mx-sm-3 change">Not a member yet? <a href="register.html">Register here</a></p>
	</form>
</body>
</html>