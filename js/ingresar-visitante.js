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

})