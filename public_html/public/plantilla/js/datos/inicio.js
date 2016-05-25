$(document).ready(function(){


$(".proyecto").click(function(){

$(".ventana").load("proyecto.php");
});

$(".proyecto_a").click(function(){

$(".ventana").load("proyecto_a.php");
});


$(".inicio").click(function(){

$(".ventana").empty();


});
$(".localizacion").click(function(){

$(".ventana").load("localizacion.php");
});

$(".persona").click(function(){

$(".ventana").load("persona.php");
});



});