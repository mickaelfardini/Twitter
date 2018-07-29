<?php

class AccountModel
{
	public function EditAction()
	{
		$query = "UPDATE user SET ";
		foreach ($_POST as $key => $value) {
			if (!empty($value)) {
				$query .= "$key = '$value' , ";
			}
		}
		$query = rtrim($query,", ");
		$query .= " WHERE user.id_user = ?";
		$edit = PDOConnection::prepareAction($query);
		$edit->execute([$_SESSION['id_user']]);

		if(isset($_POST['theme'])){
			$_SESSION['theme'] = $_POST['theme'];
		}
		header('Location: /Twitter/profile');
	}

	public function ChangePassAction()
	{
		$_POST['password'] .= "si tu aimes la wac tape dans tes mains";
		$hashed = hash('ripemd160', $_POST['password']);
		$query = "UPDATE user SET password = ? WHERE id_user = ?";
		$change= PDOConnection::prepareAction($query);
		$change->execute([$_SESSION['id_user']]);
	}
}