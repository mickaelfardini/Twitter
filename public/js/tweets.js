$(document).ready(function () {

	var lasttweet = 0;
	$.get("?page=tweet&action=getTweet")
	.done((data) => {
		var obj = JSON.parse(data);

		$.each(obj, (key, value) => {
			lasttweet = value.id_tweet;
			$("#timeline").prepend(
				'<li class="tweet list-group-item">'
				+ '<a href="/Twitter/profile/'
				+ value.username + '">@' + value.username + '</a><br>'
				+ value.content_tweet + 
				'</li>');
		});
	})
	.fail((err) => {
		console.error(err);
	})
	// Tweet recuperation
	setInterval(function() {
		$.post("?page=tweet&action=getLastTweet",
			{id_tweet: lasttweet},
			function(data) {
				var obj = JSON.parse(data);
				$.each(obj, (key, value) => {
					lasttweet = value.id_tweet;
					$("#timeline").prepend(
						'<li class="tweet list-group-item">'
						+ '<a href="/Twitter/profile/'
						+ value.username + '">@' + value.username + '</a><br>'
						+ value.content_tweet + 
						'</li>');
				});
			});
	}, 5000);

	// Gestion du nombre de caracteres
	$("#myTweet").keyup(() => {
		var countChr = 140 - $("#myTweet").val().length;
		if (countChr <= 0) {
			$("#charLeft").css("color", "red");
			$("#charLeft").html(countChr + " carateres !");
			return 0;
		}
		$("#charLeft").html(countChr + " carateres restants.");
		$("#charLeft").css("color", "");
	});

	// Envoi du tweet
	$("#submitTweet").click((e) => {
		e.preventDefault();
		$.post("?page=tweet&action=postTweet",
			{content: $("#myTweet").val()})
		.done((data) => {
			var obj = JSON.parse(data);
			$.each(obj, (key, value) => {
				if (key == "error") {
					$("#charLeft").html(value);
					$("#charLeft").css("color", "red");
				}
			});
			// $("#nbTweets") = IndexController::countTweetAction()
		});
	});
});