<?php
	if (isset($_GET['eCodPuesto'])){
		include ('config.php');
		$puesto = new Database();
		$eCodPuesto = intval($_GET['eCodPuesto']);
		$res = $puesto->deletePuesto($eCodPuesto);
		if ($res){
			header('location: registro-puesto.php');
		}
		else
		{
			echo "Error al borrar registro";
		}
	}
?>