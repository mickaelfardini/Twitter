<?php

class Model
{
	public static function countTweetsAction()
	{
		$query = "SELECT COUNT(*) FROM tweet
		WHERE id_user = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$_SESSION['id_user']]);
		return $req->fetch();
	}


	public static function countTagsAction()
	{
		$query = "SELECT COUNT(*) AS 'count', name_hashtag AS 'name' 
		FROM tweet_to_tag
		JOIN hashtag ON id_tag = id_hashtag
		GROUP BY id_tag ORDER BY COUNT(*) DESC LIMIT 10";
		$req = PDOConnection::prepareAction($query);
		$req->execute();
		return $req->fetchAll(PDO::FETCH_ASSOC);
	}

	public static function countFollowersAction()
	{
		$query = "SELECT COUNT(*) FROM follow
		WHERE id_followed = ?";
		$req = PDOConnection::prepareAction($query);
		$req->execute([$_SESSION['id_user']]);
		return $req->fetch();
	}

	public static function uploadAction()
	{
		var_dump($_FILES, $_POST);
		if($_FILES['SelectedFile']['error'] > 0){
			echo json_encode(
				['error' => 'An error ocurred when uploading.']);
		}
		if(!getimagesize($_FILES['SelectedFile']['tmp_name'])){
			echo json_encode(
				['error' => 'Please ensure you are uploading an image.']);
		}
		if($_FILES['SelectedFile']['type'] != 'image/png'
			&& $_FILES['SelectedFile']['type'] != 'image/jpeg'){
			echo json_encode(
				['error' => 'Unsupported filetype uploaded.']);
		}
		if($_FILES['SelectedFile']['size'] > 500000){
			echo json_encode(
				['error' => 'File uploaded exceeds maximum upload size.']);
		}

		if(!move_uploaded_file($_FILES['SelectedFile']['tmp_name'], 'upload/'
			. $_FILES['SelectedFile']['name'])){
			echo json_encode(
				['error' => 'Error uploading file']);
		}
		echo json_encode(["ok" => $_FILES['SelectedFile']['name']]);
	}
}