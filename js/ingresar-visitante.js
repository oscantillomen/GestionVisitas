$(document).ready(function(){
	$.ajax({
        url     :"../model/cargar-tipo-identificacion.php",
        dataType:"json",
        type    :"post",
        success:function(datos) {
          for (var i = 0; i <= datos.length - 1; i++) {
              $('#cbxtipoIdentificacion').append("<option value=" + datos[i].id + ">" + datos[i].identificacion + "</option>");
          };
        },
        error:function() {
          
          console.log('Something went wrong', status, err );
          
        }
      });

	$("#form-ingresar-visitante").submit(function(){

		$.ajax({
          url     : "../model/guardar-visitante.php",
          type    : 'post',
          data:{ 
            identificacion 		: $('#txtIdentificacion').val(),
            tipo_identificacion : $('#cbxtipoIdentificacion').val(),
            nombre		        : $('#txtNombre').val(),
            apellido		    : $('#txtApellido').val(),  
            celular		        : $('#txtCelular').val(),
            correo				: $('#txtCorreo').val(),
            placa		        : $('#txtPlacaVehiculo').val(),
          },
          success:function(datos) {
          	if (datos==2) {
          		$("#identificacion").addClass("has-error");
          		$("#identificacion").focus();
          		/*$("#error").removeClass();*/
          		$('#error').html('<strong>Verifique que Todos los Campos Estén Llenos</strong>');
          	}else{
          		$("#identificacion").removeClass("has-error");
            	alert("Visitante Registrado Exitosamente");
            	$("#error").hide();
        	}
          },
          error:function() {
            alert("El servidor no se encuentra disponible.");
          }
      });
	})



})