<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="../css/styles.css">
    <title>Registro de Cita Médica</title>
</head>
<body>
    <div class="container">
        <h2>Registro de Cita Médica</h2>
        <form id="registroForm" action="../controlador/controlador.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required><br>
            <input type="email" name="correo" placeholder="Correo electrónico" required><br>
            <input type="tel" name="telefono" placeholder="Teléfono" required><br>
            <textarea name="direccion" placeholder="Dirección" required></textarea><br>
            <input type="date" name="fecha" placeholder="Fecha de la cita" required><br>
            <input type="text" name="especialidad" placeholder="Especialidad de la cita" required><br>
            <button type="submit">Registrar Cita</button>
        </form>
    </div>

    <!-- Script JavaScript -->
    <script>
        // Función para mostrar alerta después de cargar la página
        window.onload = function() {
            // Verificar si hay un mensaje de alerta
            <?php
            if (!empty($_POST)) {
                if (isset($_POST["nombre"])) {
                    echo 'alert("Cita médica registrada correctamente.");';
                } elseif (isset($_POST["error"])) {
                    echo 'alert("Error al registrar la cita médica.");';
                }
            }
            ?>
        };
    </script>

</body>


</html>