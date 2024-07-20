<?php include ("header.php"); ?>
<center>
	<h2> Registro dePuesto </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="row">
			<div class="col-sm-8"><h2>Agregar<b>puesto</b><h2></div>
				<div class="col-sm-4">
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
	</table>


		<div class="container">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Puesto</th>
				<th>Estado</th>
				<th>Accion</th>
			</tr>
			<thead>
			<tbody>
			<?php 
			$listado = $puestos->getPuestos();
			?>
			<?php
			while($row = mysqli_fetch_object($listado)){
				$eCodPuesto = $row->eCodPuesto;
				$tNombrePuesto = $row->tNombrePuesto;
				$bEstadoPuesto = $row->bEstadoPuesto;
				?>
				<tr>
					<td><?php echo $tNombrePuesto; ?> </td>
					<td><?php echo $bEstadoPuesto; ?> </td>
					<td>
						<a href="updatePuesto.php?eCodPuesto=<?php 
						echo $eCodPuesto;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254
						</i></a>
						<a href="deletePuesto.php?eCodPuesto=<?php echo $eCodPuesto; ?>" class="delete" title="Eliminar"
						data-toggle="tooltip"><i class="material-icons">&#xE872
						</i></a>
						</td>
						</tr>

						 <?php
						}
					?>
			</tbody>	
		</thead>
				</table>


				
	</div>
</div>
<?php include ("footer.php"); ?>