<?php
class ProfileController
{	

	public static function defaultAction()
	{
		if (!Controller::isConnected())
		{
			header("Location: ./signin/");
		}
		Controller::renderAction("profile");
	}
}