$(document).ready(function(){
	$(".item").find("review").text().hide();
	$(".item").hover(function(){
		$(this).find("review").text().show();
		}, function(){
		$(this).find("review").text().hide();
	});
});