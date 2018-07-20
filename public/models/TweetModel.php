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
		return 1;
	}

	public static function getLastTweetAction()
	{
		$query = "SELECT id_tweet, content_tweet, date_tweet, username FROM tweet
		JOIN user ON tweet.id_user = user.id_user
		WHERE id_tweet > ?
		AND delete_tweet = 0
		ORDER BY date_tweet DESC";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$_POST['id_tweet']]);
		echo json_encode([$req->fetchAll(PDO::FETCH_ASSOC)]);
		return 1;
	}

	public static function postTweetAction()
	{
		if (strlen($_POST['content']) > 140) {
			echo json_encode(["error" => "Le tweet ne doit pas exceder 140 caracteres."]);
			return 0;
		}
		$query = "INSERT INTO tweet (id_user, content_tweet, delete_tweet)
					VALUES (:id_user, :content_tweet, :delete_tweet)";
		$req = PDOConnection::prepareAction($query);
		$req->execute(array(
			':id_user' => $_SESSION['id_user'],
			':content_tweet' => $_POST['content'],
			':delete_tweet' => 0));
		echo json_encode(["PostTweet" => "ok"]);
		return 1;
	}
}