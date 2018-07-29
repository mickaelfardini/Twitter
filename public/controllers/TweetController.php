<?php

class TweetController
{
	public static function defaultAction()
	{
		
	}

	public static function getCommentsAction()
	{
		TweetModel::getCommentsAction();
	}

	public static function commentsAction()
	{
		include 'inc/comment.php';
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