<?php

	include "conexion.php";
	$buscar = $_POST['btn-Buscar'];
	$sql = "SELECT Enc_localidadOrigen, Enc_localidadDestino , Cliente_cedula, Cliente_nombre , Enc_estado, Enc_tipo  FROM Encomiendas WHERE Enc_id =".$buscar;
	$query = $conexion->query($sql);

	

?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover" style=" margin-bottom: 300px;width: 85%; max-width: 850px; background-color: white; border:2px  solid;  ">
<thead>
	<tr>
	<th>Localidad Origen</th>
	<th>Localidad Destino</th>
	<th>Cedula cliente</th>
	<th>Nombre cliente</th>
	<th>Estado de encomienda</th>
	<th>Tipo de encomienda</th>
	</tr>
</thead>

<?php while ($r=$query->fetch_array()):?>
<tr>
	
	<td><?php echo $r["Enc_localidadOrigen"]; ?></td>
	<td><?php echo $r["Enc_localidadDestino"]; ?></td>
	<td><?php echo $r["Cliente_cedula"]; ?></td>
	<td><?php echo $r["Cliente_nombre"]; ?></td>
	<td><?php echo $r["Enc_estado"]; ?></td>
	<td><?php echo $r["Enc_tipo"]; ?></td>
	
		
</tr>

<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
