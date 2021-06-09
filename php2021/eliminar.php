<?php

if(!empty($_GET)){
	
	include "conexion.php";
	
	$sql = "DELETE FROM Encomiendas WHERE Enc_id=".$_GET["Enc_id"];
	$query = $conexion->query($sql);
	if($query!=null){
		print "<script>alert(\"Eliminado exitosamente.\");window.location='../CursoWeb/recepcionista.php';</script>";
	}else{
		print "<script>alert(\"No se pudo eliminar.\");window.location='../CursoWeb/recepcionista.php';</script>";

	}
	
}

?>