<?php include ("header.php"); ?>
<center>
	<h2> Registro de Pantalla de Proyeccion </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Pantalla de Proyeccion</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
		<br>

	<?php 

include ("config.php");
$pantallaProyeccion = new Database();
if (isset($_POST) && !empty($_POST)) {
	$tMarca = $pantallaProyeccion->sanitize($_POST['tMarca']);
	$tModelo = $pantallaProyeccion->sanitize($_POST['tModelo']);
	$eNumeroInventario = $pantallaProyeccion->sanitize($_POST['eNumeroInventario']);
	$eNumeroSerie = $pantallaProyeccion->sanitize($_POST['eNumeroSerie']);
	$bEstadoPantalla = $pantallaProyeccion->sanitize($_POST['bEstadoPantalla']);
	$res = $pantallaProyeccion->crearPantallaProyeccion($tMarca,$tModelo,$eNumeroInventario,$eNumeroSerie,$bEstadoPantalla);

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
			<td><input type="text" class="form-control" id="tMarca" name="tMarca" required></td>		
		</div>
	</div>
	</tr>
	
	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Modelo</label></td>
				<td><input type="text" class="form-control" id="tModelo" name="tModelo" required></td>		
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Inventario</label></td>
				<td><input type="text" class="form-control" id="eNumeroInventario" name="eNumeroInventario" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Serie</label></td>
				<td><input type="text" class="form-control" id="eNumeroSerie" name="eNumeroSerie" required></td>	
		</div>
	</div>
	</tr>

	<tr>
		<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Estado de Pantalla</label></td>
				<td><select id="bEstadoPantalla" name="bEstadoPantalla" required>
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
