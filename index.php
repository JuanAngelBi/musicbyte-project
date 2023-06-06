<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: musicbyte.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./assets/css/estilo_index.css">
    <title>MusicByte</title>
</head>
<body>
    <header>
        <a href="#" class="logo">
            <img src="./assets/images/logo.jpg" alt="logo de la empresa">
            <h2 class="nombre-empresa">MusicByte</h2>
        </a>
        <nav>
            <a href="help.html" class="nav-link">Ayuda</a>
            <a href="about.html" class="nav-link">Información</a>
            <a href="ingreso.php" class="nav-link">Ingresar</a>
        </nav>
    </header>
</body>
</html>