<?php include ("header.php"); ?>
<center>
	<h2> Asignaciones </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Asignar<b> Equipos</b></h2></div>
				<div class="col-sm-4">
					<a href="index.php" class="btn btn-info" > Regresar </a>
				</div>
			</div>
		</div>
		<br>

	<table  width="50%" cellspacing="10" cellpadding="10">

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
			<td><label>ingresa el ID del Proyector</label></td>
			<td><input type="text" class="form-control" id="fk_eCodProyectorAsignacion" name="fk_eCodProyectorAsignacion" required></td>		
			</form>	
		</div>
	</div>
	</tr>
	
	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Ingresa el ID del Aire Acondicionado</label></td>
				<td><input type="text" class="form-control" id="fk_eCodAireAcondicionadoAsignacion" name="fk_eCodAireAcondicionadoAsignacion" required></td>		
			</form>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Ingresa el ID de la Marca</label></td>
				<td><input type="text" class="form-control" id="fk_eCodMarcaAsignacion" name="fk_eCodMarcaAsignacion" required></td>	
			</form>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Ingresa el ID de la Pantalla</label></td>
				<td><input type="text" class="form-control" id="fk_eCodPantallaAsignacion" name="fk_eCodPantallaAsignacion" required></td>	
			</form>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Ingresa el ID del Aula</label></td>
				<td><input type="text" class="form-control" id="fk_eCodAulaAsignacion" name="fk_eCodAulaAsignacion" required></td>	
			</form>	
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Estado de la ASignacion</label></td>
				<td><input type="text" class="form-control" id="bEstadoAsignacion" name="bEstadoAsignacion" required></td>	
			</form>	
		</div>
	</div>
	</tr>

</table>

</div>	
<?php include ("footer.php"); ?>
