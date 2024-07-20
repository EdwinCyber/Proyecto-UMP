<?php include ("header.php"); ?>
<center>
	<h2> Registro del Piso </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Pisos</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
		<br>


<?php 

include ("config.php");
$pisos = new Database();
if (isset($_POST) && !empty($_POST)) {
	$tNumeroPiso = $pisos->sanitize($_POST['tNumeroPiso']);
	$bEstadoPiso = $pisos->sanitize($_POST['bEstadoPiso']);
	$res = $pisos->crearPiso($tNumeroPiso,$bEstadoPiso);

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
			<td><label>Numero del piso</label></td>
			<td><input type="number" class="form-control" id="tNumeroPiso" name="tNumeroPiso" required></td>		
		</div>
	</div>
	</tr>
	
	<tr>
	<div class="row">
			<div class="col-md-6">
				<td><label>Estado del piso</label></td>
				<td><select id="bEstadoPiso" name="bEstadoPiso" required>
					<option value="1">Activo</option>
					<option value="0">Inactivo</option>	</td>	
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
