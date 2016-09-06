<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ingreso Visitante</title>
        <link rel="stylesheet" href="../Diseño/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Diseño/MiEstilo2.css">
     
    </head>
    <body>         
        <div class="container">

            <!-- Trigger the modal with a button -->
            <button id="agregar" type="button" class="btn btn-default active" data-toggle="modal" data-target="#myModal"><span class=" glyphicon glyphicon-floppy-disk"></span></button>
            <button type="button" class="btn btn-danger active"><span class=" glyphicon glyphicon-remove"></span></button>
            <button type="button" class="btn btn-default active" id="modificar"><span class=" glyphicon glyphicon-wrench"></span></button>

            <!-- -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content" >
                        <div class="modal-header" id="headermodal">
                            <button type="button" class="close" data-dismiss="modal"> X</button>
                            <h4 class="modal-title"><span class="glyphicon glyphicon-floppy-disk"></span> Registro de Visitante</h4>
                        </div>
                        <div class="modal-body" id="bodymodal">
                            <div class="row">


                                <form action="#" id="form-ingresar-visitante">
                    <div id="identificacion" class="form-group">
                        <label for="txtIdentificacion" class="sr-only">No. Identificación</label>
                        <input type="number" name="" id="txtIdentificacion" class="form-control" placeholder="No. Identificación" required>
                    </div>
                    <div id="error" class="form-group has-error text-center oculto"><label class="control-label" for="inputError1">Visitante Existente</label></div>
                    <div class="form-group">
                        <label for="cbxtipoIdentificacion" class="sr-only">Tipo Identificación</label>
                        <select name="" id="cbxtipoIdentificacion" class="form-control">
                            
                        </select>
                        <label id="lbltipo" for="" class="inputError1 hidden">Escoja Tipo de Documento</label>
                    </div>  
                    <div class="form-group">    
                        <label for="txtNombre" class="sr-only">Nombre</label>
                        <input type="text" name="" id="txtNombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="txtApellido" class="sr-only">Apellido</label>
                        <input type="text" name="" id="txtApellido" class="form-control" placeholder="Apellido"  required>
                    </div>          
                    <div class="form-group">
                        <label for="txtCelular" class="sr-only">Celular</label>
                        <input type="number" name="" id="txtCelular" class="form-control" placeholder="Celular" required>
                    </div>
                    <div class="form-group">
                        <label for="txtCorreo" class="sr-only">Correo</label>
                        <input type="email" name="" id="txtCorreo" class="form-control" placeholder="Correo Eléctronico">
                    </div>
                    <div class="checkbox ">
                        <label>
                            <input type="checkbox" id="vehiculo">Visitante con Vehículo
                        </label>
                    </div>
                    <div class="form-group oculto" id="divplaca">
                        <label for="txtPlacaVehiculo" class="sr-only">Placa Vehículo</label>
                        <input type="text" name="" id="txtPlacaVehiculo" class="form-control" placeholder="Número Placa del Vehículo">
                    </div>
                        <div class="modal-footer" id="footermodal">
                           <input type="submit" id="btnGuardarVisitante" value="Guardar Visitante" class="btn btn-primary">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                </form>


                               </div>
                        </div>
                            
              

                </div>
            </div>

        </div>
 

        </div>

        <script src="../Diseño/jquery-2.2.1.js"></script>
        <script src="../Diseño/js/bootstrap.min.js"></script>
        <script src="../Diseño/ingresar-visitante.js"></script>
      
    </body>
</html>