<div class="conteiner" style="display: -webkit-box">
	<form style="margin-bottom: 15px;" method="POST" action="">
	<input class="form-control" style=" width: 250px; display: inline;" name="btn-Buscar" type="text" placeholder="Buscar Encomienda">
	<button  class="btn btn-primary" type="submit">Buscar</button>
</form>
<?php
if ($_SESSION['Tipo-usuario']==='Admin'){
		echo('<a  style="margin-left: 10px; margin-top: 3px" class="btn btn-primary" href="../CursoWeb/admin.php">Usuarios</a>');
	}
?>
</div>

<?php  $buscar = ''; 
	
?>
