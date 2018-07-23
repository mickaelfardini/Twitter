<?php
include 'inc/header.php';
include 'inc/navbar.php';

$user = ProfileController::getUserInfo();

// Recup les infos du gars (user ou personne dans l'url apres le /profile/...)
// Var Dump a retirer, juste histoire de montrer comment recup les infos et comment elles se presentent.
?>
<div class=" main user">
	<div class="side left-bar">
		<img src="https://pbs.twimg.com/profile_images/973163557633380357/aXWT-Dry_bigger.jpg" alt="icon" class="icon"><!-- Recup l'icon de l'user -->
		<ul class="prof navbar-nav">
			<li class="nav-item" id="firstname"><?=$user[0]["firstname"]?></li>
			<li class="nav-item" id="username"><a class="nav-link" href="/Twitter/profile">@<?=$_SESSION['name']?></a></li>
			<li class="nav-item" id="register_date">Member since <?=substr($user[0]["register_date"], 0, -8)?></li>
		</ul>
	</div>	
	<div class="content-main rounded">
		<div>
			<ol class="list-group">
			<?php	foreach($user as $u){?>
				<li class="list-group-item tweet"><a class="nav-link" href="/Twitter/profile">@<?=$_SESSION['name']?></a><br><?=($u["content_tweet"]);?></li>
			<?php } ?>
			</ol>
		</div>	


	</div>
</div>
</body>
</html>