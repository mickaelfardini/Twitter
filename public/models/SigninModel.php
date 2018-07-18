<?php
class SigninModel
{	
	private $username;
	private $password;
	private $id_user;

	public function __construct(){
		
		if(isset($_POST["username"]) && isset($_POST["password"])){
			$this->username = $_POST["username"];
			$this->password = $_POST["password"];
		}
		elseif(!isset($_GET["username"]) || !isset($_GET["password"])) {
			echo json_encode(array("signin"=>"Fields filled out incorrectly"));
		}
	}

	public function checkAccountAction(){
		$query = "select * from user where username like :username";
		$sql = PDOConnection::prepareAction($query);
		$sql->bindParam(':username', $this->username);
		$sql->execute();
		$user = $sql->fetch();

		if(empty($user)){
			return false;	
		}
		else {
			return true;
		}
	}

	public function checkPasswordAction(){
		if($this->checkAccountAction()){
			$query = "select password from user where username like :username";
			$sql = PDOConnection::prepareAction($query);
			$sql->bindParam(':username', $this->username);
			$sql->execute();
			$db_password = $sql->fetch();

			$this->password .= "si tu aimes la wac tape dans tes mains";
			$hashed_input = hash('sha1', $this->password);
			if($hashed_input !== $db_password['password']){
				$alert = "Incorrect password/username combination";
				echo json_encode(array("wrong_pass"=>"$alert"));
				return false;
			}
			else
				return true;
		}
		else {
			$alert = "This account does not exist";
			echo json_encode(array("signinError"=>"$alert"));
		}
	}

	public function signinAction(){
		if($this->checkPasswordAction()){
			Session::setSessionAction($this->username);
			echo json_encode(["signin" => "ok"]);
		}
	}
}