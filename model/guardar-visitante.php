<?php  

	require_once('../model/config.php');
	/*require_once('sesion.php');*/

	$identificacion 	 = $_POST['identificacion'];
	$tipo_identificacion = $_POST['tipo_identificacion'];
	$nombre        		 = $_POST['nombre'];
	$apellido   		 = $_POST['apellido'];
	$celular     		 = $_POST['celular'];
	$correo 			 = $_POST['correo'];
	$placa   			 = $_POST['placa'];
	
	if (i) {
		# code...
	}
	try {
		//Conexión
		$conexion = mysql_connect($server,$username,$password);
		mysql_select_db($database);

		//Verificar que el Nombre del Registro no Exista en la BD
		$query= "SELECT identificacion FROM visitantes where identificacion = '$identificacion'";
		$resultado = mysql_query($query,$conexion);
		$num_filas = mysql_num_rows($resultado);
		    
	    if($num_filas > 0){
			echo"2"; 
		}else{

			//ejecutar query. 
				$query = "INSERT INTO visitantes (identificacion,id_tipoIdentificacion,nombre,apellido,celular,correo,id_estadoVisitante,numPlacaCarro) VALUES('$identificacion','$tipo_identificacion','$nombre','$apellido','$celular','$correo',1,'$placa')" or die("Error in the consult.." . mysqli_error($query)); 
			    $resultado = mysql_query($query,$conexion);
		}
	} catch (Exception $e) {
		echo $e;		
	}
?>