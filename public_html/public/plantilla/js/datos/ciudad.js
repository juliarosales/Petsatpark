$(document).ready(function(){
$(".tabla").hide();

$("#catalag").click(function(){

	$(".tabla").fadeIn();
	$(".gestionar , .nota").hide();
});

$("#nuevo").click(function(){
	$(".gestionar , .nota").fadeIn();
	$(".tabla").hide();
});



});