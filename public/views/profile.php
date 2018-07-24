<?php
include 'inc/header.php';
include 'inc/navbar.php';

$user = ProfileController::getUserInfo();
$tweets = ProfileController::getUserTweets();
?>
<div class=" main user">
	<div class="side left-bar">
		<img src="<?=$_SESSION["avatar"]?>" alt="icon" class="icon"><!-- Recup l'icon de l'user -->
		<ul class="prof navbar-nav">

			<li class="nav-item" id="firstname"><?=$user["firstname"]?></li>
			<li class="nav-item" id="username"><a class="nav-link" href="/Twitter/profile">@<?=$user['username']?></a></li>
			<li class="nav-item" id="register_date">Member since <?=substr($user["register_date"], 0, -8)?></li>
			<li class="nav-item" id="editProfile"><a href="/Twitter/profile/edit">Edit profile</a></li>
		</ul>
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
		<div>
			<h4>Tweets:</h4>
			<ol class="list-group">
			<?php	if(empty($user))
						echo "No tweets to show.";
					else{
					foreach($tweets as $tweet):?>
				<li class="list-group-item tweet"><img src="<?=$user["avatar"]?>" class="float-left icon-tweet"><a class="nav-link" href="/Twitter/profile">@<?=$_SESSION['username']?></a><br><?=($tweet["content_tweet"]);?></li>
				<?php endforeach ?>
			</ol>
		</div>	


	</div>
</div>
<script src="/Twitter/public/js/jquery-3.3.1.js"></script>
<script src="/Twitter/public/js/script.js"></script>
</body>
</html>