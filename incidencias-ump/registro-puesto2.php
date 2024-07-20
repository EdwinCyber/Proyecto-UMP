<?php include ("header.php"); ?>
<center>
	<h2> Registro del Puesto </h2>
</center>
<br />

<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Puestos</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
		<br>


<?php 

include ("config.php");
$puestos = new Database();
if (isset($_POST) && !empty($_POST)) {
	$tNombrePuesto = $puestos->sanitize($_POST['tNombrePuesto']);
	$bEstadoPuesto = $puestos->sanitize($_POST['bEstadoPuesto']);
	$res = $puestos->crearPuesto($tNombrePuesto,$bEstadoPuesto);

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
			<td><label>Nombre del puesto</label></td>
			<td><input type="text" class="form-control" id="tNombrePuesto" name="tNombrePuesto" required></td>		
		</div>
	</div>
	</tr>
	
	<tr>
	<div class="row">
			<div class="col-md-6">
				<td><label>Estado del puesto</label></td>
				<td><select id="bEstadoPuesto" name="bEstadoPuesto" required>
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
