<?php
    require_once("../../view/head/head.php");
?>

<form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="Title" class="form-label">Nueva tarea</label>
        <input type="text" name="Title" required class="form-control" id="Title" aria-describedby="emailHelp">

        <label for="Description" class="form-label">Descripción</label>
        <input type="text" name="Description" required class="form-control" id="Description" aria-describedby="emailHelp">

        <label for="Created_at" class="form-label">Fecha de creación</label>
        <input type="date" name="Created_at" required class="form-control" id="Created_at" aria-describedby="emailHelp">

        <label for="Finished_at" class="form-label">Fecha de finalización</label>
        <input type="date" name="Finished_at" required class="form-control" id="Finished_at" aria-describedby="emailHelp">

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Completed" id="Completed" aria-describedby="emailHelp">
            <label class="form-check-label" for="Completed">Completada</label>
        </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>    
        
    </div>

<?php
    require_once("../../view/head/footer.php");
?>