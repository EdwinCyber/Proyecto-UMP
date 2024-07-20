	<?php include ("header.php"); ?>
	<?php
	if (isset($_GET['eCodPuesto'])){
		$eCotPuesto = intval($_GET['eCodPuesto']);
	}
	else{
		header("location: index.php");
	}
	?>
<center>
	<h2> Registro dePuesto </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="row">
			<div class="col-sm-8"><h2>Agregar<b>puesto</b><h2></div>
				<div class="col-sm-4">
					<a href="index.php" class="btn btn-info">Regresa</a>
				</div>
			</div>
		</div>
			<?php
			include ("config.php");
			$puestos = new Database();
			if (isset($_POST) && !empty($_POST)){
			$tNombrePuesto = $puestos->sanitize($_POST['tNombrePuesto']);
			$bEstadoPuesto = $puestos->sanitize($_POST['bEstadoPuesto']);
			$res = $puestos->crearPuestos($tNombrePuesto,$bEstadoPuesto);
			if ($res){
				$message ="Datos insertados con éxito";
				$class = "alert alert-success";
			} else {
				$message = "Error al insertar datos";
				$class = "alert alert-danger";
			}
			?>
			<div class="<?php echo $class?>">
				<?php echo $message; ?>
			</div>
				<?php
			}
			?>
		<div class="row">
			<form method="POST">
				<div class="col-md-6">
					<label>Nombre Puesto </label>
					<input type="text" class="form-control" id="tNombrePuesto" name="tNombrePuesto" required>
				</div>

		<div class="row">
			<form method="POST">
				<div class="col-md-6">
					<label>Estado del Puesto </label>
					<select class="form-control" id="bEstadoPuesto" name="bEstadoPuesto" required>
							<option value=1>Activo </option>
							<option value=0>Inactivo </option>
					</select>
					<button type="submit" class="btn btn-warning"> Guardar </a></td>
			</form>
		</div>


				
	</div>
</div>
<?php include ("footer.php"); ?>