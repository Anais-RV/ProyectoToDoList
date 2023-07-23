<?php

require_once("./../../controllers/tasksController.php");
$obj = new TaskController();
$obj->update($_POST['id'], $_POST['Title'], $_POST['Description'],$_POST['Created_at'],$_POST['Finished_at'],$_POST['Completed']);

?>