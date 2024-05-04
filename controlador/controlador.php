<?php
include_once '../modelo/modelo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
    $fecha = $_POST["fecha"];
    $especialidad = $_POST["especialidad"];

    if (CitaMedica::registrarCita($nombre, $correo, $telefono, $direccion,$fecha, $especialidad)) {

        session_start();
        $_SESSION["mensaje"] = "Cita médica registrada correctamente.";
    } else {
        echo "Error en el registro";
    }
    header("Location: ../vista/registrousuario.php");
    exit();
}

// Obteniendo las citas médicas desde el modelo
$citas = CitaMedica::obtenerTodasLasCitas();

?>
