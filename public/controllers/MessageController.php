<?php

class MessageController
{
	public static function defaultAction()
	{
		include 'inc/messages.php';
	}

	public static function getUserMessagesAction()
	{
		return MessageModel::getUserMessagesAction();
	}

	public static function getUserContactAction()
	{
		return MessageModel::getUserContactAction();
	}
}