<?php

class Controller
{
	public static function renderAction($page)
	{
		include 'views/' . $page . '.php';
	}
}