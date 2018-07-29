<?php

class AccountModel
{
	protected $password;
	protected $new_password;

	public function __construct()
	{
		$this->password = $post['Password'];
		$this->new_password = $post['newpassword'];
	}

	public function EditAction()
	{
		$query = "UPDATE user SET ";
		foreach ($_POST as $key => $value) {
			if (!empty($value) && $key != "password") {
				$query .= "$key = '$value' , ";
			} elseif (!empty($value) && $key == "password") {
				self::ChangePassAction();
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

	public function checkPassAction()
	{
		$query = "SELECT password FROM user WHERE id_user = ?";
		$sql = PDOConnection::prepareAction($query);
		$sql->execute([$_SESSION['id_user']]);
		$db_password = $sql->fetch();
		
		$input_password = $_POST["password"];
		$input_password .= "si tu aimes la wac tape dans tes mains";
		$hashed_input = hash('ripemd160', $input_password);
		var_dump($db_password);
		if($db_password != $hashed_input)
			return false;
		else
			return true;
	}

	public function ChangePassAction()
	{
		var_dump(checkPassAction());
		if (!checkPassAction()){
			$alert = "Incorrect password combination";
			echo json_encode(array("error"=>"$alert"));
		}
		
		else {
			$new_password = $_POST["newpassword"];
			$new_password .= "si tu aimes la wac tape dans tes mains";

			$hashed = hash('ripemd160', $new_password);
			var_dump($hashed);
			$query = "UPDATE user SET password = ? where id_user = ?";
			$sql = PDOConnection::prepareAction($query);
			$sql->execute([$hashed, $_SESSION["id_user"]]);
		}
	}
}