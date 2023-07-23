<?php
require_once("../../view/head/head.php");
require_once("./../../controllers/tasksController.php");

$obj = new TaskController();
$obj->delete($_GET['id'])
?>

<?php
    require_once("../../view/head/footer.php");
?>