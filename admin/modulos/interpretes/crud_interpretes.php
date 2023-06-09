<?php

include("../../../php/conexion_be.php");

$stm = $conexion2->prepare("SELECT * FROM interpretes");
$stm->execute();
$interpretes = $stm->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['id'])){

    $txtid=(isset($_GET['id'])?$_GET['id']:"");
    $stm=$conexion2->prepare("DELETE FROM interpretes WHERE id=:txtid");
    $stm->bindParam(':txtid',$txtid);
    $stm->execute();
    header("location:./crud_interpretes.php");
}
?>


<?php include("../../template/header.php"); ?>

<h1 class="text-center">INTERPRETES</h1>
<button type="button" class="btn btn-secondary bg-gradient" data-toggle="modal" data-target="#create">
    <i class="bi bi-folder-plus"></i> Agregar
</button>
<div class="table-responsive text-center py-1">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Seudónimo</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($interpretes as $interprete) { ?>
                <tr class="">
                    <td scope="row"><?php echo $interprete['id']; ?></td>
                    <td><?php echo $interprete['seudonimo']; ?></td>
                    <td><?php echo $interprete['descripcion']; ?></td>
                    <td>
                        <a href="" class="btn btn-secondary bg-gradient"><i class="bi bi-pencil"></i> Editar</a>
                        <a href="crud_interpretes.php?id=<?php echo $interprete['id'];?>" class="btn btn-secondary bg-gradient"><i class="bi bi-trash"></i> Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php
include("../../template/footer.php");
include("crear_interprete.php");
?>