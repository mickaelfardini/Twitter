$(document).ready(function () {
	// Register Button
	$("#submitRegister").click(function() {
		$.post("?page=register&action=register",
			$("#formRegister").serializeArray(),
			function(data) {
				var obj = JSON.parse(data);
				$.each(obj, function(key, value) {
					if (key == "error") {
						$("#error").html(value);
					}
					if (key == "Signup" && value == "Valid") {
						location.href = "./signin";
					}
				});
			});
	});

	// Login Button
	$("#submitSignin").click(function() {
		$.post("?page=signin&action=signin",
			$("#formSignin").serializeArray(),
			function(data) {
				var obj = JSON.parse(data);
				$.each(obj, function(key, value) {
					if (key == "error") {
						$("#error").html(value);
					}
					if (key == "Signin" && value == "ok") {
						location.href = "/Twitter/";
					}
				});
			});
	});

	$("#submitTweet").click(() => {
		$.post("?page=tweet&action=postTweet",
			{content: $("#myTweet").val()})
		.done((data) => {
			// A faire next -> del div -> req last tweet -> anim ?
		})
		.fail((err) => {

		});
	});
});