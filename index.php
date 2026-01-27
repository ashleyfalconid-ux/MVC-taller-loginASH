<?php
session_start();

require_once __DIR__ . '/controlador/LoginControlador.php';
require_once __DIR__ . '/controlador/AlumnoControlador.php';

$loginCTRL = new LoginControlador();
$alumnoCTRL = new AlumnoControlador();

$accion = $_GET['accion'] ?? 'login'; // Por defecto al login

switch ($accion) {
    case 'login':
        $loginCTRL->login();
        break;
        
    case 'reporte':
        if (!isset($_SESSION['usuario'])) {
            header("Location: index.php?accion=login");
            exit;
        }
        $alumnoCTRL->consultar();
        break;

    
    

    case 'consultar':
    if (!isset($_SESSION['usuario'])) {
        header("Location: index.php?accion=login");
        exit;
    }
    $alumnoCTRL->consultar();
    break;

    case 'inicio':
        if (!isset($_SESSION['usuario'])) {
            header("Location: index.php?accion=login");
            exit;
        }
        require_once __DIR__ . '/vista/layout/header.php';
        echo '<main class="flex-grow-1 container mt-5"><h2 class="text-center mt-5">Bienvenido al sistema de alumno</h2></main>';
        require_once __DIR__ . '/vista/layout/footer.php';
        break;
    
    case 'registrarAlumno':
        include 'vista/registrarAlumnos.php';
        break;

    case 'guardarAlumno':
    if (!isset($_SESSION['usuario'])) {
        header("Location: index.php?accion=login");
        exit;
    }
    $alumnoCTRL->guardarAlumno();
    break;


    case 'logout':
        $loginCTRL->logout();
        break;

    default:
        header("Location: index.php?accion=login");
        break;
}