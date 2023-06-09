<?php

include("../../../php/conexion_be.php");

if (isset($_GET['id'])) {

    //  Recuperar datos
    $txtid = (isset($_GET['id']) ? $_GET['id'] : "");
    $stm = $conexion2->prepare("SELECT * FROM canciones WHERE id=:txtid");
    $stm->bindParam(":txtid", $txtid);
    $stm->execute();
    $registro = $stm->fetch(PDO::FETCH_LAZY);
    $nombre = $registro['nombre'];
    $enlace = $registro['enlace'];
    $genero = $registro['genero'];
    $interprete = $registro['interprete'];
    $album = $registro['album'];

    //  Editar datos
    if ($_POST) {
        $txtid = (isset($_POST['txtid']) ? $_POST['txtid'] : "");
        $nombre = (isset($_POST['nombre']) ? $_POST['nombre'] : "");
        $enlace = (isset($_POST['enlace']) ? $_POST['enlace'] : "");
        $genero = (isset($_POST['genero']) ? $_POST['genero'] : "No tiene genero");
        $interprete = (isset($_POST['interprete']) ? $_POST['interprete'] : "");
        $album = (isset($_POST['album']) ? $_POST['album'] : "No tiene album");

        $stm = $conexion2->prepare("UPDATE canciones SET nombre=:nombre, enlace=:enlace, genero=:genero, interprete=:interprete, album=:album
        WHERE id=:txtid");

        $stm->bindParam(":nombre", $nombre);
        $stm->bindParam(":enlace", $enlace);
        $stm->bindParam(":genero", $genero);
        $stm->bindParam(":interprete", $interprete);
        $stm->bindParam(":album", $album);
        $stm->bindParam(":txtid", $txtid);
        $stm->execute();

        header("location:crud_canciones.php");
    }
}



?>

<?php include("../../template/header.php"); ?>

<div class="container">
    <form action="" method="post">
        <input type="hidden" class="form-control" name="txtid" value="<?php echo $txtid; ?>">
        <label for="">Nombre</label>
        <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre de la cancion">
        <label for="">Enlace</label>
        <input type="text" class="form-control" name="enlace" value="<?php echo $enlace; ?>" placeholder="Link a la cancion">
        <label for="">Genero</label>
        <input type="text" class="form-control" name="genero" value="<?php echo $genero; ?>" placeholder="Genero a la que pertenece (opcional)">
        <label for="">Interprete</label>
        <input type="text" class="form-control" name="interprete" value="<?php echo $interprete; ?>" placeholder="Interprete">
        <label for="">Album</label>
        <input type="text" class="form-control" name="album" value="<?php echo $album; ?>" placeholder="Album al que pertenece (opcional)">
        <br>
        <div class="modal-footer ">
            <a href="crud_canciones.php" class="btn btn-secondary bg-gradient"><i class="bi bi-x-lg"></i> Cancelar</a>
            <button type="submit" class="btn btn-secondary bg-gradient"><i class="bi bi-pencil"></i> Actualizar</button>
        </div>
    </form>
</div>

<?php include("../../template/footer.php"); ?>