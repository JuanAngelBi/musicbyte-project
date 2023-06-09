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
};

?>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MusicByte - Listen to music all the time</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./assets/css/header_musicbyte.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/estilo_reproductor.css">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="musicbyte.php">MusicByte</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="musicbyte.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Asistencia</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Configuracion</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="php/cerrar_sesion.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container">
        </form class="d-flex">
        <br>
        <form action="" method="GET">
            <button class="btn btn-outline-secondary" type="submit" name="enviar"><b>Buscar</b></button>
            <p></p>
            <input class="form-control" type="search" placeholder="Escriba una cancion o artista" name="busqueda"><br>
        </form>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-secondary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cancion</th>
                        <th scope="col">Interprete</th>
                        <th scope="col">Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conexionbd = mysqli_connect("localhost", "root", "", "musicbyte_project");
                    $where = "";

                    if (isset($_GET['enviar'])) {
                        $busqueda = $_GET['busqueda'];

                        if (isset($_GET['busqueda'])) {
                            $where = "WHERE canciones.nombre LIKE '%.$busqueda.%' OR interpretes.seudonimo LIKE '$.$busqueda.$'";
                        }
                    }

                    $SQL = "SELECT canciones.id, nombre, enlace FROM canciones JOIN interpretes ON canciones.interprete=interpretes.id $where";
                    $dato = mysqli_query($conexionbd, $SQL);

                    if ($dato->num_rows > 0) {
                        while ($fila = mysqli_fetch_array($dato)) { ?>
                            <tr>
                                <td scope="row"><?php echo $fila['id']; ?></td>
                                <td><?php echo $fila['cancion']; ?></td>
                                <td><?php echo $fila['interprete']; ?></td>
                                <td><?php echo $fila['enlace']; ?></td>
                            </tr>
                    <?php     }
                    };  ?>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://kit.fontawesome.com/8b920f4e0d.js" crossorigin="anonymous"></script>
    <!-- <script src="./font-awesome/js/all.min.js"></script> -->
</body>

</html>