<?php
	$var1 = $_POST["usuario"];
	$var2 = $_POST["contrasena"];

	if($var1 == "gus" and $var2 =="123")
	{
		echo "se encontro el usuario";
		header('Location: '."inicio.php"); 
	}
	else 
	{
		echo "usuario no encontrado";
		?>
		<a href="index.php">Regresar</a>
		<?php
	}		
?>