<?php

class RegisterController
{
	public static function RegisterAction()
	{
		$register = new RegisterModel($_POST['first_name'],$_POST['last_name'],$_POST['username'],$_POST['mail'],$_POST['password']);
		$register->RegisterAction();
	}
}