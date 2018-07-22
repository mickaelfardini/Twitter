<?php

class ProfileModel
{
	public static function getUserInfo($user)
	{
		$query = "SELECT * FROM tweet
					JOIN user ON tweet.id_user = user.id_user
					-- JOIN follow
					WHERE user.username = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$user]);
		return $req->fetchAll(PDO::FETCH_ASSOC);
	}
}