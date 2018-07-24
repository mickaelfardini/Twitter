<?php

class MentionsModel
{
	public static function getUserMentionsAction($content)
	{
		$query = "SELECT *	FROM tweet 	WHERE content_tweet LIKE ? ORDER BY date_tweet DESC";

		// preg_match_all("/@([a-zA-Z]+)/", $content, $matches);

	}
}


