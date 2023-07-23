<?php
require_once("../../view/head/head.php");
require_once("./../../controllers/tasksController.php");

$obj = new TaskController();
$date = $obj->show($_GET['id']);
?>
<h2 class="text-center">DETALLES DE LA TAREA REGISTRADA</h2>
<div class="pb-3">

    <a href="./index.php" class="btn btn-primary">Lista de tareas</a>

    <a href="edit.php?id=<?= $date["id"]?>" class="btn btn-success">Editar</a>

    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado será irrecuperable.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="delete.php?id=<?= $date["id"]?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Tarea</th>
            <th scope="col">Descripción</th>
            <th scope="col">Fecha de creación</th>
            <th scope="col">Fecha de finalización</th>
            <th scope="col">Estado</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id"] ?></td>
            <td scope="col"><?= $date["Title"] ?></td>
            <td scope="col"><?= $date["Description"] ?></td>
            <td scope="col"><?= $date["Created_at"] ?></td>
            <td scope="col"><?= $date["Finished_at"] ?></td>
            <td scope="col"><?= $date["Completed"] ?></td>
        </tr>
    </tbody>
</table>

<?php
    require_once("../../view/head/footer.php");
?>
