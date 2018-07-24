<?php
$user = ProfileController::getUserInfo();
include 'inc/header.php';
include 'inc/navbar.php';
?>
<br>
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
<div class="content-main rounded container bg-light">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="row">
						<div class="col-md-12 lead">
							<?=$_SESSION['username']?>
							<hr>
						</div>
					</div>
					<div class="col-md-8">
						<form method="POST" action="/Twitter/account/edit">
							<select class="form-control">
								<option value="#1da1f2">Couleur par défaut</option>
								<option value="#DB1702">Rouge</option>
								<option value="#0000FF">Bleu</option>
								<option value="#000000">Noir</option>
								<option value="#FFFF00">Jaune</option>
								<option value="#00FF00">Vert</option>
								<option value="#FFFFFF">Blanc</option>
								<option value="#EE82EE">Violet</option>
								<option value="#ED7F10">Orange</option>
							</select>
							<div class="form-group"><br />
								<label>Edit Avatar :</label>
								<input class="form-control" id="inputFile" type="file">
								<div class="form-group">									
									<label>Last name</label>
									<input class="form-control" name="lastname" type="text" placeholder="<?=$user['lastname']?>">
								</div>
								<div class="form-group">
									<label>First name</label>
									<input class="form-control" name="firstname" type="text" placeholder="<?=$user['firstname']?>">
								</div>
								<div class="form-group">
									<label>Your Mail Adress</label><br />
									<input class="form-control" type="mail" name="email" placeholder="<?=$user['email']?>">
								</div>
								<div class="form-group">
									<label>Change Mail</label><br />
									<input class="form-control" type="mail" name="email" placeholder="<?=$user['email']?>">
								</div>
								<div class="form-group">
									<label>Your Password</label><br />
									<input class="form-control" type="password" name="password" placeholder="*****">
								</div>
								<div class="form-group">
									<label>New Password</label><br />
									<input class="form-control" type="password" name="password" placeholder="*****">
								<input class="form-group" type="submit" id="profileEdit" name="profilEdit" value="Save Profile">
								<input class="btn btn-danger" type="button" id="DeleteUser" name="deleteAccount" value="Delete Profile">
							</div>
						</div>
					</div>
</form>
<script src="/Twitter/public/js/jquery-3.3.1.js"></script>
<script src="/Twitter/public/js/script.js"></script>
</body>
</html>
