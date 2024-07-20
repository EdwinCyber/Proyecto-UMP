<?php include ("header.php"); ?>
<center>
	<h2> Registro del Aula </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Aulas</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
		<br>

		<?php 

include ("config.php");
$aula = new Database();
if (isset($_POST) && !empty($_POST)) {
	$eNombreAula = $aula->sanitize($_POST['eNombreAula']);
	$fk_eCodPisoAula = $aula->sanitize($_POST['fk_eCodPisoAula']);
	$bEstadoAula = $aula->sanitize($_POST['bEstadoAula']);
	$res = $aula->crearAula($eNombreAula,$fk_eCodPisoAula,$bEstadoAula);

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
			<td><label>Numero del Aula</label></td>
			<td><input type="text" class="form-control" id="eNombreAula" name="eNombreAula" required></td>		
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Ingresa el Piso</label></td>
				<td><input type="text" class="form-control" id="fk_eCodPisoAula" name="fk_eCodPisoAula" required></td>		
		</div>
	</div>
	</tr>
	
	<tr>
		<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Estado del Equipo de Aula</label></td>
				<td><select id="bEstadoAula" name="bEstadoAula" required>
					<option value="1">Activo</option>
					<option value="0">Inactivo</option>	</td>	
		</div>
	</tr>

	<tr>
		<td><button type="submit" class="btn btn-warning"> Guardar </a></td>
	</tr>

</form>	
</table>

</div>	
<?php include ("footer.php"); ?>
