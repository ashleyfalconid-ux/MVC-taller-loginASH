<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

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
                        <li><a class="dropdown-item" href="#">Registrar Alumno</a></li>
                        <li><a class="dropdown-item" href="#">Listar Alumnos</a></li>
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
                    <a class="nav-link" href="#">Reportes</a>
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
