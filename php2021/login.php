<?php

if(isset($_POST['login'])){
	
	$usu = $_POST['usuario'];
	$psw = MD5($_POST['contrasena']); // Encriptamos el valor ingresado para poder compararlo con la encropción guardada
	
	// Utilizo un condicional para evaluar que los campos no queden vacíos
	if($usu!="" && $psw!=""){	
	
		// Llamada al archivo de conexion
		require("conexion.php");
		
		// Cadena de consulta almacenada en una variable
		$sql = "SELECT * FROM usuario WHERE usuario = '$usu' AND clave ='$psw'";
		
		// Almaceno en una variable la cantidad de filas obtenidas luego de realizar la consulta
		$numfilas = mysqli_num_rows($conexion->query($sql));
		
		// Consulo la cantidad de filas obtenidas. 
		// Si estoy trabajando con Primary Key no debería de tener mas de un registro con los mismos valores, 
		// entonces $numfilas sería 0 sin registros o 1 con registro válido
		if($numfilas==1){
			header('location:productos.php');
		}else{
			// Muestro mensaje en Javascript y redirijo a la pagina productos
			print "<script>alert(\"Usuario y/o contraseña incorrectos.\");window.location='index.php';</script>";
			exit;
		}
		
	}
}

?>