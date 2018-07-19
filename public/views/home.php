<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/home.css">
	<title>Tweet Academie - Home</title>
</head>
<body>
	<nav class="navbar navbar-light t navbar-expand-lg justify-content-between">
		<ul class="inf navbar-nav">
			<li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Mentions</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Messages</a></li>
		</ul>
		<img src="../img/birdie.png" alt="logo" width="35" height="35" class="d-inline-block align-top">

		<form class="form-inline">
			<input id="searchHome" class="form-control mr-sm-2" type="text" placeholder="Search"name="search">
		</form>	
	</nav>
	<div class="main">
		<div class="side">
			<div class="left-bar">
				<img src="https://pbs.twimg.com/profile_images/973163557633380357/aXWT-Dry_bigger.jpg" alt="icon" class="icon">
				<a class="profile-link href="#">@lamaland</a>
				<ul class="prof navbar-nav">	
					<li class="nav-item"><a class="nav-link" href="#">Tweets</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Followers</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Following</a></li>
				</ul>
			</div>
		<div class="left-tags">
			<ul class="tags list-group">
				<li class="list-group-item">#un</li>
				<li class="list-group-item">#dos</li>
				<li class="list-group-item">#three</li>
				<li class="list-group-item">#quatre</li>
				<li class="list-group-item">#cinco</li>
				<li class="list-group-item">#six</li>
				<li class="list-group-item">#sept</li>
				<li class="list-group-item">#hui</li>
				<li class="list-group-item">#nonante</li>
				<li class="list-group-item">#ten</li>
			</ul>
		</div>
	</div>
	<div class="content-main">
		<ol id="timeline" class="list-group">
			<li class="tweet list-group-item">`tweet`</li>
			<li class="tweet list-group-item">`tweet`</li>
			<li class="tweet list-group-item">`tweet`</li>
			<li class="tweet list-group-item">`tweet`</li>
			<li class="tweet list-group-item">`tweet`</li>
		</ol>
	</div>
</div>
<script
src="https://code.jquery.com/jquery-3.3.1.js"
integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
crossorigin="anonymous"></script>
</body>
</html>