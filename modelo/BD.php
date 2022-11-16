<?php
	formulario($_POST['CEDULA'], $_POST['NOMBRE'], $_POST['APELLIDO'], $_POST['FECHA'], $_POST['USUARIO'], $_POST['CLAVE']);
     
	function formulario($CEDULA, $NOMBRE, $APELLIDO, $FECHA, $USUARIO, $CLAVE)
	{
		include 'conexion.php';
		$sentencia="INSERT INTO usuarios (CEDULA, NOMBRE, APELLIDO, FECHA, USUARIO, CLAVE) VALUES ('".$CEDULA."', '".$NOMBRE."', '".$APELLIDO."', '".$FECHA."', '".$USUARIO."', '".$CLAVE."')";
		$conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));


		echo '<script>';
			echo 'alert("Usuario creado exitosamente!!");';
			echo 'window.location.href="../index.html";';
		echo '</script>';

	}
