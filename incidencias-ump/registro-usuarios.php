<?php include ("header.php"); ?>
<center>
	<h2> Registro de Usuario </h2>
</center>
<br />
<div class="container">
	<div class="table-wrapper">
		<div class="table-tittle">
			<div class="row">
				<div class="col-sm-8"><h2>Agregar<b> Usuario</b></h2></div>
				<div class="col-sm-4">
				</div>
			</div>
		</div>

<?php 

include ("config.php");
$usuario = new Database();
if (isset($_POST) && !empty($_POST)) {
	$tNombre = $usuario->sanitize($_POST['tNombre']);
	$tApellidoPaterno = $usuario->sanitize($_POST['tApellidoPaterno']);
	$tApellidoMaterno = $usuario->sanitize($_POST['tApellidoMaterno']);
	$fk_eCodPuesto = $usuario->sanitize($_POST['fk_eCodPuesto']);
	$tContrasena = $usuario->sanitize($_POST['tContrasena']);
	$bEstadoUsuario = $usuario->sanitize($_POST['bEstadoUsuario']);
	$res = $usuario->crearUsuario($tNombre,$tApellidoPaterno,$tApellidoMaterno,$fk_eCodPuesto,$tContrasena,$bEstadoUsuario);

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
				<td><label>Nombre</label></td>
				<td><input type="text" class="form-control" id="tNombre" name="tNombre" required></td>		
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Apellido Paterno</label></td>
				<td><input type="text" class="form-control" id="tApellidoPaterno" name="tApellidoPaterno" required></td>		
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Apellido Materno</label></td>
				<td><input type="text" class="form-control" id="tApellidoMaterno" name="tApellidoMaterno" required></td>
		</div>
	</div>
	</tr>
	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Puesto</label></td>
				<td><input type="text" class="form-control" id="fk_eCodPuesto" name="fk_eCodPuesto" required></td>
		</div>
	</div>
	</tr>

	<tr>
	<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Contraseña</label></td>
				<td><input type="text" class="form-control" id="tContrasena" name="tContrasena" required></td>	
		</div>
	</div>
	</tr>
	<tr>
		<div class="row">
		<form method="POST">
			<div class="col-md-6">
				<td><label>Estado del Usuario</label></td>
				<td><select id="bEstadoUsuario" name="bEstadoUsuario" required>
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
