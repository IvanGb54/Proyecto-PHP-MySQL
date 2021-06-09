<?php

if(!empty($_POST)){
	if(isset($_POST["Enc_origen"]) &&isset($_POST["Enc_destino"]) &&isset($_POST["Enc_localidadOrigen"]) &&isset($_POST["Enc_localidadDestino"]) &&isset($_POST["Enc_direccion"])&&isset($_POST["Enc_estado"])&&isset($_POST["Enc_tipo"])&&isset($_POST["Cliente_cedula"])&&isset($_POST["Cliente_nombre"])){
		if($_POST["Enc_origen"]!=""&& $_POST["Enc_destino"]!=""&& $_POST["Enc_localidadOrigen"]!=""&& $_POST["Enc_localidadDestino"]!=""&& $_POST["Enc_direccion"]!=""&& $_POST["Enc_estado"]!=""&& $_POST["Enc_tipo"]!=""&& $_POST["Cliente_cedula"]!=""&& $_POST["Cliente_nombre"]!=""){
			include "conexion.php";
			
			$sql = "UPDATE Encomiendas SET Enc_origen=\"$_POST[Enc_origen]\",Enc_destino=\"$_POST[Enc_destino]\",Enc_localidadOrigen=\"$_POST[Enc_localidadOrigen]\",Enc_localidadDestino=\"$_POST[Enc_localidadDestino]\",Enc_direccion=\"$_POST[Enc_direccion]\",Enc_estado=\"$_POST[Enc_estado]\",Enc_tipo=\"$_POST[Enc_tipo]\",Cliente_cedula=\"$_POST[Cliente_cedula]\",Cliente_nombre=\"$_POST[Cliente_nombre]\" WHERE Enc_id=".$_POST["Enc_id"];
			
			$query = $conexion->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../CursoWeb/recepcionista.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");</script>";

			}
		}
	}
}



?>