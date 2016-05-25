$(document).ready(function(){
	$('#msj1 , #msj2 , #form_registrar').hide();


$('#clave , #clave2').keyup(function(){

	compararClave($('#clave').val(),$('#clave2').val());

});

$('#registrarse').click(function(){
//alert();



$('#form_login').hide();
$('#form_registrar').fadeIn();



});
$('#b_registrar').click(function(){

this.ruta=$('#ruta').val()+"usuario/usuario/registrar";

	//this.r=$('#ruta').val()+"inicio";
	//window.location.href = this.r;

	if($("#correo").val().indexOf('@', 0) == -1 || $("#correo").val().indexOf('.', 0) == -1) {
            alert('Verifica el correo. Forma correcta ejemplo@ejemplo.com');
            $("#correo").focus();
            return false;
        }else
       	if ($("#nombre").val()== 0) {
       		alert('Campo nombre vacio.');
            $("#nombre").focus();
            return false;
        }else
       	if ($("#apellido").val()== 0) {
       		alert('Campo apellido vacio.');
            $("#apellido").focus();
            return false;
        }else
       	if ($("#clave").val()== 0) {
       		alert('Campo clave vacio.');
            $("#clave").focus();
            return false;
        }
        else
       	if ($("#clave2").val()== 0) {
       		alert('Campo clave vacio, confirma la clave.');
            $("#clave2").focus();
            return false;
        }
       	else
       	{
		$.ajax({
			url:this.ruta,
			type: 'POST',
			data:$('#form_registrar').serialize(),
			success:function(respuesta){
				if (respuesta == 1) {
				alert("El correo se encuentra en uso por otro usuario.");
				$('#correo').focus();
				}else
				if (respuesta == 2) {
				alert("Registro Exitoso.");
				limpiar();
				}else
				if (respuesta == 0) {
				alert("No se pudo realizar el registro.");
				}
			}
			});
		}


});
$('#m_login').click(function(){
//alert();

$('#form_login').fadeIn();
$('#form_registrar').hide();



});

$('#b_ingresar').click(function(){
	this.ruta=$('#ruta').val()+"usuario/usuario/ingresar";
	

		if($("#correo_i").val().indexOf('@', 0) == -1 || $("#correo_i").val().indexOf('.', 0) == -1) {
            alert('Verifica el correo. Forma correcta ejemplo@ejemplo.com');
            $("#correo").focus();
            return false;
        }else
       	if ($("#clave_i").val()== 0) {
       		alert('Campo contraseña vacio.');
            $("#clave_i").focus();
            return false;
        }else
        {

        	$.ajax({
        		url: this.ruta,
        		type:'POST',
        		data:$('#form_login').serialize(),
        		success:function(respuesta){
        			
        			if(respuesta == 1){
        				alert('Correo no registrado.');
        				$("#correo_i").focus();
        			}else
        			if(respuesta == 2){
        				this.menu=$('#ruta').val()+"menuPrincipal";
        				window.location.href=this.menu;
        			}else
        			if(respuesta == 3){
        				alert('Verifica los datos ingresados.');
        			}


        		}
        	});
        }
});

});

function limpiar(){
	$('#msj1 , #msj2').hide();

	
	$('#correo').val('');
	$('#cedula , #nombre, #apellido, #clave , #clave2').val('');

}

function compararClave(clave, clave2){

		if ($('#clave').val().length == 0 ){

		}
		else
			if ($('#clave2').val().length == 0 ){
				$('#msj1').hide();
				$('#msj2').hide();

		}
		else
			if (clave != clave2) {
			
			$('#msj1').hide();
			$('#msj2').fadeIn();
		}
		else{
			

			$('#msj2').hide();
			$('#msj1').fadeIn();
		}

}