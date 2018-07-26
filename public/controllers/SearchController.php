<?php

class SearchController
{
	public static function defaultAction()
	{
		SearchModel::searchAction();
	}
}