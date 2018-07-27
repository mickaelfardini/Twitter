$(document).ready(function () {

	var lasttweet, autocomplete = 0;
	var ACuser = "";
	$.get("?page=tweet&action=getTweet")
	.done((data) => {
		var obj = JSON.parse(data);

		$.each(obj, (key, value) => {
			lasttweet = value.id_tweet;
			$("#timeline").prepend(
				'<li class="tweet list-group-item" value="'+value.username+'"'
				+' idTweet="'+lasttweet+'">'
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
						'<li class="tweet list-group-item" value="'+value.username+'"'
						+' idTweet="'+lasttweet+'">'
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
		var idTweet = $(this)[0].attributes["idTweet"].value
		if ("@"+name == $("#myUsername").html()) {
			return false;
		}
		$(this).append('<p id="btnTwt"></p>');
		$("#btnTwt").html('<a class="btn" id="btnPrvMsg" value="'+name+'" '
			+'data-toggle="modal" data-target="#messageToModal">'
			+'<img src="/Twitter/public/img/glyphicons/'
			+'glyphicons-245-conversation.png">'
			+'</a>');
		$("#btnTwt").append('<a class="btn" id="btnFollow" value="'+name+'">'
			+'<img src="/Twitter/public/img/glyphicons/'
			+'glyphicons-152-new-window.png">'
			+'</a>')
		$("#btnTwt").append('<a class="btn" id="btnRT" value="'+idTweet+'">'
			+'<img src="/Twitter/public/img/glyphicons/'
			+'glyphicons-230-retweet-2.png">'
			+'</a>')
		$("#btnTwt").append('<a class="btn" id="btnLike" value="'+idTweet+'">'
			+'<img src="/Twitter/public/img/glyphicons/'
			+'glyphicons-20-heart-empty.png">'
			+'</a>')

		$("#btnPrvMsg").click(function() {
			$.post("?page=message&action=private",
				{username: name})
			.done((data) => {
				$("#msgToModal").html(data);
			});
		});

		$("#btnFollow").click(function() {
			$.post("?page=profile&action=follow",
				{username: name})
			.done((data) => {
			});
		});

		$("#btnRT").click(function() {
			$.post("?page=profile&action=retweet",
				{id_tweet: idTweet})
			.done((data) => {
			});
		});

		$("#btnLike").click(function() {
			$.post("?page=profile&action=like",
				{id_tweet: idTweet})
			.done((data) => {
			});
		});
	});

	$("#timeline").on("mouseleave", "li", function() {
		$("#btnTwt").remove();
	});

	$("#upImg").click(function() {
		$("#customFile").click();
	});

	$("#customFile").change(function() {
		$("#imgForm").submit();
	});
	$("#imgForm").submit((e) => {
		var file = $("#customFile")[0].files[0];
		e.preventDefault();
		var xmlhttp = new XMLHttpRequest();
		var xh = new FormData();
		xh.append("SelectedFile", file);
		xmlhttp.open("POST", "?action=upload", true);
		xmlhttp.onreadystatechange = function () {
			if (this.readyState === 4 && this.status === 200) {
				var resp = JSON.parse(this.response);
				var txt = $("#myTweet").html();
				$.each(resp, function(k, v) {
						if (k == "ok") {
							$("#myTweet").html(txt + " $" + resp.name);
						}
				});
			}
		};
		xmlhttp.send(xh);
	});
});