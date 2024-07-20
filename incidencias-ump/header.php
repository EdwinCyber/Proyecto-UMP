<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

	<title>Sistema de Incidencias - UMP</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">UMP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrar Artículos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="registrar-proyectores.php">Proyector</a></li>
            <li><a class="dropdown-item" href="registrar-aire.php">Aire Acondicionado</a></li>
            <li><a class="dropdown-item" href="registro-pantalla-proyeccion.php">Pantalla</a></li>
            <li><a class="dropdown-item" href="registro-equipo-computo.php">Equipo de cómputo</a></li>
            <li><a class="dropdown-item" href="registro-audio.php">Equipo de audio</a></li>
            <li><a class="dropdown-item" href="registro-microfono.php">Micrófono</a></li>
            <li><a class="dropdown-item" href="registrar-camara-web.php">Cámara Web</a></li>
            <li><a class="dropdown-item" href="registro-regulador.php">Regulador</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrar Espacios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="registrar-pisos.php">Pisos</a></li>
            <li><a class="dropdown-item" href="registrar-aula.php">Aulas</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrar Usuarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="registro-usuarios.php">Usuario</a></li>
            <li><a class="dropdown-item" href="registro-puesto.php">Puesto</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Incidencias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="registro-incidencia.php">Registrar Incidencia</a></li>
            <li><a class="dropdown-item" href="#">Ver Incidencias</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Asignaciones
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="asignacion.php">Asignar Equipos de Aulas</a></li>
          </ul>
        </li>



      </form>
    </div>
  </div>
</nav>