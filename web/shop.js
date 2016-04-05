$(document).ready(function(){
	$(".review").hide();
	$(".item").click(function(){
	     $(this).find(".review").toggle();
	});
}); 