<?php 
	
	include "conexion.php";
	$sql= "SELECT * FROM Encomiendas";
	$query = $conexion->query($sql);
   ?>
	
	<?php  while($r=$query->fetch_array()):?>
	<div class="modal fade" id="<?php echo $r["Enc_id"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    	<div class="modal-content">
      	<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDITAR ENCOMIENDAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class="modal-body">
      	<form action="../php2021/actualizar.php" method="POST">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_origen" value= "<?php echo $r["Enc_origen"]; ?>">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_destino" value= "<?php echo $r["Enc_destino"]; ?>">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_localidadOrigen" value= "<?php echo $r["Enc_localidadOrigen"]; ?>">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_localidadDestino" value= "<?php echo $r["Enc_localidadDestino"]; ?>">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_direccion" value= "<?php echo $r["Enc_direccion"]; ?>">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_estado" value= "<?php echo $r["Enc_estado"]; ?>">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_tipo" value= "<?php echo $r["Enc_tipo"]; ?>">
        <input style= "margin: 10px" class="form-control" type="text" name="Cliente_cedula" value= "<?php echo $r["Cliente_cedula"]; ?>">
        <input style= "margin: 10px"  class="form-control" type="text" name="Cliente_nombre" value= "<?php echo $r["Cliente_nombre"]; ?>">
        <input style= "margin: 10px"  class="form-control" type="hidden" name="Enc_id" value= "<?php echo $r["Enc_id"]; ?>">


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
