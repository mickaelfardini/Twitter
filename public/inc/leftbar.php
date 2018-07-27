<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 left-bar bg-color rounded">
					<a class="profile-link" href="/Twitter/profile"><img src="<?=$_SESSION["avatar"]?>" alt="icon" class="icon"></a>
					<a class="profile-link" href="/Twitter/profile" id="myUsername">@<?=$_SESSION['username']?></a>
					<ul class="prof navbar-nav">	
						<li class="nav-item"><a id="nbTweets" class="nav-link" href="/Twitter/profile">Tweets <span class="badge badge-pill badge-primary"><?=$countTweet?></span></a></li>
						<li class="nav-item"><a class="nav-link" href="#">Followers <span class="badge badge-pill badge-primary"><?=$followers?></span></a></li>
						<li class="nav-item"><a class="nav-link" href="#">Following</a></li>
					</ul>
				</div>
			</div>
		</div>