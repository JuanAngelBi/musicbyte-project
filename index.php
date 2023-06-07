<?php

session_start();

if (isset($_SESSION['usuario'])) {
    header("location: musicbyte.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MusicByte - Free music</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">MusicByte</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="https://github.com/JuanAngelBi/musicbyte-project"><i class="fab fa-github"></i> GitHub</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Informacion</a></li>
                    <li class="nav-item"><a class="nav-link" href="#characteristics">Características</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="ingreso.php">Ingreso</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">MusicByte</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">¡Puedes escuchar tu música favorita en cualquier momento del día!</h2>
                    <a class="btn btn-primary" href="#about">Empezar</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="about-section text-center" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-white mb-4">¿Quiénes somos?</h2>
                    <p class="text-white-50">
                        MusicByte es un sitio web hecho por estudiantes universitarios para proporcionar un servicio de reproduccion de música.
                        Es un sistema en desarrollo, de uso libre y que tendrá más funcionalidades en el futuro.
                    </p>
                </div>
            </div>
            <img class="img-fluid" src="./assets/images/bg-about.png" alt="..." />
        </div>
    </section>
    <!-- Characteristics -->
    <section class="projects-section bg-light" id="characteristics">
        <div class="container px-4 px-lg-5">
            <!-- Featured Characteristic Row-->
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="./assets/images/bg-characteristic1.jpg" alt="..." /></div>
                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
                        <h4>¡Fácil de utilizar!</h4>
                        <p class="text-black-50 mb-0">En MusicByte buscamos proporcionar una sencilla e intuitiva opción para escuchar tus canciones favoritas</p>
                    </div>
                </div>
            </div>
            <!-- Characteristic One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="./assets/images/bg-characteristic2.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-white">¡Muchas Posibilidades!</h4>
                                <p class="mb-0 text-white-50">Podrás reproducir canciones de tus artistas preferidosos, crear listas de reproducción y conocer muchas otras canciones y artistas del momento</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Characteristic Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="./assets/images/bg-characteristic3.jpg" alt="..." /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-black text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-white">Progresos del Sistema</h4>
                                <p class="mb-0 text-white-50">Seguimos progresando por el mejoramiento del sistema y podrás recibir todas aquellas novedades que iremos agregando</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact-->
    <section class="contact-section bg-black" id="contacto">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Ciudad</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">Argentina, Formosa</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-envelope text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Correo</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50"><a href="#!">bibolinijuan@gmail.com</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="card py-4 h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-mobile-alt text-primary mb-2"></i>
                            <h4 class="text-uppercase m-0">Teléfono</h4>
                            <hr class="my-4 mx-auto" />
                            <div class="small text-black-50">+54 (3704)093843</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer bg-black small text-center text-white-50">
        <div class="container px-4 px-lg-5">Copyright &copy; Your Website 2023</div>
    </footer>
    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>