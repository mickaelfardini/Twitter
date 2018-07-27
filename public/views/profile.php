<?php
$countTweet = Controller::countTweetsAction()[0];
$hashtags = Controller::countTagsAction();
$followers = Controller::countFollowersAction()[0];

include 'inc/header.php';
include 'inc/navbar.php';
include 'inc/modal.php'; ?>
<div class="container"> <!-- class "main" -->
	<div class="row">
		<div class="col-sm-12 col-md-4 col-lg-3">
			
			<?php include 'inc/leftbar.php';
			include 'inc/tagslist.php';
			?>
		</div>
		<div class="col-sm-12 col-md-8 col-lg-7">
			<div class="bg-color rounded">
				<h4>Tweets :</h4>
				<ol id="timeline" class="list-group">
				</ol>
			</div>
		</div>
	</div>
	<?php include 'inc/footer.php';?>
</body>
</html>

<!--  OLD WITH USER INFO
<div class="side left-bar">
		<img src="<?=$_SESSION["avatar"]?>" alt="icon" class="icon">
		<ul class="prof navbar-nav">
			<li class="nav-item" id="firstname"><?=$user["firstname"]?></li>
			<li class="nav-item" id="username"><a class="nav-link" href="/Twitter/profile" id="myUsername">@<?=$user['username']?></a></li>
			<li class="nav-item" id="register_date">Member since <?=substr($user["register_date"], 0, -8)?></li>
			<li class="nav-item" id="editProfile"><a class="nav-link" href="/Twitter/profile/edit">Edit profile</a></li>
		</ul>
	</div>
	 -->