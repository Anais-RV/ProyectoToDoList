<?php
class Db
{
    private $host = "localhost";
    private $dbname = "todolistproject";
    private $user = "root";
    private $password = "";
    private $PDO;

    public function conexion(){
        try {
            $this->PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
            return $this->PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>



