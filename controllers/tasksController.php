<?php
require_once("../../model/tasksModel.php");

class TaskController{
    private $model;
    public function __construct()
    {
        $this->model = new TaskModel();
    }

public function guardar($Title, $Description, $Created_at, $Finished_at, $Completed){
    $id = $this->model->insertar($Title, $Description, $Created_at, $Finished_at, $Completed);
    return ($id!=false) ? header("Location: show.php?id=".$id) : header("Location:create.php");
    }

    public function show($id){
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
    }

    public function index(){
        return ($this->model->index()) ? $this->model->index() : false;
    }

    public function update($id, $Title, $Description, $Created_at, $Finished_at, $Completed){
        return ($this->model->update($id,$Title, $Description, $Created_at, $Finished_at, $Completed) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
}
    
?>


    <!-- public function index(){
             return ($this->model->index()) ? $this->model->index() : false;
         }
     public function update($id, $nombre){
        return ($this->model->update($id,$nombre) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
        return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        } -->
