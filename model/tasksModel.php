<?php
class TaskModel{
    private $PDO;
    public function __construct()
    {
        require_once("../../config/db.php");
        $con = new Db();
        $this->PDO = $con->conexion();
    }

    public function insertar($Title, $Description, $Created_at, $Finished_at, $Completed){
        $stament = $this->PDO->prepare("INSERT INTO tasks (Title, Description, Created_at, Finished_at, Completed) VALUES (:Title, :Description, :Created_at, :Finished_at, :Completed)");
        $stament->bindParam(":Title", $Title);
        $stament->bindParam(":Description", $Description);
        $stament->bindParam(":Created_at", $Created_at);
        $stament->bindParam(":Finished_at", $Finished_at);
        $stament->bindParam(":Completed", $Completed);
    
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }


    public function show($id){
        $stament = $this->PDO->prepare("SELECT * FROM tasks where id = :id limit 1");
        $stament->bindParam(":id",$id);

        return ($stament->execute()) ? $stament->fetch() : false;
    }


    public function index(){
        $stament = $this->PDO->prepare("SELECT * FROM tasks");

        return ($stament->execute()) ? $stament->fetchAll() : false;
}

public function update($id, $Title, $Description, $Created_at, $Finished_at, $Completed){
    $stament = $this->PDO->prepare("UPDATE tasks SET Title = :Title, Description = :Description, Created_at = :Created_at, Finished_at = :Finished_at, Completed = :Completed WHERE id = :id");
    $stament->bindParam(":id", $id);
    $stament->bindParam(":Title", $Title);
    $stament->bindParam(":Description", $Description);
    $stament->bindParam(":Created_at", $Created_at);
    $stament->bindParam(":Finished_at", $Finished_at);
    $stament->bindParam(":Completed", $Completed);

    return ($stament->execute()) ? $id : false;
}
public function delete($id){
    $stament = $this->PDO->prepare("DELETE FROM tasks WHERE id = :id");
    $stament->bindParam(":id",$id);
    return ($stament->execute()) ? true : false;
    }



}
?>