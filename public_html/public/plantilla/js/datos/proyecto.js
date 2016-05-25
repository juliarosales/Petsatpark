$(document).ready(function(){
$(".tabla").hide();

$(".catalogo").click(function(){

	$(".tabla").fadeIn();
	$(".gestionar").hide();
});
$(".gProyecto").click(function(){
	$(".gestionar").fadeIn();
	$(".tabla").hide();
});

});