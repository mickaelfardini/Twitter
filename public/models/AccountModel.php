<?php

class AccountModel
{
	public function EditAction()
	{
		//Garder les informations de base de la personne en utilisant $_SESSION['lastname'] = lastname... etc	
		$query = "UPDATE user SET lastname = ? , firstname = ? , email = ? , password = ?
				WHERE user.id_user = ?";
		$edit = PDOConnection::prepareAction($query);
		$edit->execute([
			$_POST['lastname'],
			$_POST['firstname'],
			$_POST['email'],
			$_POST['password'],
			$_SESSION['id_user']]);
	}
}