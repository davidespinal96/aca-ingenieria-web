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
        echo '<script>';
        echo 'alert("Cita médica registrada correctamente.");';
        echo 'document.getElementById("registroForm").reset();'; // Limpiar el formulario
        echo '</script>';
     } else {
        // Error en el registro
        echo '<script>';
        echo 'alert("Error al registrar la cita médica.");';
        echo '</script>';
         }
}
?>