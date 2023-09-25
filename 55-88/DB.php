<?php
require_once "DAL.php";
class DB extends DAL
{
    public function __construct($host, $name, $user, $pass)
    {
        parent::__construct($host, $name, $user, $pass);
    }

    public function connect()
    {
        if($this->db == null){
            $this->db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->name, $this->user, $this->password);
        }
        return $this->db;
    }

    public function disconnect()
    {
        if($this->db != null){
            $this->db = null;
        }
    }

    public function fetchData($table, $modifier)
    {
        $statement = $this->db->prepare("SELECT * FROM users WHERE id=:id");
        // $statement->bindParam(":table", $table);
        $statement->bindParam(":id", $modifier);
        $result = $statement->execute();
        if($result)
            return $statement->fetchAll(PDO::FETCH_OBJ);
        else
            return null;
    }
}
$db = new DB("localhost", "newdb", "root", "");
$db->connect();
$data = $db->fetchData("users", 1);
if($data != null){
    echo $data[0]->name;
}