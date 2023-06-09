<?php

if($_POST){

  $seudonimo=(isset($_POST['seudonimo'])?$_POST['seudonimo']:"");
  $descripcion=(isset($_POST['descripcion'])?$_POST['descripcion']:"");

  $stm=$conexion2->prepare("INSERT INTO interpretes(id, seudonimo, descripcion)
  VALUES(null, :seudonimo, :descripcion)");
  $stm->bindParam(":seudonimo", $seudonimo);
  $stm->bindParam(":descripcion", $descripcion);
  $stm->execute();

  header("location:./crud_interpretes.php");
}
?>

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar interprete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
        <div class="modal-body">
          <label for="">Seudonimo</label>
          <input type="text" class="form-control" name="seudonimo" value="" placeholder="Seudonimo del interprete">
          <label for="">Descripcion</label>
          <input type="text" class="form-control" name="descripcion" value="" placeholder="Escriba una descripcion">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>