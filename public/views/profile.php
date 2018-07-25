<?php
include 'inc/header.php';
include 'inc/navbar.php';
include 'inc/modal.php';

$user = ProfileController::getUserInfo();
$tweets = ProfileController::getUserTweets();
?>
<div class=" main user">
	<div class="side left-bar">
		<img src="<?=$_SESSION["avatar"]?>" alt="icon" class="icon">
		<ul class="prof navbar-nav">

			<li class="nav-item" id="firstname"><?=$user["firstname"]?></li>
			<li class="nav-item" id="username"><a class="nav-link" href="/Twitter/profile" id="myUsername">@<?=$user['username']?></a></li>
			<li class="nav-item" id="register_date">Member since <?=substr($user["register_date"], 0, -8)?></li>
			<li class="nav-item" id="editProfile"><a href="/Twitter/profile/edit">Edit profile</a></li>
		</ul>
	</div>
	<div class="content-main rounded">
		<div>
			<h4>Tweets:</h4>
			<ol class="list-group">
				<?php
              if(empty($user)):
				        echo "No tweets to show.";
				      else:
					      foreach($tweets as $tweet):?>

					<li class="list-group-item tweet"><img src="<?=$user["avatar"]?>" class="float-left icon-tweet"><a class="nav-link" href="/Twitter/profile">@<?=$user['username']?></a><br><?=($tweet["content_tweet"]);?></li>
				<?php endforeach; endif; ?>
			</ol>

		</div>
	</div>
</div>
<?php include 'inc/footer.php';?>
</body>
</html>