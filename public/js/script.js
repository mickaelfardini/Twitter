$(document).ready(function () {
	$("#submitRegister").click(function() {
		$.post("?page=register&action=Register",
			$("#formRegister").serializeArray(),
			function(data) {
				var obj = JSON.parse(data);

				$.each(obj, function(key, value) {
					console.log('Key : ' + key + ' === Value : ' + value);
				});
			});
	});
});