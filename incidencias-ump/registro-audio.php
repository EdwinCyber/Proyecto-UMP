<?php include ("header.php"); ?>
<center>
	<h2> Registro de Equipo de Audio </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Equipo de Audio</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
		<br>


	<?php 

include ("config.php");
$audio = new Database();
if (isset($_POST) && !empty($_POST)) {
	$tMarcaAmplificador = $audio->sanitize($_POST['tMarcaAmplificador']);
	$tModeloAmplificador = $audio->sanitize($_POST['tModeloAmplificador']);
	$eNumeroInventarioAmplificador =$audio->sanitize($_POST['eNumeroInventarioAmplificador']);
	$eNumeroSerieAmplificador = $audio ->sanitize($_POST['eNumeroSerieAmplificador']);
	$bEstadoAmplificador = $audio ->sanitize($_POST['bEstadoAmplificador']);
	$res = $audio->crearAudio($tMarcaAmplificador,$tModeloAmplificador,$eNumeroInventarioAmplificador,$eNumeroSerieAmplificador,$bEstadoAmplificador);

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
			<td><input type="text" class="form-control" id="tMarcaAmplificador" name="tMarcaAmplificador" required></td>		
		</div>
	</div>
	</tr>
	
	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Modelo</label></td>
				<td><input type="text" class="form-control" id="tModeloAmplificador" name="tModeloAmplificador" required></td>		
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Inventario</label></td>
				<td><input type="text" class="form-control" id="eNumeroInventarioAmplificador" name="eNumeroInventarioAmplificador" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Serie</label></td>
				<td><input type="text" class="form-control" id="eNumeroSerieAmplificador" name="eNumeroSerieAmplificador" required></td>		
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
			<div class="col-md-6">
				<td><label>Estado del Amplificador del Audio</label></td>
				<td><select id="bEstadoAmplificador" name="bEstadoAmplificador" required>
					<option value="1">Activo</option>
					<option value="0">Inactivo</option>	</td>
			</div>	
		</div>
	</div>
	</tr>

	<tr>
		<td><button type="submit" class="btn btn-warning"> Guardar </a></td>
	</tr>

</table>
</form>
</div>	
<?php include ("footer.php"); ?>
