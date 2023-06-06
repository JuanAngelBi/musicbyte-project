<?php

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    //query
    $query = "INSERT INTO usuarios(correo, nombre_usuario, contrasena)
              VALUES ('$correo', '$nombre_usuario', '$contrasena')";

    // Repeticion de correo
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya se encuentra registrado, intenta con otro diferente");
                window.location = "../musicbyte.php"
            </script>
        ';
        exit;
    }
    
    // Repeticion de nombre de usuario
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario'");
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Ya existe una cuenta con este nombre de usuario, intenta con otro diferente");
                window.location = "../musicbyte.php"
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado existosamente");
                window.location = "../ingreso.php"
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no registrado");
                window.location = "../ingreso.php"
            </script>
        ';
    }

    mysqli_close($conexion);
?>