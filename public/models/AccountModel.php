<?php

class AccountModel
{
	public function ThemeAction()
	{
		$query = "UPDATE theme FROM user SET theme = ?
					WHERE id_user = ?"
		$reqtheme = PDOConnection::prepreAction($query);
		$reqtheme->execute([$_POST['theme'], $_SESSION['id_user']]);
	}
}