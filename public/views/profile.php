<?php
include 'inc/header.php';
include 'inc/navbar.php';

$user = ProfileController::getUserInfo();
?>
<div class=" main user">
	<div class="side left-bar">
		<img src="<?=$_SESSION["avatar"]?>" alt="icon" class="icon"><!-- Recup l'icon de l'user -->
		<ul class="prof navbar-nav">
			<li class="nav-item" id="firstname"><?=$_SESSION["firstname"]?></li>
			<li class="nav-item" id="username"><a class="nav-link" href="/Twitter/profile">@<?=$_SESSION['username']?></a></li>
			<li class="nav-item" id="register_date">Member since <?=substr($_SESSION["register_date"], 0, -8)?></li>
			<li class="nav-item" id="editProfile"><a href="#">Edit profile</a></li>
		</ul>
	</div>	
	<div class="content-main rounded">
		<div>
			<h4>Tweets:</h4>
			<ol class="list-group">
			<?php	if(empty($user))
						echo "No tweets to show.";
				
					else{
					foreach($user as $u){?>
					<li class="list-group-item tweet"><a class="nav-link" href="/Twitter/profile">@<?=$_SESSION['username']?></a><br><?=($u["content_tweet"]);?></li>
			<?php } }?>
			</ol>
		</div>	


	</div>
</div>
	<script src="/Twitter/public/js/jquery-3.3.1.js"></script>
	<script src="/Twitter/public/js/script.js"></script>
</body>
</html>