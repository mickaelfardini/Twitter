<?php

class TweetModel
{
	public static function defaultAction()
	{
		
	}

	public static function getTweetAction()
	{
		$query = "SELECT id_tweet, content_tweet, date_tweet, username FROM tweet
		JOIN user ON tweet.id_user = user.id_user
		ORDER BY date_tweet ASC";
		$req = PDOConnection::prepareAction($query);
		$req->execute();
		echo json_encode([$req->fetchAll(PDO::FETCH_ASSOC)]);
	}

	public static function getLastTweetAction()
	{
		$query = "SELECT id_tweet, content_tweet, date_tweet, username FROM tweet
		JOIN user ON tweet.id_user = user.id_user
		ORDER BY date_tweet DESC LIMIT 1";
		$req = PDOConnection::prepareAction($query);
		$req->execute();
		echo json_encode([$req->fetch(PDO::FETCH_ASSOC)]);
	}

	public static function postTweetAction()
	{
		$query = "INSERT INTO tweet (id_user, content_tweet, delete_tweet)
					VALUES (:id_user, :content_tweet, :delete_tweet)";
		$req = PDOConnection::prepareAction($query);
		$req->execute(array(
			':id_user' => $_SESSION['id_user'],
			':content_tweet' => $_POST['content'],
			':delete_tweet' => 0));
	}
}