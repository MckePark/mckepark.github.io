$(document).ready(function(){
	$(".review").hide();
	 $("#img1").hover(function(){
 	    $("#review1").show();
 	    }, function(){
 	    $("#review1").hide();
 	});
 	$("#img2").hover(function(){
 	    $("#review2").show();
 	    }, function(){
 	    $("#review2").hide();
 	});
 	$("#img3").hover(function(){
 	    $("#review3").show();
 	    }, function(){
 	    $("#review3").hide();
 	});
	});
});