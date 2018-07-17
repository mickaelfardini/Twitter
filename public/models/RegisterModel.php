<?php

class RegisterModel
{
	protected $firstname;
	protected $lastname;
	protected $username;
	protected $email;
	protected $password;


	public function __construct($firstname, $lastname, $username,$email, $password)
	{
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->username = $username;
		$this->email = $email;
		$this->password = $password;
	}

	public function RegisterAction()
	{

		var_dump($this, $_POST);
		if(empty($this->firstname)){
			echo json_encode(["Firstname:" => "Incorrect"]);
			return 0;
		}
		if(empty($this->lastname)){
			echo json_encode(["Lastname:" => "Incorrect"]);
			return 0;
		}
		if(empty($this->username)){
			echo json_encode(["Username:" => "Incorrect"]);
			return 0;
		}
		if(empty($this->email)){
			echo json_encode(["Email:" => "Incorrect"]);
			return 0;
		}
		if(empty($this->password)){
			echo json_encode(["Password:"=>"Incorrect"]);
			return 0;
		}
		else{
			$sql = PDOConnection::prepareAction("INSERT INTO user (firstname, lastname, username, email, password) VALUES (:firstname, :lastname, :username, :email, :password)");
			$sql->bindValue(':firstname', $this->firstname);
			$sql->bindValue(':lastname', $this->lastname);
			$sql->bindValue(':username', $this->username);
			$sql->bindValue(':email', $this->email);
			$sql->bindValue(':password', sha1($this->password));
			var_dump($sql->execute());

		}
	}
}