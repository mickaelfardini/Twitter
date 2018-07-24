<?php
include 'inc/header.php';
include 'inc/navbar.php';
include 'inc/messages.php';

$user = ProfileController::getUserInfo();
$tweets = ProfileController::getUserTweets();
?>
<div class=" main user">
	<div class="side left-bar">
		<img src="<?=$_SESSION["avatar"]?>" alt="icon" class="icon">
		<ul class="prof navbar-nav">

			<li class="nav-item" id="firstname"><?=$user["firstname"]?></li>
			<li class="nav-item" id="username"><a class="nav-link" href="/Twitter/profile">@<?=$user['username']?></a></li>
			<li class="nav-item" id="register_date">Member since <?=substr($user["register_date"], 0, -8)?></li>
			<li class="nav-item" id="editProfile"><a href="/Twitter/profile/edit">Edit profile</a></li>
		</ul>
	</div>
	<div class="content-main rounded">
		<div>
			<h4>Tweets:</h4>
			<ol class="list-group">
				<?php	if(empty($tweets)):
				echo "No tweets to show.";
				else:
					foreach($tweets as $tweet):?>
					<li class="list-group-item tweet"><img src="<?=$user["avatar"]?>" class="float-left icon-tweet"><a class="nav-link" href="/Twitter/profile">@<?=$_SESSION['username']?></a><br><?=($tweet["content_tweet"]);?></li>
				<?php endforeach; endif; ?>
			</ol>
		</div>
	</div>
</div>
<script src="/Twitter/public/js/jquery-3.3.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="/Twitter/public/js/bootstrap.min.js"></script>
<script src="/Twitter/public/js/script.js"></script>
<script src="/Twitter/public/js/tweets.js"></script>
</body>
</html>