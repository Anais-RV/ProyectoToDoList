<?php
require_once("../../view/head/head.php");
require_once("./../../controllers/tasksController.php");

$obj = new TaskController();
$date = $obj->show($_GET['id']);
?>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TAREA</th>
            <th scope="col">DESCRIPCIÓN</th>
            <th scope="col">FECHA DE CREACIÓN</th>
            <th scope="col">FECHA DE FINALIZACIÓN</th>
            <th scope="col">ESTADO</th>
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
