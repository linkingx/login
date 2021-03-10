<!-- ***********************************************************************
 	 *	Autor: Gustavo Ramos Gonzalez
 	 *		   isc.gusrg@gmail.com
 	 *	Fecha: 09 marzo 2021
 	 *	Nota: Archivo donde se recibe la peticion y se hace la consulta ala BD
 	 *********************************************************************** -->
<?php
	$var1 = $_POST["usuario"];
	$var2 = $_POST["contrasena"];

	/**
	Se incluye el archivo de conexión 
	**/ 
	include('conexion.php');
	/** 
	Se prepara la consulta a la BD
	**/
	$consulta ="SELECT * FROM usuarios WHERE usuario ='$var1' AND contrasena='$var2' ";
	$query = mysqli_query($link, $consulta);
	$fila  = mysqli_fetch_array($query);

	/**
	Si el resultado de la consulta es "TRUE" 
	**/
	if($fila)
	{
		echo "se encontro el usuario";
		header('Location: '."inicio.php"); 
	}
	/**
	Si es falsa 
	**/
	else 
	{
		echo "usuario no encontrado";
		?>
		<a href="index.php">Regresar</a>
		<?php
	}		
?>