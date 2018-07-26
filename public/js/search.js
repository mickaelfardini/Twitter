$(document).ready(function () {
	$("#searchHome").keyup(function() {
		var searchVal = $("#searchHome").val();
		$.post("?page=search",
			{search: searchVal})
		.done((data) => {
			$("#searchComp").html("");
			$("#searchComp").fadeIn();
			$("#searchComp").append("<ul class='list-group'>");
			var obj = JSON.parse(data);
			$.each(obj[0], function(k, v) {
				$("#searchComp").append("<li class='list-group-item'>"+
					"<img class='icon-tweet' src='"
					+v.avatar+"'>@" + v.username + "</li>");
			});
			$.each(obj[1], function(k, v) {
				$("#searchComp").append("<li class='list-group-item'>"+
					"#" + v.name_hashtag + "</li>");
			});
			$("#searchComp").append("</ul>");
		});
	});
});