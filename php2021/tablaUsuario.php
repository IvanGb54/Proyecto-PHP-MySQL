<?php

	include "../php2021/conexion.php";
	// $buscar = $_POST['btn-Buscar'];
	$sql= "SELECT * FROM Usuario  ";
	$query = $conexion->query($sql);


?>
<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover" style=" margin-bottom: 300px;width: 85%; max-width: 850px; background-color: white; border:2px  solid;  ">
<thead>
	<tr>
	<th>Cedula Usuario</th>
	<th>Nombre usuario</th>
	<th>Apellido usuario</th>
	<th>Email</th>
	<th>Clave de usuario</th>
	<th>Tipo de usuario</th>
	<th></th>
	</tr>
</thead>

<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["Usu_cedula"]; ?></td>
	<td><?php echo $r["Usu_nombre"]; ?></td>
	<td><?php echo $r["Usu_apellido"]; ?></td>
	<td><?php echo $r["Usu_email"]; ?></td>
	<td><?php echo $r["Usu_clave"]; ?></td>
	<td><?php echo $r["Usu_tipo"]; ?></td>
	<td style="width:150px;">
		 <a href="#" id="editarUsuario-<?php echo $r["Usu_cedula"];?>" class="btn btn-primary" style="margin: 5px; margin-left: 9px;" >Editar</a>
		<script>
            $("#editarUsuario-"+<?php echo $r["Usu_cedula"];?>).click(function(e){
                e.preventDefault();
                $("#<?php echo ($r['Usu_cedula'])?>").modal('show');
            });
        </script> 
		

		<a href="#" id="eliminarUsuario-<?php echo $r["Usu_cedula"];?>" class="btn  btn-danger">Eliminar</a>
		<script>
		$("#eliminarUsuario-"+<?php echo $r["Usu_cedula"];?>).click(function(e){
			e.preventDefault();
			p = confirm('Estas seguro?')
			if(p){
				window.location="../php2021/eliminarUsuario.php?id="+<?php echo $r["Usu_cedula"];?>;


			}

		});
		</script>
		 
	</td>	
</tr>

<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
