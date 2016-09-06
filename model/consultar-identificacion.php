<?php  

	require_once('../model/config.php');
	require_once('../bd/adodb5/adodb.inc.php');
	$identificacion = $_POST['identificacion'];
	try{
	  	$conexion = mysql_connect($server,$username,$password);
		mysql_select_db($database);

		//Verificar que el Nombre del Registro no Exista en la BD
		$query = "SELECT identificacion FROM visitantes where identificacion = '$identificacion'";
		$resultado = mysql_query($query,$conexion);
		$num_filas = mysql_num_rows($resultado);
	   echo json_encode($identificaciones);
	}catch (Exception $e) 
	{
		echo $e;
	}
?>