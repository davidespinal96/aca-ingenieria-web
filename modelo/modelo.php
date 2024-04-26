<?php
class Conexion {
    public static function conectar() {
        $db_host = 'localhost';
        $db_nombre = 'citas';
        $db_usuario = 'root';
        $db_contrasena = '';

        try {
            $conexion = new PDO("mysql:host=$db_host;dbname=$db_nombre", $db_usuario, $db_contrasena);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            return null;
        }
    }
}

class CitaMedica {
    public static function registrarCita($nombre, $correo, $telefono, $direccion, $fecha, $especialidad) {
        try {
            $conexion = Conexion::conectar();
            $stmt = $conexion->prepare("INSERT INTO citas (nombre, correo, telefono, direccion, fecha, especialidad) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bindParam(1, $nombre);
            $stmt->bindParam(2, $correo);
            $stmt->bindParam(3, $telefono);
            $stmt->bindParam(4, $direccion);
            $stmt->bindParam(5, $fecha);
            $stmt->bindParam(6, $especialidad);
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Error al registrar cita: " . $e->getMessage();
            return false;
        }
    }
}
?>