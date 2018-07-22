<?php
$countTweet = IndexController::countTweetsAction()[0];
include 'inc/header.php';
include 'inc/navbar.php'; ?>
	<div class="main">
		<div class="side">
			<div class="left-bar">
				<img src="https://pbs.twimg.com/profile_images/973163557633380357/aXWT-Dry_bigger.jpg" alt="icon" class="icon">
				<a class="profile-link" href="#">@<?=$_SESSION['name']?></a>
				<ul class="prof navbar-nav">	
					<li class="nav-item"><a id="nbTweets" class="nav-link" href="#"><?=$countTweet?> Tweets</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Followers</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Following</a></li>
				</ul>
			</div>
			<div class="left-tags rounded">
				<ul class="tags list-group">
					<?php foreach ($hashtags as $tag): ?>
					<?php endforeach ?>
					Bonjour, <a href="/Twitter/tags/test">#test</a> @choco et demain #<a href="/Twitter/<a href="/Twitter/tags/tag">#tag</a>s/trololo">#trololo</a> + @<a href="/Twitter/tags/test">#test</a>@oki #<a href="/Twitter/<a href="/Twitter/tags/tag">#tag</a>s/hash">#hash</a>#<a href="/Twitter/tags/tag">#tag</a> demain#<a href="/Twitter/tags/test">#test</a>
					<li class="list-group-item">#un</li>
					<li class="list-group-item">#dos</li>
					<li class="list-group-item">#three</li>
					<li class="list-group-item">#quatre</li>
					<li class="list-group-item">#cinco</li>
					<li class="list-group-item">#six</li>
					<li class="list-group-item">#septante</li>
					<li class="list-group-item">#hui</li>
					<li class="list-group-item">#nonante</li>
					<li class="list-group-item">#ten</li>
				</ul>
			</div>
		</div>
		<div class="content-main rounded">
			<div class="row">
				<div class="logo col-2 align-middle"><img src="https://pbs.twimg.com/profile_images/973163557633380357/aXWT-Dry_bigger.jpg" alt="icon"></div>
				<div class="form-group col-8">
					<label for="myTweet">Tweet</label>
					<textarea class="form-control" id="myTweet" rows="3"></textarea>
				</div>
				<div><button class="btn btn-primary align-middle" id="submitTweet">Tweet !</button></div>
			</div>
			<div class="row"><p id="charLeft">140 caracteres restants.</p></div>
			<ol id="timeline" class="list-group">
			</ol>
		</div>
	</div>
	<!-- <script -->
	<!-- src="https://code.jquery.com/jquery-3.3.1.js" -->
	<!-- integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" -->
	<!-- crossorigin="anonymous"></script> -->
	<script type="text/javascript" src="/Twitter/public/js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="/Twitter/public/js/script.js"></script>
	<script type="text/javascript" src="/Twitter/public/js/tweets.js"></script>
</body>
</html>