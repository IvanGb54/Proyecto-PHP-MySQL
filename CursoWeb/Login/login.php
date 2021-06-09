<?php

if(isset($_POST['btn-Log'])){
	
	$userId = $_POST['userId'];
	$psw = $_POST['pass']; 
	
	if($userId!="" && $psw!=""){	
	
		require("conexion.php");
		
		$sql = "SELECT * FROM usuario WHERE Usu_cedula = '$userId' AND Usu_clave ='$psw'";		
		$numfilas = mysqli_num_rows($conexion->query($sql));
		
		if($numfilas==1){	
						
			$sqlperfil = "SELECT * FROM Usuario WHERE Usu_cedula = '$userId'";			
			
			$response = $conexion->query($sqlperfil);
			$info = $response -> fetch_assoc(); 			
			
			if($info['Usu_tipo']=="Admin"){
				
				echo('<script> alert("Admin")</script>');
				header('location:../recepcionista.php');
				
			}else if($info['Usu_tipo']=="Recepcionista"){
				
				header('location:../recepcionista.php');
				
			}
			
			session_start();
			$_SESSION['Usuario'] = $info['Usu_nombre']." ".$info['Usu_apellido'];
			$_SESSION['Tipo-usuario'] = $info['Usu_tipo'];
			$_SESSION['id'] = $info['Usu_cedula'];
				
			
		}else{
			echo "<script>alert(\"Usuario y/o contraseña incorrectos.\");window.location='../login-form-v1/Login_v1/login.html';</script>";
			exit;
		}
		
	}
}

?>