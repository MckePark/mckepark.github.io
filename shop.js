$(document).ready(function(){
$("#text1").hide();
$("#text2").hide();
$("#text3").hide();
	$("#img1").hover(function(){
	    $("#text1").show();
	    }, function(){
	    $("#text1").hide();
	});
	$("#img2").hover(function(){
	    $("#text2").show();
	    }, function(){
	    $("#text2").hide();
	});
	$("#img3").hover(function(){
	    $("#text3").show();
	    }, function(){
	    $("#text3").hide();
	});
});