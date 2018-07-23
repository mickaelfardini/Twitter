<?php
class ProfileController
{
	public static $user;

	public static function defaultAction()
	{
		if (!Controller::isConnected())
		{
			header("Location: /Twitter/signin/");
			return 0;
		}
		Controller::renderAction("profile");
	}

	public static function editAction()
	{
		Controller::renderAction("editProfile");
	}

	public static function getUserInfo()
	{
		self::$user = isset($_GET['action']) ? $_GET['action'] : $_SESSION['username'];
		return ProfileModel::getUserInfo(self::$user);
	}
}