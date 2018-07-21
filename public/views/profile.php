<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" href="/Twitter/public/css/styleprofile.css">
	<title>Tweet Academie - Profile</title>
</head>
<body style="background-color: <?=$_SESSION['theme']?>">
	<nav class="navbar navbar-light navbar-expand-lg justify-content-between">
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link" href="/Twitter/home">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Mentions</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Messages</a></li>
		</ul>
		<img src="/Twitter/public/img/birdie.png" alt="logo" width="35" height="35" class="d-inline-block align-top">

		<form class="form-inline">
			<input id="searchHome" class="form-control mr-sm-2" type="text" placeholder="Search"name="search">
		</form>	
	</nav>
	
</body>
</html>