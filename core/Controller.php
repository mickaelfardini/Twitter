<?php

class Controller
{
	public static $countTweets;
	public static $countTags;

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
		self::$countTweets = Model::countTweetsAction();
		return self::$countTweets;
	}

	public static function countTagsAction()
	{
		self::$countTags = Model::countTagsAction();
		return self::$countTags;
	}
}