<?php
session_start();

require_once __DIR__ . '/controlador/LoginControlador.php';

$loginCTRL = new LoginControlador();

$accion = $_GET['accion'] ?? 'default';

switch ($accion) {
    case 'login':
        $loginCTRL->login();
       
        break;
    case 'inicio':

    if (!isset($_SESSION['usuario'])) {
        header("Location: index.php?accion=login");
        exit;
    }

    require_once __DIR__ . '/vista/layout/header.php';
    ?>

   <main class="flex-grow-1 container mt-5">
    <h2 class="text-center mt-5">
        Bienvenido al sistema de alumno
    </h2>
</main>


    <?php
    require_once __DIR__ . '/vista/layout/footer.php';
    break;
}