<?php

class IndexController
{
	public static $countTweets;
	public static $countTags;
	
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

	public static function countTagsAction()
	{
		self::$countTags = IndexModel::countTagsAction();
		return self::$countTags;
	}

	
	public static function LogoutAction() 
	{
		Session::destroySessionAction();
	}
}