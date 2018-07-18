$(document).ready(function () {
	// Register Button
	$("#submitRegister").click(function() {
		$.post("?page=register&action=register",
			$("#formRegister").serializeArray(),
			function(data) {
				var obj = JSON.parse(data);
				$.each(obj, function(key, value) {
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
					if (key == "signin" && value == "ok") {
						location.href = "./";
					}
				});
			});
	});
});