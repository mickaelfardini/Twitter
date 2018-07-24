$(document).ready(function () {
	// Register Button
	$("#submitRegister").click(function(e) {
		e.preventDefault();
		$.post("?page=register&action=register",
			$("#formRegister").serializeArray(),
			function(data) {
				var obj = JSON.parse(data);
				$.each(obj, function(key, value) {
					if (key == "error") {
						$("#error").html(value);
					}
					if (key == "Signup" && value == "Valid") {
						location.href = "/Twitter/signin";
					}
				});
			});
	});
	
	// Login Button
	$("#submitSignin").click(function(e) {
		e.preventDefault();
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

		//Log out Button
	$("#logout").click(function() {
		$.get("?action=Logout")
		.done(() => {
			location.href = "/Twitter/signin";
		});
	});

	$("#msgLink").click(function() {
		$.get("?page=message")
		.done((data) => {
			$("#msgModal").html(data);
		});
	});

	$("#v-pills-tab").on('click', 'a' , function(obj){
    	// obj.target.id
    	$("#v-pills-" + obj.target.innerText).html("");
    	$.post("?page=message&action=getMessage",
    		{username: obj.target.innerText})
    	.done((data) => {
    		var res = JSON.parse(data);
    		$.each(res[0], (k, v) => {
    			// console.log(v);
    			$("#v-pills-" + obj.target.innerText).append("<b>"+v.sender
    				+ " : </b>"+ v.content_message + "<br>");
    		});
    	});
	});
});