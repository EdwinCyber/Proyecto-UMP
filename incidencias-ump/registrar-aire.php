<?php include ("header.php"); ?>
<center>
	<h2> Registro de Aire Acondicionado </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Aire ACondicionado</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>
		<br>

	<?php 

include ("config.php");
$aire = new Database();
if (isset($_POST) && !empty($_POST)) {
	$tMarcaAire = $aire->sanitize($_POST['tMarcaAire']);
	$tModeloAire = $aire->sanitize($_POST['tModeloAire']);
	$eNumeroInventarioAire =$aire->sanitize($_POST['eNumeroInventarioAire']);
	$eNumeroSerieAire = $aire ->sanitize($_POST['eNumeroSerieAire']);
	$bEstadoAire = $aire ->sanitize($_POST['bEstadoAire']);
	$res = $aire->crearAire($tMarcaAire,$tModeloAire,$eNumeroInventarioAire,$eNumeroSerieAire,$bEstadoAire);

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
			<td><input type="text" class="form-control" id="tMarcaAire" name="tMarcaAire" required></td>		
		</div>
	</div>
	</tr>
	
	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Modelo</label></td>
				<td><input type="text" class="form-control" id="tModeloAire" name="tModeloAire" required></td>		
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Inventario</label></td>
				<td><input type="text" class="form-control" id="eNumeroInventarioAire" name="eNumeroInventarioAire" required></td>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Numero de Serie</label></td>
				<td><input type="text" class="form-control" id="eNumeroSerieAire" name="eNumeroSerieAire" required></td>	
		</div>
	</div>
	</tr>

	<tr>
		<div class="row">
			<div class="col-md-6">
				<td><label>Estado del Aire</label></td>
				<td><select id="bEstadoAire" name="bEstadoAire" required>
					<option value="1">Activo</option>
					<option value="0">Inactivo</option>	</td>
			</div>	
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
