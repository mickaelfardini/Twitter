<?php
$countTweet = IndexController::countTweetsAction()[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/Twitter/public/css/home.css">
	<title>Tweet Academie - Home</title>
</head>
<body style="background-color: <?=$_SESSION['theme']?>">
	<nav class="navbar navbar-light t navbar-expand-lg justify-content-between">
		<ul class="inf navbar-nav">
			<li class="nav-item"><a class="nav-link" href="./">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Mentions</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Messages</a></li>
		</ul>
		<img src="/Twitter/public/img/birdie.png" alt="logo" width="35" height="35" class="d-inline-block align-top">

		<form class="form-inline">
			<input id="searchHome" class="form-control mr-sm-2" type="text" placeholder="Search"name="search">
		</form>	
		<button type="button" id="logout" name="logout" value="logout" class="btn btn-primary">Log Out</button>
	</nav>
	<div class="main">
		<div class="side">
			<div class="left-bar">
				<img src="https://pbs.twimg.com/profile_images/973163557633380357/aXWT-Dry_bigger.jpg" alt="icon" class="icon">
				<a class="profile-link" href="#">@<?=$_SESSION['name']?></a>
				<ul class="prof navbar-nav">	
					<li class="nav-item"><a id="nbTweets" class="nav-link" href="#"><?=$countTweet?> Tweets</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Followers</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Following</a></li>
				</ul>
			</div>
			<div class="left-tags rounded">
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
		<div class="content-main rounded">
			<div class="row">
				<div class="logo col-2 align-middle"><img src="https://pbs.twimg.com/profile_images/973163557633380357/aXWT-Dry_bigger.jpg" alt="icon"></div>
				<div class="form-group col-8">
					<label for="myTweet">Tweet</label>
					<textarea class="form-control" id="myTweet" rows="3"></textarea>
				</div>
				<div><button class="btn btn-primary align-middle" id="submitTweet">Tweet !</button></div>
			</div>
			<div class="row"><p id="charLeft">140 caracteres restants.</p></div>
			<ol id="timeline" class="list-group">
			</ol>
		</div>
	</div>
	<script
	src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="/Twitter/public/js/script.js"></script>
	<script type="text/javascript" src="/Twitter/public/js/tweets.js"></script>
</body>
</html>