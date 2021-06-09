<button style=" margin-top: 100px ;margin-bottom: 10px" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Agregar Encomienda
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
        
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_origen" placeholder="Ciudad origen">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_destino" placeholder="Ciudad destino">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_localidadOrigen" placeholder="Localidad origen">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_localidadDestino" placeholder="Localidad destino">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_direccion" placeholder="Direccion">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_estado" placeholder="Estado">
        <input style= "margin: 10px" class="form-control" type="text" name="Enc_tipo" placeholder="Tipo de encomienda">
        <input style= "margin: 10px" class="form-control" type="text" name="Cliente_cedula" placeholder="Cedula del cliente">
        <input style= "margin: 10px" class="form-control" type="text" name="Cliente_nombre" placeholder="Nombre del cliente">
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="btn-crear" class="btn btn-primary">Crear Encomienda</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php 
   
  if(isset($_POST['btn-crear'])){
    include "conexion.php";
    $sql= "INSERT INTO Encomiendas (Enc_origen, Enc_destino, Enc_localidadOrigen, Enc_localidadDestino, Enc_direccion, Enc_estado, Enc_tipo,Cliente_cedula,Cliente_nombre) VALUES (\"$_POST[Enc_origen]\",\"$_POST[Enc_destino]\",\"$_POST[Enc_localidadOrigen]\",\"$_POST[Enc_localidadDestino]\",\"$_POST[Enc_direccion]\",\"$_POST[Enc_estado]\",\"$_POST[Enc_tipo]\",\"$_POST[Cliente_cedula]\",\"$_POST[Cliente_nombre]\")";
    $query = $conexion->query($sql);

    if($query!=NULL){
      echo "<script>alert('Encomienda agregada con exito');window.location='../CursoWeb/recepcionista.php';</script>";
    }else{
      echo "<script>alert('Error al agregar encomienda');</script>";
    }
  }

 ?>