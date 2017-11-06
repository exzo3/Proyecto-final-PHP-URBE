<?php
	if( $_POST['usuario']=='user' && $_POST['contrasena']=='1234' )
	{
		// Inicio la sesión
		session_start();
		
		// Declaro las variables de sesión
		$_SESSION['autentificado'] = true;
		$_SESSION['usuario'] = $_POST['usuario'];
		
		header("Location: cargando.php");
	}
	else
	{
		header("Location: error.php");
	}
?>