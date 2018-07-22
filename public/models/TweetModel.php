<?php

class TweetModel
{
	public static function defaultAction()
	{
		
	}

	public static function getTweetAction()
	{
		$query = "SELECT id_tweet, content_tweet, date_tweet, username FROM tweet
		JOIN user ON tweet.id_user = user.id_user
		ORDER BY date_tweet ASC";
		$req = PDOConnection::prepareAction($query);
		$req->execute();
		$result = $req->fetchAll(PDO::FETCH_ASSOC);
		$result = self::checkTweetAction($result);
		echo json_encode($result);
		return 1;
	}

	public static function getLastTweetAction()
	{
		$query = "SELECT id_tweet, content_tweet, date_tweet, username FROM tweet
		JOIN user ON tweet.id_user = user.id_user
		WHERE id_tweet > ?
		AND delete_tweet = 0
		ORDER BY date_tweet DESC";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$_POST['id_tweet']]);
		$result = $req->fetchAll(PDO::FETCH_ASSOC);
		$result = self::checkTweetAction($result);
		echo json_encode($result);
		return 1;
	}

	public static function postTweetAction()
	{
		if (strlen($_POST['content']) > 140) {
			echo json_encode(["error" => "Le tweet ne doit pas exceder 140 caracteres."]);
			return 0;
		}
		$query = "INSERT INTO tweet (id_user, content_tweet, delete_tweet)
		VALUES (:id_user, :content_tweet, :delete_tweet)";
		$req = PDOConnection::prepareAction($query);
		$req->execute(array(
			':id_user' => $_SESSION['id_user'],
			':content_tweet' => $_POST['content'],
			':delete_tweet' => 0));
		self::insertTagsAction($_POST['content']);
		echo json_encode(["PostTweet" => "ok"]);
		return 1;
	}

	private static function checkTweetAction($tweets)
	{
		foreach ($tweets as $k => $tweet) {
			preg_match_all("/#([a-zA-Z]+)/", $tweet['content_tweet'], $matches);
			foreach ($matches[0] as $key => $tag) {
				$replace = "<a href=\"/Twitter/tags/".$matches[1][$key]."\">$tag</a>";
				$tweet['content_tweet'] = str_replace($tag, $replace, $tweet['content_tweet']);
			}
			$tweets[$k] = $tweet;
		}

		foreach ($tweets as $k => $tweet) {
			preg_match_all("/@([a-zA-Z]+)/", $tweet['content_tweet'], $matches);
			foreach ($matches[0] as $key => $mention) {
				$replace = "<a href=\"/Twitter/profile/".$matches[1][$key]."\">$mention</a>";
				$tweet['content_tweet'] = str_replace($mention, $replace, $tweet['content_tweet']);
			}
			$tweets[$k] = $tweet;
		}
		return $tweets;
	}

	private static function insertTagsAction($content)
	{
		$query = "SELECT id_tweet FROM tweet WHERE id_user = ?
					ORDER BY date_tweet DESC LIMIT 1";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$_SESSION['id_user']]);
		$id_tweet = $req->fetch(PDO::FETCH_ASSOC)['id_tweet'];

		preg_match_all("/#([a-zA-Z]+)/", $content, $matches);
		foreach ($matches[1] as $match) {
			$query = "SELECT * FROM hashtag WHERE name_hashtag = ?";
			$req = PDOConnection::prepareAction($query);
			$req->execute([$match]);
			if(!$req->fetchAll(PDO::FETCH_ASSOC)) {
				$query = "INSERT INTO hashtag (name_hashtag) VALUES (?)";
				$req = PDOConnection::prepareAction($query);
				$req->execute([$match]);
			}
			self::tweetToTagAction($match, $id_tweet);
		}
	}

	private static function tweetToTagAction($match, $id_tweet)
	{
		$query = "SELECT id_hashtag FROM hashtag WHERE name_hashtag = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$match]);
		$id_hashtag = $req->fetch(PDO::FETCH_ASSOC)['id_hashtag'];

		$query = "INSERT INTO tweet_to_tag (id_tweet, id_tag) VALUES (?, ?)";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$id_tweet, $id_hashtag]);
	}
}