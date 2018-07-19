<?php

class Controller
{
	public static function renderAction($page)
	{
		include 'views/' . $page . '.php';
	}

	public static function isConnected()
	{
		return null !== $_SESSION['name'] ? true : false;
	}
}