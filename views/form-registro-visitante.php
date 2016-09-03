<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ingreso Visitante</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<div class="container">
		<div class="row">
				<h1 class="text-center">Formulario Registro Visitante</h1><br>
		<div class="col-md-4">
		</div>	
			<div class="col-md-4">
				<div class="form-group">
					<label for="txtIdenficacion" class="sr-only">No. Identificación</label>
					<input type="number" name="" id="txtIdenficacion" class="form-control" placeholder="No. Identificación">
				</div>
				<div class="form-group">
					<label for="cbxtipoIdentificacion" class="sr-only">Tipo Identificación</label>
					<select name="" id="cbxtipoIdentificacion" class="form-control">
						<option value="">Tipo de Documento</option>
					</select>
				</div>	
				<div class="form-group">	
					<label for="txtNombre" class="sr-only">Nombre</label>
					<input type="text" name="" id="txtNombre" class="form-control" placeholder="Nombre">
				</div>
				<div class="form-group">
					<label for="txtApellido" class="sr-only">Apellido</label>
					<input type="text" name="" id="txtApellido" class="form-control" placeholder="Apellido">
				</div>			
				<div class="form-group">
					<label for="txtCelular" class="sr-only">Celular</label>
					<input type="number" name="" id="txtCelular" class="form-control" placeholder="Celular">
				</div>
				<div class="form-group">
					<label for="txtCorreo" class="sr-only">Correo</label>
					<input type="mail" name="" id="txtCorreo" class="form-control" placeholder="Correo Eléctronico">
				</div>
				<div class="form-group">
					<label for="txtPlacaVehiculo" class="sr-only">Placa Vehículo</label>
					<input type="text" name="" id="txtPlacaVehiculo" class="form-control" placeholder="Número Placa del Vehículo">
				</div>
						<input type="button" id="btnGuardarVisitante" value="Guardar Visitante" class="btn btn-primary">
			</div>
			
		</div>
	</div>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/ingresar-visitante.js"></script>
</body>
</html>