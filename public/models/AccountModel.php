<?php

class AccountModel
{
	public function ThemeAction()
	{
		$query = "UPDATE theme FROM user SET theme = ?
					WHERE id_user = ?"
		$reqtheme = PDOConnection::prepreAction($query);
		$reqtheme->execute(array([$_POST['theme'], $_SESSION['id_user']]));
	}

	public function EditAction()
	{
		$query = "UPDATE theme, firstname, lastname, e_mail, password FROM user"
		$edit = PDOConnection::prepreAction($query);
		$edit->execute([$_POST['theme'], $_POST['firstname'], $_POST['lastname'], $_POST['e_mail'], $_POST['password']);
	}
}