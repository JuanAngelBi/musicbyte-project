<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Por favor, debes iniciar sesión");
                window.location = "ingreso.php"
            </script>
        ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicByte - music for everyone</title>
</head>

<body>
    <h1>Bienvenido a MusicByte!</h1>
    <a href="php/cerrar_sesion.php">Cerrar sesión</a>
    <nav class="menu">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Información</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>

</body>

</html>