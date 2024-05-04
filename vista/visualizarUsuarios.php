<?php 
    include '../controlador/controlador.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Citas Médicas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Lista de Citas Médicas</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Fecha</th>
                <th>Especialidad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($citas) {
                $count = 1;
                foreach ($citas as $cita) {
                    echo "<tr>";
                    echo "<td>" . $count . "</td>";
                    echo "<td>" . htmlspecialchars($cita['nombre']) . "</td>";
                    echo "<td>" . htmlspecialchars($cita['correo']) . "</td>";
                    echo "<td>" . htmlspecialchars($cita['telefono']) . "</td>";
                    echo "<td>" . htmlspecialchars($cita['direccion']) . "</td>";
                    echo "<td>" . htmlspecialchars($cita['fecha']) . "</td>";
                    echo "<td>" . htmlspecialchars($cita['especialidad']) . "</td>";
                    echo "</tr>";
                    $count++;
                }
            } else {
                echo "<tr><td colspan='7'>No se encontraron citas</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>