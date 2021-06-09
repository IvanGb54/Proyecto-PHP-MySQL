<?php

if(!empty($_POST)){
	if(isset($_POST["Usu_cedula"]) &&isset($_POST["Usu_nombre"]) &&isset($_POST["Usu_apellido"]) &&isset($_POST["Usu_email"]) &&isset($_POST["Usu_clave"])&&isset($_POST["Usu_tipo"])){
		if($_POST["Usu_cedula"]!=""&& $_POST["Usu_nombre"]!=""&& $_POST["Usu_apellido"]!=""&& $_POST["Usu_email"]!=""&& $_POST["Usu_clave"]!=""&& $_POST["Usu_tipo"]!=""){
			include "conexion.php";
			
			$sql = "UPDATE usuario SET Usu_cedula=\"$_POST[Usu_cedula]\",Usu_nombre=\"$_POST[Usu_nombre]\",Usu_apellido=\"$_POST[Usu_apellido]\",Usu_email=\"$_POST[Usu_email]\",Usu_clave=\"$_POST[Usu_clave]\",Usu_tipo=\"$_POST[Usu_tipo]\" WHERE Usu_cedula=".$_POST["Usu_cedula"];
			
			$query = $conexion->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../CursoWeb/admin.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");</script>";

			}
		}
	}
}



?>