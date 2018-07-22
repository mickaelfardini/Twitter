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
		$this->password .= "si tu aimes la wac tape dans tes mains";
		$hashed = hash('ripemd160', $this->password);

		$sql = PDOConnection::prepareAction("INSERT INTO user (firstname, lastname, username, email, password) VALUES (:firstname, :lastname, :username, :email, :password)");
		$sql->bindValue(':firstname', $this->firstname);
		$sql->bindValue(':lastname', $this->lastname);
		$sql->bindValue(':username', $this->username);
		$sql->bindValue(':email', $this->email);
		$sql->bindValue(':password', $hashed);
		$sql->execute();

		echo json_encode(["Signup" => "Valid"]);
		return 1;
	}

	public function verifyMailAction($email)
	{ 
		$regex = "/^[[:alnum:]]([-_.]?[[:alnum:]])*@[[:alnum:]]([-.]?[[:alnum:]])*\.([a-z]{2,6})$/";
		if (preg_match($regex, $email)) {
			return true;
		}		
		return false;
	}
}