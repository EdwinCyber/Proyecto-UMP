<?php include ("header.php"); ?>
<center>
	<h2> Registro de Micrófono </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Equipo de Micrófono</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
		<br>

<?php 

include ("config.php");
$microfono = new Database();
if (isset($_POST) && !empty($_POST)) {
	$tMarcaMicrofono = $microfono->sanitize($_POST['tMarcaMicrofono']);
	$tModeloMicrofono = $microfono->sanitize($_POST['tModeloMicrofono']);
	$bTipoMicrofono = $microfono->sanitize($_POST['bTipoMicrofono']);
	$eNumeroInventarioMicrofono = $microfono->sanitize($_POST['eNumeroInventarioMicrofono']);
	$eNumeroSerieMicrofono = $microfono->sanitize($_POST['eNumeroSerieMicrofono']);
	$bEstadoMicrofono = $microfono->sanitize($_POST['bEstadoMicrofono']);
	$res = $microfono->crearMicrofono($tMarcaMicrofono,$tModeloMicrofono,$bTipoMicrofono,$eNumeroInventarioMicrofono,$eNumeroSerieMicrofono,$bEstadoMicrofono);

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
			<td><input type="text" class="form-control" id="tMarcaMicrofono" name="tMarcaMicrofono" required></td>		
		</div>
	</div>
	</tr>
	
	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Modelo</label></td>
				<td><input type="text" class="form-control" id="tModeloMicrofono" name="tModeloMicrofono" required></td>		
		</div>
	</div>
	</tr>

	<tr>
		<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Tipo de Microfono</label></td>
				<td><select id="bTipoMicrofono" name="bTipoMicrofono" required>
					<option value="1">Interno</option>
					<option value="0">Externo</option>	</td>	
		</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Inventario</label></td>
				<td><input type="text" class="form-control" id="eNumeroInventarioMicrofono" name="eNumeroInventarioMicrofono" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Serie</label></td>
				<td><input type="text" class="form-control" id="eNumeroSerieMicrofono" name="eNumeroSerieMicrofono" required></td>	
		</div>
	</div>
	</tr>

	<tr>
		<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Estado del Microfono</label></td>
				<td><select id="bEstadoMicrofono" name="bEstadoMicrofono" required>
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
