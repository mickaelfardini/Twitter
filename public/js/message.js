$(document).ready(function () {
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