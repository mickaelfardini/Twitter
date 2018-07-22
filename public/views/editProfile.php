<?php
include 'inc/header.php';
include 'inc/navbar.php';
?>
<br>
<form>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 lead">
								Le pseudo de la personne
								<hr>
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group"> 
								<input type="text" class = "form-control" id="" value="Edit Avatar">
								<input id="" type="file">
								<div class="form-group">
									<label for="">Last name</label>
									<input class="form-control" id="" type="text" placeholder="Smith">
								</div>
								<div class="form-group">
									<label for="">First name</label>
									<input class="form-control" id="" type="text" placeholder="John">
								</div>
								<div class="form-group">
									<label for="">Username</label>
									<input class="form-control" id="" type="text" placeholder="JohnSmith">
								</div>
								<div class="form-group">
									<label for="">Your Mail Adress</label><br />
									<input type="mail" name="changeMail" placeholder="JohnSmith@example.com">
								</div>
								<div class="form-group">
									<label for="">Change Mail</label><br />
									<input type="mail" name="confirmChangeMail" placeholder="JohnSmith@example.com">
								</div>
								<div class="form-group">
									<label for="">Your Password</label><br />
									<input type="password" name="changePassword" placeholder="*****">
								</div>
								<div class="form-group">
									<label for="">New Password</label><br />
									<input type="password" name="changePassword" placeholder="*****">
								</div>
								<div class="radio">
									<label class="radio-inline">
										<input value="male" checked="checked" name="" id="" type="radio">Homme
									</label>
									<label class="radio-inline">
										<input value="female" name="" id="" type="radio">Femme
									</label><br />
									<input type="submit" name="profilEdit" value="Save Profile">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
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
