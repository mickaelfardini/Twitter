<?php

class IndexController
{
	public static function defaultAction()
	{
		self::renderAction("register");
	}

	public static function renderAction($page)
	{
		include 'views/' . $page . '.html';
	}
}