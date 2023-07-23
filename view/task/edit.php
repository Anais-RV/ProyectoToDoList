<?php
require_once("../../view/head/head.php");
require_once("./../../controllers/tasksController.php");

$obj = new TaskController();
$date = $obj->show($_GET['id']);
?>

<form action="update.php" method="post" autocomplete="off">
    <h2>Editar Tarea</h2>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-10">
      <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $date["id"]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Tarea</label>
    <div class="col-sm-10">
      <input type="text" name="Title" class="form-control" id="inputPassword" value="<?= $date["Title"]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Descripción</label>
    <div class="col-sm-10">
      <input type="text" name="Description" class="form-control" id="inputPassword" value="<?= $date["Description"]?>">
    </div>
  </div>
  <div>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Fecha de creación</label>
    <div class="col-sm-10">
      <input type="text" name="Created_at" readonly class="form-control-plaintext" id="staticEmail" value="<?= $date["Created_at"]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Fecha de finalización</label>
    <div class="col-sm-10">
      <input type="text" name="Finished_at" readonly class="form-control-plaintext" id="staticEmail" value="<?= $date["Finished_at"]?>">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Estado</label>
    <div class="col-sm-10">
        <select id="status" name="Completed"class="form-control-plaintext" id="Completed" aria-describedby="emailHelp">
            <option value="Sin empezar">¡Habrá que ponerse a ello!</option>
            <option value="En progreso">¡Estoy en ello!</option>
            <option value="Terminada">¡Listo!</option>
        </select>
    </div>
  </div>
  
    <input type="submit" value="Actualizar" class="btn btn-success">
    <a href="show.php?id=<?= $date["id"]?>" class="btn btn-danger">Cancelar</a>
  </div>
</form>

<?php
    require_once("../../view/head/footer.php");
?>
