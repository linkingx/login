<!-- ***********************************************************************
 	 *	Autor: Gustavo Ramos Gonzalez
 	 *		   isc.gusrg@gmail.com
 	 *	Fecha: 09 marzo 2021
 	 *	Nota: Archivo de conexion ala BD
 	 *********************************************************************** -->
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "proyecto_login"; /*Nombre de la base de datos */

	// Crea la conexión
	$link = new mysqli($servername, $username, $password, $dbname);
	// Revisa si existe la conexión
	if ($link->connect_error) {
		die("Connection failed: " . $link->connect_error);
	}

	$link->set_charset("utf8");
?>