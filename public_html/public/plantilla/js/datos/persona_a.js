$(document).on("ready",inicio);

function inicio(){
	$('#nombre, #apellido, #telefono, #correo').attr('disabled','disabled');
	$('#guardar, #modificar, #eliminar, #cancelar').hide();

$('#cancelar').click(function(){

	limpiar();
	

});

$("form").submit(function (event){

	event.preventDefault();

		$.ajax({
			url:$("form").attr("action"),
			type:$("form").attr("method"),
			data:$("form").serialize(),
			success:function(respuesta){
				if (respuesta == 2){
					$('#consultar').hide();
					$('#nacionalidad, #cedula').attr('disabled','disabled');
					$('#nombre, #apellido, #telefono, #correo').removeAttr('disabled');
					$('#guardar,  #cancelar').fadeIn();

				}
				else
					if (respuesta == 1){

						alert("El Usuario Esta Registrado. Consultar el Catalogo");
					}

			}
		});
	});



$(".tabla").hide();

$("#catalago").click(function(){

	$(".tabla").fadeIn();
	$(".gestionar").hide();
});
$("#nuevo").click(function(){

	$(".gestionar").fadeIn();
	$(".tabla").hide();
});

$("#guardar").click(registrar);

}


function registrar(){
$('#nacionalidad, #cedula').removeAttr('disabled');

	$.ajax({
		url:"http://localhost/proyectoD/personaP/registrar",
		type:"POST",
		data:$("#form-2 , #form-1").serialize(),
		success:function(respuesta){
			if (respuesta == 1){
				alert("Registro exitoso.");
				limpiar();
				}
			else{
				alert("No se realizo el registro.");
				limpiar();
				}
		}
	});
}

function limpiar(){
	$('#guardar, #modificar, #eliminar, #cancelar').hide();
	$('#nacionalidad, #cedula').removeAttr('disabled','disabled');
	
	$('#nombre, #apellido, #telefono, #correo, #cedula').val('');
	$('#nacionalidad').val('V');
	$('#nombre, #apellido, #telefono, #correo').attr('disabled','disabled');
	$('#consultar').fadeIn();
}