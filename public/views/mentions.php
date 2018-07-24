<?php
$countTweet = Controller::countTweetsAction()[0];
$hashtags = Controller::countTagsAction();
// $mentions = Controller::getMentions();
include 'inc/header.php';
include 'inc/navbar.php'; ?>
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
		<div>
			<h4>Mentions:</h4>
		</div>
	</div>
</div>
<script src="/Twitter/public/js/jquery-3.3.1.js"></script>
<script src="/Twitter/public/js/script.js"></script>
</body>
</html>