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
		$this->firstname = $post['inputFirstname'];
		$this->lastname = $post['inputLastname'];
		$this->username = $post['inputUsername'];
		$this->email = $post['inputEmail'];
		$this->password = $post['inputPassword'];
	}

	public function registerAction()
	{
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
		$this->password .= "si tu aimes la wac tape dans tes mains";
		$sql = PDOConnection::prepareAction("INSERT INTO user (firstname, lastname, username, email, password) VALUES (:firstname, :lastname, :username, :email, :password)");
		$sql->bindValue(':firstname', $this->firstname);
		$sql->bindValue(':lastname', $this->lastname);
		$sql->bindValue(':username', $this->username);
		$sql->bindValue(':email', $this->email);
		$sql->bindValue(':password', sha1($this->password));
		$sql->execute();

		echo json_encode(["Signup" => "Valid"]);
	}
}