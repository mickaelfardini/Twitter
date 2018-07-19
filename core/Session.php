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
		$_SESSION['name'] = $name;
	}

	public static function destroySessionAction()
	{
		session_unset();
		session_destroy();
	}
}