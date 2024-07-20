<?php include ("header.php"); ?>
<center>
	<h2> Registro del Regulador </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Regulador</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
		<br>

<?php 

include ("config.php");
$regulador = new Database();
if (isset($_POST) && !empty($_POST)) {
	$tMarcaRegulador = $regulador->sanitize($_POST['tMarcaRegulador']);
	$tModeloRegulador = $regulador->sanitize($_POST['tModeloRegulador']);
	$eNumeroInventarioRegulador = $regulador->sanitize($_POST['eNumeroInventarioRegulador']);
	$eNumeroSerieRegulador = $regulador->sanitize($_POST['eNumeroSerieRegulador']);
	$bEstadoRegulador = $regulador->sanitize($_POST['bEstadoRegulador']);
	$res = $regulador->crearRegulador($tMarcaRegulador,$tModeloRegulador,$eNumeroInventarioRegulador,$eNumeroSerieRegulador,$bEstadoRegulador);

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
			<td><input type="text" class="form-control" id="tMarcaRegulador" name="tMarcaRegulador" required></td>		
		</div>
	</div>
	</tr>
	
	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Modelo</label></td>
				<td><input type="text" class="form-control" id="tModeloRegulador" name="tModeloRegulador" required></td>		
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Inventario</label></td>
				<td><input type="text" class="form-control" id="eNumeroInventarioRegulador" name="eNumeroInventarioRegulador" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Serie</label></td>
				<td><input type="text" class="form-control" id="eNumeroSerieRegulador" name="eNumeroSerieRegulador" required></td>	
		</div>
	</div>
	</tr>

	<tr>
		<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Estado del Regulador</label></td>
				<td><select id="bEstadoRegulador" name="bEstadoRegulador" required>
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
