<?php

class AccountModel
{
	public function ThemeAction()
	{
		$query = "UPDATE theme FROM user SET theme = ?
					WHERE id_user = ?";
		$reqtheme = PDOConnection::prepreAction($query);
		$reqtheme->execute(array([$_POST['theme'], $_SESSION['id_user']]));
	}

	public function EditAction()
	{
		if(empty($_POST['theme']) || empty($_POST['avatar']) || empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || $_POST['password'])
		{
		$query = "UPDATE user SET theme = ? , avatar = ? , firstname = ? , lastname = ? , email = ? , password = ?
				WHERE user.id_user = ?";
		$edit = PDOConnection::prepreAction($query);
		$edit->execute(array([
			$_POST['theme'],
			$_POST['avatar'], 
			$_POST['firstname'], 
			$_POST['lastname'],
			$_POST['email'], 
			$_POST['password'])
			);
		}
	}
}