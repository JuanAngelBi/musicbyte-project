<?php

include("../../../php/conexion_be.php");

if ($_POST) {
    $nombre = (isset($_POST['nombre']) ? $_POST['nombre'] : "");
    $enlace = (isset($_POST['enlace']) ? $_POST['enlace'] : "");
    $genero = (isset($_POST['genero']) ? $_POST['genero'] : "");
    $interprete = (isset($_POST['interprete']) ? $_POST['interprete'] : "");
    $album = (isset($_POST['album']) ? $_POST['album'] : "");

    $stm = $conexion2->prepare("INSERT INTO canciones(id, nombre, enlace, genero, interprete, album)
    VALUES(null, :nombre, :enlace, :genero, :interprete, :album)");

    $stm->bindParam(":nombre", $nombre);
    $stm->bindParam(":enlace", $enlace);
    $stm->bindParam(":genero", $genero);
    $stm->bindParam(":interprete", $interprete);
    $stm->bindParam(":album", $album);
    $stm->execute();

    header("location:crud_canciones.php");
}
?>

<!-- Modal Agregar interprete-->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar cancion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre de la cancion">
                    <label for="">Enlace</label>
                    <input type="text" class="form-control" name="enlace" placeholder="Link a la cancion">
                    <label for="">Genero</label>
                    <input type="text" class="form-control" name="genero" placeholder="Genero a la que pertenece (opcional)">
                    <label for="">Interprete</label>
                    <input type="text" class="form-control" name="interprete" placeholder="Interprete">
                    <label for="">Album</label>
                    <input type="text" class="form-control" name="album" placeholder="Album al que pertenece (opcional)">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>