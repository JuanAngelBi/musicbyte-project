<?php $url_base="http://localhost/musicbyte-project/admin/modulos"; ?>

<!doctype html>
<html lang="en">

<head>
    <title>Administración</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="http://localhost/musicbyte-project/admin/zona_admin.php" aria-current="page">Administración <span class="visually-hidden">(current)</span></a>
            </li>
            <li class="nav-item d-flex">
                <a class="nav-link" href="<?php echo $url_base ?>/usuarios/crud_usuarios.php">Usuarios</a>
                <a class="nav-link" href="<?php echo $url_base ?>/canciones/crud_canciones.php">Canciones</a>
                <a class="nav-link" href="<?php echo $url_base ?>/interpretes/crud_interpretes.php">Interpretes</a>
                <a class="nav-link" href="../index.php">Salir</a>
            </li>
        </ul>
    </nav>
    <br>