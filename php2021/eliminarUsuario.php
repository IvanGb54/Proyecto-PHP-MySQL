<?php

if(!empty($_GET)){
	
	require "conexion.php";
	
    SESSION_START();
	if($_SESSION["id"]===$_GET['id']){
		echo('<script> alert("No puedes eliminarte a ti mismo");window.location="../CursoWeb/admin.php";</script>');
		exit;
	}else{
	$sql = "DELETE FROM Usuario WHERE Usu_cedula=".$_GET["id"];
	$query = $conexion->query($sql);
	if($query!=null){
		print "<script>alert(\"Eliminado exitosamente.\");window.location='../CursoWeb/admin.php';</script>";
	}else{
		print "<script>alert(\"No se pudo eliminar.\")</script>";

	}
		// echo($_SESSION["id"]);
	}
}

?>