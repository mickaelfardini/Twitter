<?php

class IndexController
{
	public static $countTweets;

	public static function defaultAction()
	{
		if (!Controller::isConnected())
		{
			header("Location: /Twitter/signin/");
			return 0;
		}
		Controller::renderAction("home");
	}

	public static function countTweetsAction()
	{
		self::$countTweets = IndexModel::countTweetsAction();
		return self::$countTweets;
	}

	
	public static function LogoutAction() 
	{
		Session::destroySessionAction();
	}
}