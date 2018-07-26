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
	{co
		$query = "SELECT id_tweet, content_tweet FROM tweet
					JOIN user ON tweet.id_user = user.id_user
					WHERE user.username = ?
					AND delete_tweet = 0
					ORDER BY date_tweet DESC";
		$req = PDOConnection::prepareAction($query);
		$req->execute([htmlspecialchars($user)]);
		return $req->fetchAll(PDO::FETCH_ASSOC);
	}

	public static function getFollowersAction()
	{
		$query = "SELECT username, avatar FROM user
					WHERE username LIKE ?
					LIMIT 15";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$_POST['search']."%"]);
		// var_dump($req->fetchAll(PDO::FETCH_ASSOC));
		echo json_encode([$req->fetchAll(PDO::FETCH_ASSOC)]);
		// var_dump($_POST);
	}

	public static function followAction()
	{
		$query = "SELECT id_user FROM user
					WHERE username = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$_POST['username']]);
		$id = $req->fetch(PDO::FETCH_ASSOC)['id_user'];

		$query = "INSERT INTO follow (id_followed, id_follower)
					VALUES (?, ?)";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$id, $_SESSION['id_user']]);
	}

	public static function unFollowAction()
	{
		$query = "SELECT id_user FROM user
					WHERE username = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$_POST['username']]);
		$id = $req->fetch(PDO::FETCH_ASSOC)['id_user'];

		$query = "UPDATE follow SET status_follow = 0
					WHERE id_followed = ?
					AND id_follower = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$id, $_SESSION['id_user']]);
	}
}