<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
	<link rel="stylesheet" href="/Twitter/public/css/styleprofile.css">
	<title>Tweet Academie - Profile</title>
</head>
<body>
	<nav class="navbar navbar-light navbar-expand-lg justify-content-between">
		<ul class="navbar-nav">
			<li class="nav-item"><a class="nav-link" href=".php">Home</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Mentions</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Messages</a></li>
		</ul>
		<img src="/Twitter/public/img/birdie.png" alt="logo" width="35" height="35" class="d-inline-block align-top">

		<form class="form-inline">
			<input id="searchHome" class="form-control mr-sm-2" type="text" placeholder="Search"name="search">
		</form>	
	</nav>
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
                  <label for="">Mail Adress</label><br />
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