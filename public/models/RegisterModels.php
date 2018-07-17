<?php
require_once '../core/PDOConnection.php';

class RegisterModels()
{
	private $pdo;
	protected $firstname;
	protected $lastname;
	protected $username;
	protected $email;
	protected $password;


	public function __construct($firstname, $lastname, $username, $email, $password)
	{
		$this->pdo = PDOConnection::ConnectionAction();
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->username = $username;
		$this->mail = $email;
		$this->pass = $password;
	}

	public function RegisterAction()
	{
		if(epmty($this->firstname)){
			echo json_encode(["Firstname:" => "Incorrect"]);
			return 0;
		}
		if(empty($this->lastname)){
			echo json_encode(("Lastname:" => "Incorrect"));
		}
		if(empty($this->username)){
			echo json_encode(["Username:" => "Incorrect"]);
			return 0;
		}
		if(empty($this->mail)){
			echo json_encode(["Email:" => "Incorrect"]);
			return 0;
		}
		if(empty($this->password)){
			echo json_encode(["Password:"=>"Incorrect"]);
			return 0;
		}
		else{
			$sql = $this->pdo->prepare("INSERT INTO user (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password");
			$sql->bindValue(':firstname', $_POST['firstname']);
			$sql->bindValue(':lastname', $_POST['lastname']);
			$sql->bindValue(':email', $_POST['email']);
			$sql->bindValue(':password', sha1($_POST['password']));
			$sql->execute();
		}
	}
}