<?php
require_once __DIR__ . '/../config/Conexion.php';

class AlumnoModelo {

    public function obtenerTodos() {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();

            // Seleccionamos los campos correctos de la tabla Alumnos
            $sql = "SELECT Id, Cedula, Nombres, Apellidos, Correo, Telefono, FechaNacimiento 
                    FROM Alumnos 
                    ORDER BY Id";

            $stmt = $conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            error_log("Error en AlumnoModelo->obtenerTodos - " . $e->getMessage());
            return false;
        }
    }

     public function buscar($texto) {
        try {
            $conexion = new Conexion();
            $conn = $conexion->conectar();

            $sql = "SELECT Id, Cedula, Nombres, Apellidos, Correo, Telefono, FechaNacimiento
                    FROM Alumnos
                    WHERE Cedula LIKE :texto
                       OR Nombres LIKE :texto
                       OR Apellidos LIKE :texto
                    ORDER BY Id";

            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':texto', '%' . $texto . '%');
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            error_log("Error en AlumnoModelo->buscar - " . $e->getMessage());
            return false;
        }
    }

    public function guardarAlumno($id, $cedula, $nombres, $apellidos, $correo, $telefono, $fechaNacimiento) {
    try {
        $conexion = new Conexion();
        $conn = $conexion->conectar();

        $sql = "INSERT INTO alumnos 
                (Cedula, Nombres, Apellidos, Correo, Telefono, FechaNacimiento)
                VALUES 
                (:cedula, :nombres, :apellidos, :correo, :telefono, :fechaNacimiento)";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':cedula' => $cedula,
            ':nombres' => $nombres,
            ':apellidos' => $apellidos,
            ':correo' => $correo,
            ':telefono' => $telefono,
            ':fechaNacimiento' => $fechaNacimiento
        ]);

        return $stmt->rowCount();

    } catch (PDOException $e) {
        error_log("Error guardarAlumno - " . $e->getMessage());
        return 0;
    }
}


}
?>