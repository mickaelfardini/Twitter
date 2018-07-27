<?php

class TweetController
{
	public static function defaultAction()
	{
		
	}

	public static function getTweetAction()
	{
		TweetModel::getTweetAction();
	}

	public static function getLastTweetAction()
	{
		TweetModel::getLastTweetAction();
	}

	public static function postTweetAction()
	{
		TweetModel::postTweetAction();
	}
}