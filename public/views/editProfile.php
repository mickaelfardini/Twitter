<?php
include 'inc/header.php';
include 'inc/navbar.php';
include 'inc/modal.php';
$countTweet = Controller::countTweetsAction()[0];
$hashtags = Controller::countTagsAction();
$user = ProfileController::getUserInfo();
?>
<div class="main user">
	<div class="side left-bar">
		<img src="<?=$_SESSION["avatar"]?>" alt="icon" class="icon">
		<ul class="prof navbar-nav">
			<li class="nav-item" id="firstname"><?=$user["firstname"]?></li>
			<li class="nav-item" id="username"><a class="nav-link" href="/Twitter/profile" id="myUsername">@<?=$user['username']?></a></li>
			<li class="nav-item" id="register_date">Member since <?=substr($user["register_date"], 0, -8)?></li>
			<li class="nav-item" id="editProfile"><a class="nav-link" href="/Twitter/profile/edit">Edit profile</a></li>
		</ul>
	</div>
	<div class="content-main rounded container bg-light row col-md-8">
		<div>
			<div class="row">
				<div class="col-md-6 lead">
					<?=$_SESSION['username']?>
					<hr>
				</div>
			</div>
		</div>
		<form method="POST" action="/Twitter/account/edit">
			<div>
				<div class="form-group mx-sm-3 mb-2">
					<label class="custom-label mx-sm-3 mb-2" for="inlineFormCustomSelect">Thème</label>
					<select class="custom-select mx-sm-3 mb-2" name="theme">
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
				</div>
				<div class="form-group mx-sm-3 mb-2">
					<label class="custom-label mx-sm-3 mb-2">Edit Avatar</label>
					<input class="form-control-file mx-sm-3 mb-2" id="inputFile" type="file" style= "overflow-wrap: break-word;">
					<div class="form-group mx-sm-3 mb-2">
						<label class="custom-label mr-sm-2">Last name</label>
						<input class="form-control" name="lastname" type="text" placeholder="<?=$user['lastname']?>">
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label class="custom-label mr-sm-2">First name</label>
						<input class="form-control" name="firstname" type="text" placeholder="<?=$user['firstname']?>">
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label class="custom-label mr-sm-2">Your Mail Adress</label>
						<input class="form-control" type="mail" name="email" placeholder="<?=$user['email']?>">
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label class="custom-label mr-sm-2">Change Mail</label>
						<input class="form-control" type="mail" name="email" placeholder="<?=$user['email']?>">
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label class="custom-label mr-sm-2">Your Password</label>
						<input type="password" name="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="*****">
					</div>
					<div class="form-group mx-sm-3 mb-2">
						<label for="inputPassword5">Password</label>
						<input type="password" name="newpassword" id="inputPassword6" class="form-control" aria-describedby="passwordHelpBlock" placeholder="*****">
						<small id="passwordHelpBlock" class="form-text text-muted">
							Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
						</small>
					</div>
					<input class="btn btn-primary mx-sm-3" type="submit" id="profileEdit" value="Save Profile">
					<input class="btn btn-danger mx-sm-3" type="button" id="DeleteUser" name="deleteAccount" value="Delete Profile" >
				</div>
			</form>
			<?php include 'inc/footer.php';?>
		</body>
		</html>
	</form>
	<?php include 'inc/footer.php';?>
</body>
</html>
