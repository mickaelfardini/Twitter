<?php
$countTweet = Controller::countTweetsAction()[0];
$hashtags = Controller::countTagsAction();
$followers = Controller::countFollowersAction()[0];
$mentions = MentionsModel::getMentions($_SESSION["username"]);

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
				<h4>Mentions:</h4>
				<ol class="list-group">
					<?php
					if(empty($mentions))
						echo "No mentions to show.";
					else{
						foreach($mentions as $mention):?>
						<li class="list-group-item tweet"><img src="<?=$mention["avatar"]?>" class="float-left icon-tweet"><a class="nav-link" href="/Twitter/profile/<?=$mention["username"]?>"><?=$mention["username"]?></a><?=$mention["content_tweet"];?></li>
					<?php endforeach; }?>
				</ol>
			</div>
		</div>
	</div>
	<?php include 'inc/footer.php';?>
</body>
</html>