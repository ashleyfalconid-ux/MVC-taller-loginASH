<?php
require_once __DIR__ . '/../modelo/AlumnoModelo.php';

class AlumnoControlador {
    

    public function consultar() {
        $alumnoModelo = new AlumnoModelo();
        if (isset($_GET['buscar']) && trim($_GET['buscar']) !== '') {
        $texto = trim($_GET['buscar']);
        $alumnos = $alumnoModelo->buscar($texto);
    } else {
        $alumnos = $alumnoModelo->obtenerTodos();
    }

       // Si hay un error, $alumnos será false. Aquí lo validamos:
        if ($alumnos === false) {
            $cantidad = 0;
            $alumnos = []; // Creamos una lista vacía para evitar errores en la vista
        } else {
            $cantidad = count($alumnos);
        }

        include __DIR__ . '/../vista/listadoAlumnos.php';
    }

     public function mostrarFormulario($error='') {
        include __DIR__ . '/../vista/registrarAlumnos.php';
    }

    public function guardarAlumno() {
       $alumnoModelo = new AlumnoModelo();
       $id=$_POST['id'] ?? '';
       $cedula=$_POST['cedula'] ?? '';
       $nombres=$_POST['nombres'] ?? '';
       $apellidos=$_POST['apellidos'] ?? '';
       $correo=$_POST['correo'] ?? '';
       $telefono=$_POST['telefono'] ?? '';
       $fechaNacimiento=$_POST['fecha_nacimiento'] ?? '';


       $cantReg = $alumnoModelo->guardarAlumno($id, $cedula, $nombres, $apellidos, $correo, $telefono, $fechaNacimiento);

       if($cantReg>0){
        $this->mostrarFormulario("Alumno guardado exitosamente.");
         }else{
        $this->mostrarFormulario("Error al guardar el alumno.");
         }
       }
     }
   

?>