<?php

class MentionsController
{
	public $username;

	public static function defaultAction()
	{
		Controller::renderAction("mentions");
	}

	public static function getMentionsAction()
	{
		MentionsModel::getMentions($_SESSION["username"]);
	}
}