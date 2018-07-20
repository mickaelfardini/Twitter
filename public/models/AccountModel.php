<?php

class AccountModel
{
	public function ThemeAction()
	{
		$reqtheme = PDOConnection::prepreAction("UPDATE theme from user SET theme = ? WHERE id_user = ?");

	}
}