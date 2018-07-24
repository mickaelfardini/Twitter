<?php

class Controller
{
	public static function renderAction($page)
	{
		include 'views/' . $page . '.php';
	}

	public static function isConnected()
	{
		return null !== $_SESSION['username'] ? true : false;
	}

	public static function countTweetsAction()
	{
		return Model::countTweetsAction();
	}

	public static function countTagsAction()
	{
		return Model::countTagsAction();
	}

	public static function noResultAction()
	{
		self::renderAction("404");
	}
}