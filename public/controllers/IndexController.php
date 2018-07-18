<?php

class IndexController
{
	public static function defaultAction()
	{
		if (!Controller::isConnected())
		{
			header("Location: ./signin/");
		}
	}
}