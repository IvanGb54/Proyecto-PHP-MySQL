<?php 
	
	include "conexion.php";
	$sql= "SELECT * FROM usuario";
	$query = $conexion->query($sql);
   ?>
	
	<?php  while($r=$query->fetch_array()):?>
	<div class="modal fade" id="<?php echo $r["Usu_cedula"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    	<div class="modal-content">
      	<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITAR USUARIO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class="modal-body">
      	<form action="../php2021/actualizarUsuario.php" method="POST">
        <input style= "margin: 10px" class="form-control" type="text" name="Usu_cedula" value= "<?php echo $r["Usu_cedula"]; ?>">
        <input style= "margin: 10px" class="form-control" type="text" name="Usu_nombre" value= "<?php echo $r["Usu_nombre"]; ?>">
        <input style= "margin: 10px" class="form-control" type="text" name="Usu_apellido" value= "<?php echo $r["Usu_apellido"]; ?>">
        <input style= "margin: 10px" class="form-control" type="text" name="Usu_email" value= "<?php echo $r["Usu_email"]; ?>">
        <input style= "margin: 10px" class="form-control" type="text" name="Usu_clave" value= "<?php echo $r["Usu_clave"]; ?>">
        <input style= "margin: 10px" class="form-control" type="text" name="Usu_tipo" value= "<?php echo $r["Usu_tipo"]; ?>">
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>
