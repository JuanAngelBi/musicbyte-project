<?php

    $conexion = mysqli_connect("localhost", "root", "", "musicbyte_project");

    // if($conexion){
    //     echo "Conexión exitosa a la base de datos";
    // }else{
    //     echo "No se ha podido conectar a la base de datos";
    // }

    $servidor="localhost";
    $db="musicbyte_project";
    $username="root";
    $password="";

    try {
        $conexion2=new PDO("mysql:host=$servidor;dbname=$db",$username,$password);
        // echo "conexion exitosa";
    } catch (Exception $e) {
        echo $e->getMessage();
    }

?>