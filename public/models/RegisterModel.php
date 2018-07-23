<?php

class RegisterModel
{
	protected $firstname;
	protected $lastname;
	protected $username;
	protected $email;
	protected $password;

	public function __construct(array $post)
	{
		$this->firstname = $post['Firstname'];
		$this->lastname = $post['Lastname'];
		$this->username = $post['Username'];
		$this->email = $post['Email'];
		$this->password = $post['Password'];
	}

	public function registerAction()
	{
		foreach ($_POST as $key => $value)
		{
			if (empty($value)) {
				echo json_encode(["error" => "Le champ $key est mal rempli."]);
				return 0;
			}
		}
		if (!$this->verifyMailAction($_POST['Email'])) {
			echo json_encode(["error" => "Veuillez renseigner un mail valide."]);
			return 0;
		}
		if (!$this->verifyUsernameAction($_POST['Username'])) {
			echo json_encode(["error" => "Ce pseudo est deja utilisé."]);
			return 0;
		}
		$this->signupAction();
		echo json_encode(["Signup" => "Valid"]);
		return 1;
	}

	public function verifyMailAction($email)
	{
		$query = "SELECT * FROM user WHERE email = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$email]);
		if ($req->fetch(PDO::FETCH_ASSOC)) {
			return false;
		}
		$regex = "/^[[:alnum:]]([-_.]?[[:alnum:]])*@[[:alnum:]]([-.]?[[:alnum:]])*\.([a-z]{2,6})$/";
		if (preg_match($regex, $email)) {
			return true;
		}		
		return false;
	}

	public function signupAction()
	{
		$this->password .= "si tu aimes la wac tape dans tes mains";
		$hashed = hash('ripemd160', $this->password);

		$sql = PDOConnection::prepareAction("INSERT INTO user (firstname, lastname, username, email, password, avatar) VALUES (:firstname, :lastname, :username, :email, :password, :avatar)");
		$sql->bindValue(':firstname', $this->firstname);
		$sql->bindValue(':lastname', $this->lastname);
		$sql->bindValue(':username', $this->username);
		$sql->bindValue(':email', $this->email);
		$sql->bindValue(':password', $hashed);
		$sql->bindValue(':avatar', "/Twitter/public/img/default.jpg");

		$sql->execute();
		return 1;
	}

	public function verifyUsernameAction($user)
	{
		$query = "SELECT * FROM user WHERE username = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$user]);
		if ($req->fetch()) {
			return false;
		}
		return true;
	}
}