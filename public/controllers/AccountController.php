<?php

class AccountController
{
	public static function defaultAction()
	{
		
	}

	public static function registerAction()
	{
		$register = new RegisterModel($_POST);
		$register->registerAction();
	}

	public static function signinAction()
	{
		$signin = new SigninModel();
		$signin->signinAction();
	}
	public static function themeAction()
	{
		
	}
}