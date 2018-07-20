$(document).ready(function () {

	$("#body").css("background-color", "#1da1f2");
	var lasttweet = 0;
	$.get("?page=tweet&action=getTweet")
	.done((data) => {
		var obj = JSON.parse(data);

		$.each(obj[0], (key, value) => {
			lasttweet = value.id_tweet;
			$("#timeline").prepend(
				'<li class="tweet list-group-item">'
				+ '<a href="/Twitter/user/'
				+ value.username + '">@' + value.username + '</a><br>'
				+ value.content_tweet + 
				'</li>')
		});
	})
	.fail((err) => {
		console.error(err);
	})
	// Tweet recuperation
	setInterval(function() {
		$.get("?page=tweet&action=getLastTweet",
			function(data) {
				var obj = JSON.parse(data);
				if (obj[0]['id_tweet'] != lasttweet) {
					lasttweet = obj[0]['id_tweet'];
					$("#timeline").prepend('<li class="tweet list-group-item">'
				+ '<a href="/Twitter/user/'
				+ obj[0].username + '">@' + obj[0].username + '</a><br>'
				+ obj[0].content_tweet + 
				'</li>');
				}
			});
	}, 5000);
});