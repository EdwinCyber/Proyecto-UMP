<?php include ("header.php"); ?>
<center>
	<h2> Registro de Camara Web </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Cámara Web</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
		<br>


<?php 

include ("config.php");
$camara_web = new Database();
if (isset($_POST) && !empty($_POST)) {
	$tMarcaCamara = $camara_web->sanitize($_POST['tMarcaCamara']);
	$tModeloCamara = $camara_web->sanitize($_POST['tModeloCamara']);
	$eNumeroInventarioCamara = $camara_web->sanitize($_POST['eNumeroInventarioCamara']);
	$eNumeroSerieCamara = $camara_web->sanitize($_POST['eNumeroSerieCamara']);
	$bEstadoCamara = $camara_web->sanitize($_POST['bEstadoCamara']);
	$res = $camara_web->crearCamaraWeb($tMarcaCamara,$tModeloCamara,$eNumeroInventarioCamara,$eNumeroSerieCamara,$bEstadoCamara);

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
			<td><input type="text" class="form-control" id="tMarcaCamara" name="tMarcaCamara" required></td>			
		</div>
	</div>
	</tr>
	
	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Modelo</label></td>
				<td><input type="text" class="form-control" id="tModeloCamara" name="tModeloCamara" required></td>			
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Inventario</label></td>
				<td><input type="text" class="form-control" id="eNumeroInventarioCamara" name="eNumeroInventarioCamara" required></td>		
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Serie</label></td>
				<td><input type="text" class="form-control" id="eNumeroSerieCamara" name="eNumeroSerieCamara" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Estado de la cámara Web</label></td>
				<td><select id="bEstadoCamara" name="bEstadoCamara" required>
					<option value="1">Activo</option>
					<option value="0">Inactivo</option>	</td>	
		</div>

		<tr>
			<td><button type="submit" class="btn btn-warning"> Guardar </a></td>
			</tr>

	</div>
	</tr>

	</form>	
</table>

</div>	
<?php include ("footer.php"); ?>
