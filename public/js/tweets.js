$(document).ready(function () {

	var lasttweet, autocomplete = 0;
	var ACuser = "";
	$.get("?page=tweet&action=getTweet")
	.done((data) => {
		var obj = JSON.parse(data);

		$.each(obj, (key, value) => {
			lasttweet = value.id_tweet;
			$("#timeline").prepend(
				'<li class="tweet list-group-item" value="'+value.username+'">'
				+ '<img src="'+value.avatar+'" class="icon-tweet">'
				+ '<a href="/Twitter/profile/'
				+ value.username + '">@' + value.username + '</a><br>'
				+ value.content_tweet
				+ '</li>');
		});
	})
	.fail((err) => {
		console.error(err);
	})
	// Tweet recuperation
	function getLastTweet() {
		$.post("?page=tweet&action=getLastTweet",
			{id_tweet: lasttweet},
			function(data) {
				var obj = JSON.parse(data);
				$.each(obj, (key, value) => {
					lasttweet = value.id_tweet;
					$("#timeline").prepend(
						'<li class="tweet list-group-item">'
						+ '<img src="'+value.avatar+'" class="icon-tweet">'

						+ '<a href="/Twitter/profile/'
						+ value.username + '">@' + value.username + '</a><br>'
						+ value.content_tweet +
						+ '</li>');
				});
			});
	}
	setInterval(getLastTweet, 5000);

	function autoComplete(e) {
		if (e.key == " ") {
			autocomplete = 0;
			return 1;
		}
		if (e.key == "Backspace") {
			ACuser = ACuser.substring(0, ACuser.length - 1);
		}
		if (e.key.length == 1 && e.key != "@") {
			ACuser += e.key;
		}
		if (!isNaN(ACuser[0])) {
			ACuser = ACuser.slice(0, 1);
		}

		$.post("?page=profile&action=getFollowers",
			{search: ACuser})
		.done((data) => {
			$("#autocomp").html("");
			$("#autocomp").fadeIn();
			$("#autocomp").append("<ul class='list-group'>");
			var obj = JSON.parse(data);
			$.each(obj[0], function(k, v) {
				$("#autocomp").append("<li class='list-group-item'>"+
					"<img class='icon-tweet' src='"
					+v.avatar+"'>@" + v.username + "</li>");
			});
			$("#autocomp").append("</ul>");
		});
	}

	$("#autocomp").on("click", "li", function() {
		$("#autocomp").fadeOut();
		console.log(this)
		$("#myTweet").val($("#myTweet").val().replace("@"+ACuser, this.textContent + " "));
		ACuser = "";
		autocomplete = 0;
	});

	// Gestion du nombre de caracteres
	$("#myTweet").keyup((e) => {
		var twt = $("#myTweet").val();
		// console.log($("#myTweet").val().match(/@([a-zA-Z0-9]+)/));
		if(twt[twt.length-1] == "@" || autocomplete == 1) {
			autocomplete = 1;
			autoComplete(e);
		}
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
	$("#submitTweet").click(() => {
		$.post("?page=tweet&action=postTweet",
			{content: $("#myTweet").val()})
		.done((data) => {
			getLastTweet();
			$("#myTweet").val("");
			$("#charLeft").html("140 caracteres restants.");
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

	$("#timeline").on("mouseenter", "li", function(){
		var name = $(this)[0].attributes["value"].value
		if ("@"+name == $("#myUsername").html()) {
			return false;
		}
		$(this).append('<p id="btnTwt"></p>');
		$("#btnTwt").html('<span type="button" id="btnPrvMsg" class="glyphicon glyphicons-conversation btn btn-default" value="'
				+ name +'" '
				+ 'data-toggle="modal" data-target="#messageToModal">message'
				+ '</span>');
		$("#btnTwt").append('<p>'
			+ '<span type="button" id="btnFollow" class="glyphicon glyphicons-conversation btn btn-default" value="'
				+ name +'" '
				+ '>follow'
				+ '</span></p>')
	
		$("#btnTwt").click(function() {
			$.post("?page=message&action=private",
				{username: name})
			.done((data) => {
			$("#msgToModal").html(data);
		});

		$("#btnFollow").click(function() {
			$.post("?page=profile&action=follow",
				{username: name})
			.done((data) => {
				
		});
	});
	});

	$("#timeline").on("mouseleave", "li", function() {
		$("#btnTwt").remove();
	});
});