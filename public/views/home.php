<?php
$countTweet = Controller::countTweetsAction()[0];
$hashtags = Controller::countTagsAction();

include 'inc/header.php';
include 'inc/navbar.php';
include 'inc/modal.php'; ?>

<div class="main">
	<div class="side">
		<div class="left-bar">
			<a class="profile-link" href="/Twitter/profile"><img src="<?=$_SESSION["avatar"]?>" alt="icon" class="icon"></a>
			<a class="profile-link" href="/Twitter/profile" id="myUsername">@<?=$_SESSION['username']?></a>
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
				<div id="autocomp"></div>
			</div>
			<div><button class="btn btn-primary align-middle" id="submitTweet">Tweet !</button></div>
		</div>
		<div class="row"><p id="charLeft">140 caracteres restants.</p></div>
		<ol id="timeline" class="list-group">
		</ol>
	</div>
</div>
<?php include 'inc/footer.php';?>
</body>
</html>