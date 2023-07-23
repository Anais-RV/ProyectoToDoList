<?php
require_once("../../view/head/head.php");
require_once("./../../controllers/tasksController.php");

$obj = new TaskController();
$date = $obj->show($_GET['id']);
print_r($date)
?>

<table class="table container-fluid">
    <thead>
        <tr>
            <th scope="col">ID</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date["id"] ?></td>
        </tr>
    </tbody>
</table>

<?php
    require_once("../../view/head/footer.php");
?>
