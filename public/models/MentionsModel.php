<?php

class MentionsModel
{
	public static function getMentions($username)
	{
		$query = "SELECT id_tweet, content_tweet, date_tweet, username, avatar 
		FROM tweet
		JOIN user ON tweet.id_user = user.id_user 
		WHERE content_tweet LIKE :username ORDER BY date_tweet DESC";
		$sql = PDOConnection::prepareAction($query);
		$sql->bindValue(":username", "%@".$username."%");
		$sql->execute();
		$res = $sql->fetchAll();
		 return $res;
	}
}


