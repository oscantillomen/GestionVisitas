<?php  

	require_once('../model/config.php');

	$identificacion 	 = $_POST['identificacion'];
	$tipo_identificacion = $_POST['tipo_identificacion'];
	$nombre        		 = $_POST['nombre'];
	$apellido   		 = $_POST['apellido'];
	$celular     		 = $_POST['celular'];
	$correo 			 = $_POST['correo'];
	$placa   			 = $_POST['placa'];
	
	if (isset($identificacion) && isset($nombre) && !ctype_space($nombre) && isset($apellido) && !ctype_space($apellido) && isset($celular)&& isset($correo) && !ctype_space($correo) ) {
			if ($result = mysqli_query($link, "SELECT * FROM visitantes WHERE identificacion = '$identificacion'")) {

			    /* determinar el número de filas del resultado */
			    $row_cnt = mysqli_num_rows($result);
			    if ($row_cnt > 0) {
			    	echo 2;
				}else{
					$result = mysqli_query($link, "INSERT INTO visitantes (identificacion,id_tipoIdentificacion,nombre,apellido,celular,correo,id_estadoVisitante,numPlacaCarro) VALUES('$identificacion','$tipo_identificacion','$nombre','$apellido','$celular','$correo',1,'$placa')");
			    	echo 1;
				}
			}
		}else{
			echo 3;
		}
?>