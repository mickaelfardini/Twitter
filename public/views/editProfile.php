<?php
$user = ProfileController::getUserInfo()[0];
$countTweet = Controller::countTweetsAction()[0];
$hashtags = Controller::countTagsAction();
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
						<form>
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
									<input class="form-control" type="text" value="<?=$user['lastname']?>">
								</div>
								<div class="form-group">
									<label>First name</label>
									<input class="form-control" type="text" value="<?=$user['firstname']?>">
								</div>
								<div class="form-group">
									<label>Your Mail Adress</label><br />
									<input class="form-control" type="mail" name="changeMail" value="<?=$user['email']?>">
								</div>
								<div class="form-group">
									<label>Change Mail</label><br />
									<input class="form-control" type="mail" name="confirmChangeMail" value="<?=$user['email']?>">
								</div>
								<div class="form-group">
									<label>Your Password</label><br />
									<input class="form-control" type="password" name="changePassword" placeholder="*****">
								</div>
								<div class="form-group">
									<label>New Password</label><br />
									<input class="form-control" type="password" name="changePassword" placeholder="*****">
								</div>
								<div class="radio">
									<label class="radio-inline">
										<input value="male" checked="checked" name="" id="" type="radio">Homme
									</label>
									<label class="radio-inline">
										<input value="female" name="" id="" type="radio">Femme
									</label><br />
								</div>
								<input class="form-control" type="submit" id="profileEdit" name="profilEdit" value="Save Profile">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="delete-user-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<p>Are you sure you want to delete account?</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-danger">Delete</button>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
</body>
</html>
