<body style="background-color: <?=$_SESSION['theme']?>">
	<nav class="navbar navbar-light t navbar-expand-lg justify-content-between">
		<ul class="inf navbar-nav">
			<li class="nav-item"><a class="nav-link" href="/Twitter">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Mentions</a></li>
			<li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#messageModal" href="#">Messages</a></li>
		</ul>
		<img src="/Twitter/public/img/birdie.png" alt="logo" width="35" height="35" class="d-inline-block align-top">

		<form class="form-inline">
			<input id="searchHome" class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
		</form>	
		<button type="button" id="logout" name="logout" value="logout" class="btn btn-primary">Log Out</button>
	</nav>