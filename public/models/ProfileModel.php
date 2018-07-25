<?php

class ProfileModel
{
	public static function getUserInfo($user)
	{
		$query = "SELECT * FROM user
					WHERE user.username = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([htmlspecialchars($user)]);
		return $req->fetch(PDO::FETCH_ASSOC);
	}

	public static function getUserTweets($user)
	{
		$query = "SELECT id_tweet, content_tweet FROM tweet
					JOIN user ON tweet.id_user = user.id_user
					WHERE user.username = ?
					AND delete_tweet = 0
					ORDER BY date_tweet DESC";
		$req = PDOConnection::prepareAction($query);
		$req->execute([htmlspecialchars($user)]);
		return $req->fetchAll(PDO::FETCH_ASSOC);
	}
}