$(document).ready(function () {
	$("#searchHome").keyup(function() {
		var searchVal = $("#searchHome").val();
		$.post("?page=search&action=search",
			{search: searchVal})
		.done((data) => {
			$("#searchComp").html("");
			$("#searchComp").fadeIn();
			$("#searchComp").append("<ul class='list-group'>");
			var obj = JSON.parse(data);
			$.each(obj[0], function(k, v) {
				$("#searchComp").append("<li class='list-group-item'>"+
					"<img class='icon-tweet' src='"
					+v.avatar+"'>"
					+"<a href='/Twitter/profile/"+v.username+"'>"
					+"@" + v.username + "</a></li>");
			});
			$.each(obj[1], function(k, v) {
				$("#searchComp").append("<li class='list-group-item'>"+
					"<a href='/Twitter/tags/"+v.name_hashtag+"'>"
					+ "#" + v.name_hashtag + "</a></li>");
			});
			$("#searchComp").append("</ul>");
		});
	});

	$("#formSearch").submit(function(e) {
		e.preventDefault();
		var search = $("#searchComp li")[0].textContent;
		if (search.slice(0,1) == "@") {
			location.href = "/Twitter/profile/" + search.substring(1, search.length);
		} else if (search.slice(0,1) == "#") {
			location.href = "/Twitter/tags/" + search.substring(1, search.length);
		}
	});
	// $("#searchComp").on("click", "li", function() {
	// 	$("#searchComp").fadeOut();
	// 	var usr = this.textContent;
	// 	usr = usr.substring(1, usr.length);
	// 	location.href = "/Twitter/search/" + usr; 
	// });
});