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
		// $hashed = hash('ripemd160', $_POST['password']);
		// $hashed .= "si tu aimes la wac tape dans tes mains";
		header('Location: /Twitter/profile');
	}
}