<?php include ("header.php"); ?>
<center>
	<h2> Registro de Incidencias </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Incidencias</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
		<br>

	<?php 

include ("config.php");
$incidencia = new Database();
if (isset($_POST) && !empty($_POST)) {
	$fk_eCodAsignacion = $incidencia->sanitize($_POST['fk_eCodAsignacion']);
	$tDescripcionIncidencia = $incidencia->sanitize($_POST['tDescripcionIncidencia']);
	$bEstadoProyector = $incidencia->sanitize($_POST['bEstadoProyector']);
	$bEstadoPantalla = $incidencia->sanitize($_POST['bEstadoPantalla']);
	$bEstadoAire = $incidencia->sanitize($_POST['bEstadoAire']);
	$tModalildadIncidencia = $incidencia->sanitize($_POST['tModalildadIncidencia']);
	$tEvidenciaIncidenciaAula = $incidencia->sanitize($_POST['tEvidenciaIncidenciaAula']);
	$tEvidenciaPantalla = $incidencia->sanitize($_POST['tEvidenciaPantalla']);
	$tEvidenciaIncidenciaProyector = $incidencia->sanitize($_POST['tEvidenciaIncidenciaProyector']);
	$tEvidenciaAire = $incidencia->sanitize($_POST['tEvidenciaAire']);
	$fk_eCodUsuario = $incidencia->sanitize($_POST['fk_eCodUsuario']);

	$res = $incidencia->crearIncidencia($fk_eCodAsignacion,$tDescripcionIncidencia,$bEstadoProyector,$bEstadoPantalla,$bEstadoAire,$tModalildadIncidencia,$tEvidenciaIncidenciaAula,$tEvidenciaIncidenciaProyector,$tEvidenciaPantalla,$tEvidenciaAire,$fk_eCodUsuario);

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
			<td><label>Codigo de Asignacion</label></td>
			<td><input type="text" class="form-control" id="fk_eCodAsignacion" name="fk_eCodAsignacion" required></td>
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
			<td><label>Descripcion de incidencia</label></td>
			<td><input type="text" class="form-control" id="tDescripcionIncidencia" name="tDescripcionIncidencia" required></td>		
		</div>
	</div>
	</tr>
	
	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Estado del Proyector</label></td>
				<td><select id="bEstadoProyector" name="bEstadoProyector" required>
				<option value="1">Funciona</option>
				<option value="0">No funciona</option></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Estado de Pantalla</label></td>
				<td><select id="bEstadoPantalla" name="bEstadoPantalla" required>
				<option value="1">Funciona</option>
				<option value="0">No funciona</option></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Estado del Aire Acondicionado</label></td>
				<td><select id="bEstadoAire" name="bEstadoAire" required>
				<option value="1">Funciona</option>
				<option value="0">No funciona</option></td>		
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Modalidad de Incidencia</label></td>
				<td><input type="text" class="form-control" id="tModalildadIncidencia" name="tModalildadIncidencia" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Evidencia del Aula</label></td>
				<td><input type="text" class="form-control" id="tEvidenciaIncidenciaAula" name="tEvidenciaIncidenciaAula" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Evidencia del proyector</label></td>
				<td><input type="text" class="form-control" id="tEvidenciaIncidenciaProyector" name="tEvidenciaIncidenciaProyector" required></td>
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Evidencia de Pantalla</label></td>
				<td><input type="text" class="form-control" id="tEvidenciaPantalla" name="tEvidenciaPantalla" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Evidencia del Aire Acondicionado</label></td>
				<td><input type="text" class="form-control" id="tEvidenciaAire" name="tEvidenciaAire" required></td>
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Evidencia del Aire Acondicionado</label></td>
				<td><input type="text" class="form-control" id="tEvidenciaAire" name="tEvidenciaAire" required></td>
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>¿Quien hace el Reporte?</label></td>
				<td><input type="text" class="form-control" id="fk_eCodUsuario" name="fk_eCodUsuario" required></td>
		</div>
	</div>
	</tr>
	<tr>
		<td><button type="submit" class="btn btn-warning"> Guardar </a></td>
	</tr>

</form>	

</table>

</div>	
<?php include ("footer.php"); ?>
