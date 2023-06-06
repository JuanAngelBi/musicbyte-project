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
    <title>MusicByte</title>
</head>
<body>
    <main>
        <a href="ingreso.php">Ingresar</a>
    </main>
</body>
</html>