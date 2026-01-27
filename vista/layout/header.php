<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php?accion=inicio">Inicio</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Alumnos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?accion=registrarAlumno">Registrar Alumno</a></li>
                        <li><a class="dropdown-item" href="index.php?accion=reporte">Listar Alumnos</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Cursos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Registrar Curso</a></li>
                        <li><a class="dropdown-item" href="#">Ver Cursos</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?accion=reporte">Reportes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="index.php?accion=logout">
                        Cerrar Sesión
                    </a>
                </li>
            </ul>

            <?php if (isset($_SESSION['usuario'])): ?>
                <span class="navbar-text">
                    Usuario: <?= htmlspecialchars($_SESSION['usuario']) ?>
                </span>
            <?php endif; ?>
        </div>
    </div>
</nav>