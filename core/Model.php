<?php

class Model
{
	public static function defaultAction()
	{
		
	}

	public static function countTweetsAction()
	{
		$query = "SELECT COUNT(*) FROM tweet
		WHERE id_user = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$_SESSION['id_user']]);
		return $req->fetch();
	}

	public static function countTagsAction()
	{
		$query = "SELECT COUNT(*) AS 'count', name_hashtag AS 'name' 
					FROM tweet_to_tag
					JOIN hashtag ON id_tag = id_hashtag
					GROUP BY id_tag ORDER BY COUNT(*) DESC LIMIT 10";
		$req = PDOConnection::prepareAction($query);
		$req->execute();
		return $req->fetchAll(PDO::FETCH_ASSOC);
	}
}