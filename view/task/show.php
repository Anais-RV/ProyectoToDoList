<?php
require_once("../../view/head/head.php");
require_once("../../controllers/tasksController.php");

$obj = new TaskController();
print_r($obj->show($_GET['id']));
?>

<h2>HOLA</h2>

<?php
    require_once("../../view/head/footer.php");
?>
