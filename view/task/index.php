<?php
    require_once("../../view/head/head.php");
    require_once("./../../controllers/tasksController.php");
    $obj = new TaskController();
    $rows = $obj ->index();

?>

<div class="mb-3">
    <a href="./create.php" class="btn btn-primary">Agregar nueva tarea</a>
</div>

<table class="table table-light table-striped-columns">
    <thead>
        <tr>
            <th colspan="7" class="text-center"><b>LISTA DE TAREAS</b></th>
        </tr>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TAREA</th>
            <th scope="col">DESCRIPCIÓN</th>
            <th scope="col">FECHA DE CREACIÓN</th>
            <th scope="col">FECHA DE FINALIZACIÓN</th>
            <th scope="col">COMPLETADA</th>
            <th scope="col">OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?=$row["id"] ?></th>
                    <th><?=$row["Title"] ?></th>
                    <th><?=$row["Description"] ?></th>
                    <th><?=$row["Created_at"] ?></th>
                    <th><?=$row["Finished_at"] ?></th>
                    <th><?=$row["Completed"] ?></th>
                    <th>
                        <a href="./show.php?id=<?= $row["id"]?>" class="btn btn-primary">Ver</a>
                        <a href="./edit.php?id=<?= $row["id"]?>" class="btn btn-success">Editar</a>
                        
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row["id"] ?>">Eliminar</a>
                        <div class="modal fade" id="exampleModal<?= $row["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar la tarea?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Una vez eliminado será irrecuperable.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                        <a href="./delete.php?id=<?= $row["id"]?>" class="btn btn-danger">Eliminar</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="7" class="text-center">No hay registros</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>



<?php
    require_once("../../view/head/footer.php");
?>