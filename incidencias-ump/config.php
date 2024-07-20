<?php
	class Database {
		private $con;
		private $dbhost = "localhost";
		private $dbuser = "root";
		private $dbpass = "root";
		private $dbname ="incidencias-ump";

		function __construct(){
			$this->connect_db();
		}

		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
			if (mysqli_connect_error()) {
				die("Conexion a la base de datos Falló" .mysqli_connect_error().mysqli_connect_errno());
			}
		}
		//Esta funcion se encarga de limpiar todas las variables que utilicemos para poder mandar otro dato
		public function sanitize ($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}
		public function crearPuestos ($tNombrePuesto,$bEstadoPuesto){
			$sql = "INSERT INTO `puesto` (tNombrePuesto,bEstadoPuesto) VALUES ('$tNombrePuesto', '$bEstadoPuesto')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function crearPiso ($tNumeroPiso,$bEstadoPiso){
			$sql = "INSERT INTO `pisos` (tNumeroPiso,bEstadoPiso) VALUES ('$tNumeroPiso', '$bEstadoPiso')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function crearCamaraWeb ($tMarcaCamara,$tModeloCamara,$eNumeroInventarioCamara,$eNumeroSerieCamara,$bEstadoCamara){
			$sql = "INSERT INTO `camara_web` (tMarcaCamara,tModeloCamara,eNumeroInventarioCamara,eNumeroSerieCamara,bEstadoCamara) VALUES ('$tMarcaCamara','$tModeloCamara','$eNumeroInventarioCamara','$eNumeroSerieCamara','$bEstadoCamara')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function crearAire ($tMarcaAire,$tModeloAire,$eNumeroInventarioAire,$eNumeroSerieAire,$bEstadoAire){
			$sql = "INSERT INTO `aire` (tMarcaAire,tModeloAire,eNumeroInventarioAire,eNumeroSerieAire,bEstadoAire) VALUES ('$tMarcaAire','$tModeloAire','$eNumeroInventarioAire','$eNumeroSerieAire','$bEstadoAire')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function crearAudio ($tMarcaAmplificador,$tModeloAmplificador,$eNumeroInventarioAmplificador,$eNumeroSerieAmplificador,$bEstadoAmplificador){
			$sql = "INSERT INTO `audio` (tMarcaAmplificador,tModeloAmplificador,eNumeroInventarioAmplificador,eNumeroSerieAmplificador,bEstadoAmplificador) VALUES ('$tMarcaAmplificador','$tModeloAmplificador','$eNumeroInventarioAmplificador','$eNumeroSerieAmplificador','$bEstadoAmplificador')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function crearEquipoComputo ($tMarcaEquipoComputo,$tModeloEquipoComputo,$eNumeroInventarioEquipoComputo,$eNumeroSerieEquipoComputo,$eNumeroSerieMouseEquipoComputo,$eNumeroSerieTecladoEquipoComputo,$bEstadoEquipoComputo){
			$sql = "INSERT INTO `equipocomputo`(tMarcaEquipoComputo,tModeloEquipoComputo,eNumeroInventarioEquipoComputo,eNumeroSerieEquipoComputo,eNumeroSerieMouseEquipoComputo,eNumeroSerieTecladoEquipoComputo,bEstadoEquipoComputo) VALUES ('$tMarcaEquipoComputo','$tModeloEquipoComputo','$eNumeroInventarioEquipoComputo','$eNumeroSerieEquipoComputo','$eNumeroSerieMouseEquipoComputo','$eNumeroSerieTecladoEquipoComputo','$bEstadoEquipoComputo')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function crearAula ($eNombreAula,$fk_eCodPisoAula,$bEstadoAula){
			$sql = "INSERT INTO `aula` (eNombreAula,fk_eCodPisoAula,bEstadoAula) VALUES ('$eNombreAula','$fk_eCodPisoAula','$bEstadoAula')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function crearMicrofono ($tMarcaMicrofono,$tModeloMicrofono,$bTipoMicrofono,$eNumeroInventarioMicrofono,$eNumeroSerieMicrofono,$bEstadoMicrofono){
			$sql = "INSERT INTO `microfono` (tMarcaMicrofono,tModeloMicrofono,bTipoMicrofono,eNumeroInventarioMicrofono,eNumeroSerieMicrofono,bEstadoMicrofono) VALUES ('$tMarcaMicrofono','$tModeloMicrofono','$bTipoMicrofono','$eNumeroInventarioMicrofono','$eNumeroSerieMicrofono','$bEstadoMicrofono')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function crearPantallaProyeccion ($tMarca,$tModelo,$eNumeroInventario,$eNumeroSerie,$bEstadoPantalla){
			$sql = "INSERT INTO `proyeccion` (tMarca,tModelo,eNumeroInventario,eNumeroSerie,bEstadoPantalla) VALUES ('$tMarca','$tModelo','$eNumeroInventario','$eNumeroSerie','$bEstadoPantalla')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function crearProyector ($tMarcaProyector,$tModeloProyector,$eNumeroSerieProyector,$eNumeroInventarioProyector,$bEstadoProyector){
			$sql = "INSERT INTO `proyectores` (tMarcaProyector,tModeloProyector,eNumeroSerieProyector,eNumeroInventarioProyector,bEstadoProyector) VALUES ('$tMarcaProyector','$tModeloProyector','$eNumeroSerieProyector','$eNumeroInventarioProyector','$bEstadoProyector')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function crearRegulador ($tMarcaRegulador,$tModeloRegulador,$eNumeroInventarioRegulador,$eNumeroSerieRegulador,$bEstadoRegulador){
			$sql = "INSERT INTO `regulador` (tMarcaRegulador,tModeloRegulador,eNumeroInventarioRegulador,eNumeroSerieRegulador,bEstadoRegulador) VALUES ('$tMarcaRegulador','$tModeloRegulador','$eNumeroInventarioRegulador','$eNumeroSerieRegulador','$bEstadoRegulador')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}

			else
			{
				return false;
			}
		}
		public function crearUsuario ($tNombre,$tApellidoPaterno,$tApellidoMaterno,$fk_eCodPuesto,$tContrasena,$bEstadoUsuario){
			$sql = "INSERT INTO `usuarios` (tNombre,tApellidoPaterno,tApellidoMaterno,fk_eCodPuesto,tContrasena,bEstadoUsuario) VALUES ('$tNombre','$tApellidoPaterno','$tApellidoMaterno','$fk_eCodPuesto','$tContrasena','$bEstadoUsuario')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}

			else
			{
				return false;
			}
		}
		public function crearIncidencia ($fk_eCodAsignacion,$tDescripcionIncidencia,$bEstadoProyector,$bEstadoPantalla,$bEstadoAire,$tModalildadIncidencia,$tEvidenciaIncidenciaAula,$tEvidenciaIncidenciaProyector,$tEvidenciaPantalla,$tEvidenciaAire,$fk_eCodUsuario){
			$sql = "INSERT INTO `incidencia` (fk_eCodAsignacion,tDescripcionIncidencia,bEstadoProyector,bEstadoPantalla,bEstadoAire,tModalildadIncidencia,tEvidenciaIncidenciaAula,tEvidenciaIncidenciaProyector,tEvidenciaPantalla,tEvidenciaAire,fk_eCodUsuario) VALUES ('$fk_eCodAsignacion','$tDescripcionIncidencia','$bEstadoProyector','$bEstadoPantalla','$bEstadoAire','$tModalildadIncidencia','$tEvidenciaIncidenciaAula','$tEvidenciaIncidenciaProyector','$tEvidenciaPantalla','$tEvidenciaAire','$fk_eCodUsuario')";
			$res = mysqli_query($this->con, $sql);
			if($res)
			{
				return true;
			}

			else
			{
				return false;
			}
		}
		public function getPuestos(){
				$sql = "SELECT * FROM puesto";
				$res = mysqli_query($this->con, $sql);
				return $res;
			}

			public function getPuesto(){
				$sql = "SELECT * FROM puesto where eCodPuesto = '$eCodPuesto'";
				$res = mysqli_query($this->con, $sql);
				return $return;
			}

			public function updatePuesto($tNombrePuesto,$bEstadoPuesto,$eCodPuesto){
				$sql = "UPDATE puesto SET tNombrePuesto = '$tNombrePuesto', bEstadoPuesto = '$bEstadoPuesto' where eCodPuesto = '$eCodPuesto' ";
				$res = mysqli_query($this->con, $sql);
				if ($res){
				return true;
			}
			else {
				return false;
			}

		}	

			public function deletePuesto($eCodPuesto){
				$sql = "DELETE FROM puesto where eCodPuesto = '$eCodPuesto' ";
				$res = mysqli_query($this->con, $sql);
				if ($res){
				return true;
			}
			else{
				return false;
			}
		}


		}

?>