<?php

class LogoutController
{
	public static function defaultAction() 
	{
		Controller::renderAction("logout");
	}

	public static function LogoutAction() 
	{
		Session::destroySessionAction();
	}