<?php

	$conexion = new mysqli('localhost', 'root', '1234', 'distribucionesgarcia');
	if ($conexion->connect_errno) {
		echo "Lo sentimos, este sitio web está experimentando problemas.";
		exit;
	}
	
?>