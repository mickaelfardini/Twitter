<?php

class MessageModel
{
	public static function getUserMessagesAction()
	{
		$query = "SELECT id_sender, id_receiver, content_message, date_message, 
		sender.username as 'sender', receiver.username as 'receiver'
		FROM message
		JOIN user sender ON id_sender = sender.id_user
		JOIN user receiver ON id_receiver = receiver.id_user
		WHERE sender.username = ? OR receiver.username = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$_SESSION['username'], $_SESSION['username']]);
		return $req->fetchAll(PDO::FETCH_ASSOC);
	}

	public static function getUserContactAction()
	{
		$arr = [];
		$start = self::getUserMessagesAction();
		foreach ($start as $user) {
			if ($user['sender'] != $_SESSION['username']
				&& !in_array($user['sender'], $arr)) {
				$arr[] = $user['sender'];
			}
			if ($user['receiver'] != $_SESSION['username']
				&& !in_array($user['receiver'], $arr)) {
				$arr[] = $user['receiver'];
			}
		}
		return $arr;
	}
}