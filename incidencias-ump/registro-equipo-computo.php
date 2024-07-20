<?php include ("header.php"); ?>
<center>
	<h2> Registro de Equipo de Cómputo </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Equipo de Cómputo</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>

<?php 

include ("config.php");
$equipocomputo = new Database();
if (isset($_POST) && !empty($_POST)) {
	$tMarcaEquipoComputo = $equipocomputo->sanitize($_POST['tMarcaEquipoComputo']);
	$tModeloEquipoComputo = $equipocomputo->sanitize($_POST['tModeloEquipoComputo']);
	$eNumeroInventarioEquipoComputo = $equipocomputo->sanitize($_POST['eNumeroInventarioEquipoComputo']);
	$eNumeroSerieEquipoComputo = $equipocomputo->sanitize($_POST['eNumeroSerieEquipoComputo']);
	$eNumeroSerieMouseEquipoComputo = $equipocomputo->sanitize($_POST['eNumeroSerieMouseEquipoComputo']);
	$eNumeroSerieTecladoEquipoComputo = $equipocomputo->sanitize($_POST['eNumeroSerieTecladoEquipoComputo']);
	$bEstadoEquipoComputo = $equipocomputo->sanitize($_POST['bEstadoEquipoComputo']);
	$res = $equipocomputo->crearEquipoComputo($tMarcaEquipoComputo,$tModeloEquipoComputo,$eNumeroInventarioEquipoComputo,$eNumeroSerieEquipoComputo,$eNumeroSerieMouseEquipoComputo,$eNumeroSerieTecladoEquipoComputo,$bEstadoEquipoComputo);

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
				<td><label>Marca de Gabinete</label></td>
				<td><input type="text" class="form-control" id="tMarcaEquipoComputo" name="tMarcaEquipoComputo" required></td>		
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Modelo de Gabinete</label></td>
				<td><input type="text" class="form-control" id="tModeloEquipoComputo" name="tModeloEquipoComputo" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de inventario</label></td>
				<td><input type="text" class="form-control" id="eNumeroInventarioEquipoComputo" name="eNumeroInventarioEquipoComputo" required></td>
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de serie</label></td>
				<td><input type="text" class="form-control" id="eNumeroSerieEquipoComputo" name="eNumeroSerieEquipoComputo" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de serie del Mouse</label></td>
				<td><input type="text" class="form-control" id="eNumeroSerieMouseEquipoComputo" name="eNumeroSerieMouseEquipoComputo" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de serie del Teclado</label></td>
				<td><input type="text" class="form-control" id="eNumeroSerieTecladoEquipoComputo" name="eNumeroSerieTecladoEquipoComputo" required>	</td>	
		</div>
	</div>
	</tr>

	<tr>
		<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Estado del Equipo de Cómputo</label></td>
				<td><select id="bEstadoEquipoComputo" name="bEstadoEquipoComputo" required>
					<option value="1">Activo</option>
					<option value="0">Inactivo</option>	</td>	
		</div>
	</tr>

	<tr>
		<td><button type="submit" class="btn btn-warning"> Guardar </a></td>
	</tr>


</form>	

</div>	
<?php include ("footer.php"); ?>
