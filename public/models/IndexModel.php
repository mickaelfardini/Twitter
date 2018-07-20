<?php

class IndexModel
{
	public static function countTweetsAction()
	{
		$query = "SELECT COUNT(*) FROM tweet
		WHERE id_user = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$_SESSION['id_user']]);
		return $req->fetch();
	}
}