<?php

include_once 'IDataAccess.php';

class Database implements IDataAccess{
    private $host = 'localhost';
    private $db_name = 'elbe_gui';
    private $userName = 'root';
    private $password = '1234';
    private $conn;

    public function Connect(){
        $this->conn = null;
        try{
            $this->conn = new PDO('mysql:host='.$this->host.';dbname='.$tis->db_name, $this->username, $this->password);
            $this->conn.setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo 'Connection Error: ' . $e->getMessage();
        }
        return $this->conn;
    }
}

?>