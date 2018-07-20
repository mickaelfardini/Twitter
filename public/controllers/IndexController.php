<?php

class IndexController
{
	public static $countTweets;

	public static function defaultAction()
	{
		if (!Controller::isConnected())
		{
			header("Location: ./signin/");
		}
		Controller::renderAction("home");
	}

	public static function countTweetsAction()
	{
		self::$countTweets = IndexModel::countTweetsAction();
		return self::$countTweets;
	}
}