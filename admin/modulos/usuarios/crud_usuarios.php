<?php

include("../../../php/conexion_be.php");

$stm = $conexion2->prepare("SELECT * from usuarios");
$stm->execute();
$usuarios = $stm->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['id'])){

$txtid=(isset($_GET['id'])?$_GET['id']:"");
$stm=$conexion2->prepare("DELETE FROM usuarios WHERE id=:txtid");
$stm->bindParam(':txtid',$txtid);
$stm->execute();
header("location:crud_usuarios.php");


}

?>



<?php include("../../template/header.php"); ?>

<div class="table-responsive text-center">
    <h1>USUARIOS</h1>
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre de Usuario</th>
                <th scope="col">Correo</th>
                <th scope="col">Contrasena</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
                <tr class="">
                    <td scope="row"><?php echo $usuario['id']; ?></td>
                    <td><?php echo $usuario['nombre_usuario']; ?></td>
                    <td><?php echo $usuario['correo']; ?></td>
                    <td><?php echo '--'; ?></td>
                    <td>
                        <a href="crud_usuarios.php?id=<?php echo $usuario['id'];?>" class="btn btn-secondary bg-gradient"><i class="bi bi-trash-fill"></i> Eliminar</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php include("../../template/footer.php"); ?>