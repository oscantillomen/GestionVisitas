<?php  

	/* Inicia la sesión, función utilizada para mantener 
la sesión y variables de sesión para que no se pierdan 
sus valores al navegar a través de las páginas del sitio */
//session_start();
$server = "localhost"; 
$database = "gestionvisitas"; //nombre de la base de datos
$username = "root"; // nombre de usuario con el que se conecta a la base de datos
$password = ""; // contraseña

//Conexión
		/*$conexion = mysql_connect($server,$username,$password);
		mysql_select_db($database);*/

date_default_timezone_set("America/Bogota");

?>