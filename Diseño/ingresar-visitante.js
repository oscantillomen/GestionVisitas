$(document).ready(function(){
  $('#txtIdentificacion').focus();

  //Carga Tipos de Identificacion a cbxtipoIdentificacion
       cargarTipoIdentificacion();



  $("#form-ingresar-visitante").submit(function(){
      registrarVisitante();
  })

  $( '#vehiculo' ).on( 'change', function() {
    if( $(this).is(':checked') ){
        // Muestra Campo para la placa si el checkbox ha sido seleccionado
        $('#divplaca').show('slow');
    } else {
        // Oculta Campo para la placa si el checkbox ha sido deseleccionado
        $('#divplaca').hide('slow');
    }
});


function cargarTipoIdentificacion(){
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
}

function registrarVisitante(){
      $.ajax({
          url     : "../model/guardar-visitante.php",
          type    : 'post',
          data:{ 
            identificacion      : $('#txtIdentificacion').val(),
            tipo_identificacion : $('#cbxtipoIdentificacion').val(),
            nombre              : $('#txtNombre').val(),
            apellido            : $('#txtApellido').val(),  
            celular             : $('#txtCelular').val(),
            correo              : $('#txtCorreo').val(),
            placa               : $('#txtPlacaVehiculo').val(),
          },
          success:function(datos) {
            if (datos == 1) {
              $("#identificacion").removeClass("has-error");
              $("#error").hide('slow');
            }else if(datos == 2){
              $("#identificacion").addClass("has-error");
              $("#identificacion").focus();
              $('#error').show('fade');
            }else if(datos == 3){
              alert("Complete todos los campos");
            }
          },
          error:function() {
            alert("El servidor no se encuentra disponible.");
          }
      });
}


})