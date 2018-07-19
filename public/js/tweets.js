$(document).ready(function () {
	// Tweet recuperation
	setInterval(function() {
		$.get("?page=tweet&action=getTweet",
			function(data) {
				var obj = JSON.parse(data);
				if (obj['id'] != lasttweet['id']) {
					$("#lasttweet").removeAttr("id");
					$("#tweets").prepend("<div id='lasttweet' class='tweet'>" +
						obj['content'] + "</div>");
				}
			});
	}, 5000);
});