<?php
$countTweet = Controller::countTweetsAction()[0];
$hashtags = Controller::countTagsAction();
include 'inc/header.php';
include 'inc/navbar.php';
include 'inc/messages.php'; ?>

<div class="main">
	<div class="side">
		<div class="left-bar">
			<a class="profile-link" href="/Twitter/profile"><img src="<?=$_SESSION["avatar"]?>" alt="icon" class="icon"></a>
			<a class="profile-link" href="/Twitter/profile">@<?=$_SESSION['username']?></a>
			<ul class="prof navbar-nav">	
				<li class="nav-item"><a id="nbTweets" class="nav-link" href="/Twitter/profile"><?=$countTweet?> Tweets</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Followers</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Following</a></li>
			</ul>
		</div>
		<div class="left-tags rounded">
			<ul class="tags list-group">
				<?php foreach ($hashtags as $tag): ?>
					<li class="list-group-item">
						<a href="/Twitter/tags/<?=$tag['name']?>">#<?=$tag['name']?></a> - <?=$tag['count']?> tweets
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
	<div class="content-main rounded">
		<div class="row">
			<div class="logo col-2 align-middle"><img src="<?=$_SESSION["avatar"]?>" alt="icon" class="rounded"></div>
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
<script src="/Twitter/public/js/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="/Twitter/public/js/bootstrap.min.js"></script>
<script src="/Twitter/public/js/script.js"></script>
<script src="/Twitter/public/js/tweets.js"></script>
</body>
</html>