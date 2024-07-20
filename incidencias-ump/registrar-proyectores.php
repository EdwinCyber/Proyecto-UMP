<?php include ("header.php"); ?>
<center>
	<h2> Registro de Proyectores </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Proyectores</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
		<br>

<?php 

include ("config.php");
$proyector = new Database();
if (isset($_POST) && !empty($_POST)) {
	$tMarcaProyector = $proyector->sanitize($_POST['tMarcaProyector']);
	$tModeloProyector = $proyector->sanitize($_POST['tModeloProyector']);
	$eNumeroSerieProyector = $proyector->sanitize($_POST['eNumeroSerieProyector']);
	$eNumeroInventarioProyector = $proyector->sanitize($_POST['eNumeroInventarioProyector']);
	$bEstadoProyector = $proyector->sanitize($_POST['bEstadoProyector']);
	$res = $proyector->crearProyector($tMarcaProyector,$tModeloProyector,$eNumeroSerieProyector,$eNumeroInventarioProyector,$bEstadoProyector);

	if ($res) {
		$message = "Datos Insertados con Éxito";
		$class = "alert alert-success";
	}
	else
	{
		$message = "Error al insertar datos";
		$class = "alert alert-danger";
	}
?>
<div class="<?php echo $class ?>">
	<?php echo $message ?>
</div>
<?php
 } 
 ?>

	<table  width="50%" cellspacing="10" cellpadding="10">

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
			<td><label>Marca</label></td>
			<td><input type="text" class="form-control" id="tMarcaProyector" name="tMarcaProyector" required></td>		
		</div>
	</div>
	</tr>
	
	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Modelo</label></td>
				<td><input type="text" class="form-control" id="tModeloProyector" name="tModeloProyector" required></td>		
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Inventario</label></td>
				<td><input type="text" class="form-control" id="eNumeroInventarioProyector" name="eNumeroInventarioProyector" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Serie</label></td>
				<td><input type="text" class="form-control" id="eNumeroSerieProyector" name="eNumeroSerieProyector" required></td>	
		</div>
	</div>
	</tr>

	<tr>
		<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Estado de Proyector</label></td>
				<td><select id="bEstadoProyector" name="bEstadoProyector" required>
					<option value="1">Activo</option>
					<option value="0">Inactivo</option>	</td>	
		</div>
	</tr>

	<tr>
		<td><button type="submit" class="btn btn-warning"> Guardar </a></td>
	</tr>

</table>
</form>	

</div>	
<?php include ("footer.php"); ?>
