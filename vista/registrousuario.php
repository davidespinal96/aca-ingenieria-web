<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Registro de Cita Médica</title>
</head>
<body class="style">
    <div class="container">
        <h2>Registro de Cita Médica</h2>
        <script>
        // Función para mostrar alerta después de cargar la página
        window.onload = function() {
            // Verificar si hay un mensaje de alerta
            <?php
            session_start();
            if (isset($_SESSION["mensaje"])) {
                echo 'alert("' . $_SESSION["mensaje"] . '");';
                unset($_SESSION["mensaje"]); // Limpiar variable de sesión
            }
            ?>
        };
        </script>
        <form id="registroForm" action="../controlador/controlador.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre" required><br>
            <input type="email" name="correo" placeholder="Correo electrónico" required><br>
            <input type="tel" name="telefono" placeholder="Teléfono" required><br>
            <textarea name="direccion" placeholder="Dirección" required></textarea><br>
            <input type="date" name="fecha" placeholder="Fecha de la cita" required><br>
            <input type="text" name="especialidad" placeholder="Especialidad de la cita" required><br>
            <button type="submit" class="btn btn-success">Registrar Cita</button><br>
        </form>
    </div>

</body>

</html>