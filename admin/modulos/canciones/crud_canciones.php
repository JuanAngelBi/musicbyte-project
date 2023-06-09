<?php
include("../../template/header.php");
include("../../../php/conexion_be.php");

$stm = $conexion2->prepare("SELECT * FROM canciones");
$stm->execute();
$canciones = $stm->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['id'])){

    $txtid=(isset($_GET['id'])?$_GET['id']:"");
    $stm=$conexion2->prepare("DELETE FROM canciones WHERE id=:txtid");
    $stm->bindParam(':txtid',$txtid);
    $stm->execute();
    header("location:crud_canciones.php");
}
?>

<h1 class="text-center">CANCIONES</h1>
<button type="button" class="btn btn-secondary bg-gradient" data-toggle="modal" data-target="#create">
    <i class="bi bi-folder-plus"></i> Agregar
</button>
<div class="table-responsive text-center py-1">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Enlace</th>
                <th scope="col">Genero</th>
                <th scope="col">Interprete</th>
                <th scope="col">Album</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($canciones as $cancion) { ?>
                <tr class="">
                    <td scope="row"><?php echo $cancion['id']; ?></td>
                    <td><?php echo $cancion['nombre']; ?></td>
                    <td><?php echo $cancion['enlace']; ?></td>
                    <td><?php echo $cancion['genero']; ?></td>
                    <td><?php echo $cancion['interprete']; ?></td>
                    <td><?php echo $cancion['album']; ?></td>
                    <td>
                        <a href="editar_cancion.php?id=<?php echo $cancion['id'];?>" class="btn btn-secondary bg-gradient"><i class="bi bi-pencil"></i> Editar</a>
                        <a href="crud_canciones.php?id=<?php echo $cancion['id'];?>" class="btn btn-secondary bg-gradient"><i class="bi bi-trash"></i> Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php 
include("../../template/footer.php"); 
include("crear_cancion.php");
?>