<?php

class Session
{
	public static function startSessionAction()
	{
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
		}
	}

	public static function setSessionAction($name)
	{
		$query = "SELECT * FROM user WHERE username = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$name]);	
		$result = $req->fetch(PDO::FETCH_ASSOC);
		$_SESSION['name'] = $result['username'];
		$_SESSION['theme'] = $result['theme'];
		$_SESSION['id_user'] = $result['id_user'];
	}

	public static function destroySessionAction()
	{
		session_unset();
		session_destroy();
	}
}