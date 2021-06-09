<?php

	include "conexion.php";
	$buscar = $_POST['btn-Buscar'];
	$sql= "SELECT * FROM Encomiendas WHERE Enc_origen  LIKE '%$buscar%'";
	$query = $conexion->query($sql);


?>
<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover" style=" margin-bottom: 300px;width: 85%; max-width: 850px; background-color: white; border:2px  solid;  ">
<thead>
	<tr>
	<th>Ciudad Origen</th>
	<th>Ciudad Destino</th>
	<th>Zona Origen</th>
	<th>Zona Destino</th>
	<th>Direccion</th>
	<th>Estado</th>
	<th>Tipo</th>
	<th>Cliente Cedula</th>
	<th>Cliente Nombre</th>
	<th></th>
	</tr>
</thead>

<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["Enc_origen"]; ?></td>
	<td><?php echo $r["Enc_destino"]; ?></td>
	<td><?php echo $r["Enc_localidadOrigen"]; ?></td>
	<td><?php echo $r["Enc_localidadDestino"]; ?></td>
	<td><?php echo $r["Enc_direccion"]; ?></td>
	<td><?php echo $r["Enc_estado"]; ?></td>
	<td><?php echo $r["Enc_tipo"]; ?></td>
	<td><?php echo $r["Cliente_cedula"]; ?></td>
	<td><?php echo $r["Cliente_nombre"]; ?></td>
	<td style="width:150px;">
		<a href="#" id="editar-<?php echo $r["Enc_id"];?>" class="btn btn-primary" style="margin: 5px; margin-left: 9px;" >Editar</a>
		<script>
            $("#editar-"+<?php echo $r["Enc_id"];?>).click(function(e){
                e.preventDefault();
                $("#<?php echo ($r['Enc_id'])?>").modal('show');
            });
        </script>
		<?php  
		if ($_SESSION['Tipo-usuario']== 'Admin'): ?> 

		<a href="#" id="eliminar-<?php echo $r["Enc_id"];?>" class="btn  btn-danger">Eliminar</a>
		<script>
		$("#eliminar-"+<?php echo $r["Enc_id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="../php2021/eliminar.php?Enc_id="+<?php echo $r["Enc_id"];?>;

			}

		});
		</script>
		<?php endif;?>
	</td>	
</tr>

<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
