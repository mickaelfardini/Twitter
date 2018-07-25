<?php

class IndexController
{
	public static function defaultAction()
	{
		if (!Controller::isConnected())
		{
			header("Location: /Twitter/signin/");
			return 0;
		}
		Controller::renderAction("home");
	}

	public static function LogoutAction() 
	{
		Session::destroySessionAction();
	}
}