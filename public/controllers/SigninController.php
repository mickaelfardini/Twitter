<?php

class SigninController
{
	public static function defaultAction()
	{
		Controller::renderAction("Signin");
	}

	public static function signinAction()
	{
		$signin = new SigninModel();
		$signin->signinAction();
	}
}