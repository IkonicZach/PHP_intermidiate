<?php
require_once "dbGen.php";
class DAL
{
    private $db;
    public function __construct()
    {
        $this->db = DBGen::getInstance()->getConn();
    }

    public function getSingle($id)
    {
        $statement = $this->db->prepare("SELECT * FROM shops WHERE id=:id");
        $statement->bindParam(":id", $id);
        $statement->execute();
        $statement->bindColumn("name", $name);
        $statement->bindColumn("ipadd", $ipadd);
        $result = $statement->fetchObject();

        echo $result->name . "<br>" . $result->ipadd;
    }
    public function getAll($state)
    {
        $statement = $this->db->prepare("SELECT * FROM shops WHERE state=:state");
        $statement->bindParam(":state", $state);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        foreach ($result as $item) {
            echo $item->name;
            echo "<br>";
        }
    }
    public function singleInsert($name, $ipadd, $username, $pass, $state)
    {
        $date = date("Y-m-d H:m:s");
        $statement = $this->db->prepare("INSERT INTO shops (name, ipadd, username, password, state, created_at) 
        VALUE (:name, :ipadd, :username, :password, :state, :created_at)");
        $statement->bindParam(":name", $name);
        $statement->bindParam(":ipadd", $ipadd);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":password", $pass);
        $statement->bindParam(":state", $state);
        $statement->bindParam(":created_at", $date);

        $result = $statement->execute();
        $insertid = $this->db->lastInsertId();

        echo $result ? "Inserted successfully with insert ID " . $insertid : "Insertion failed";
    }
    public function multiInsert($shops)
    {
        $date = date("Y-m-d H:m:s");
        $statement = $this->db->prepare("INSERT INTO shops (name, ipadd, username, password, state, created_at) 
        VALUE (:name, :ipadd, :username, :password, :state, :created_at)");
        foreach ($shops as $shop) {
            $statement->bindParam(":name", $shop[0]);
            $statement->bindParam(":ipadd", $shop[1]);
            $statement->bindParam(":username", $shop[2]);
            $statement->bindParam(":password", $shop[3]);
            $statement->bindParam(":state", $shop[4]);
            $statement->bindParam(":created_at", $date);
            $result = $statement->execute();
            $insertid = $this->db->lastInsertId();
            echo $result ? "Inserted successfully with insert ID " . $insertid : "Insertion failed";
        }
    }
    public function updateShop($id, $name)
    {
        $date = date("Y-m-d H:m:s");
        $statement = $this->db->prepare("INSERT INTO shops SET name=:name WHERE id=:id");
        $statement->bindParam(":name", $name);
        $statement->bindParam(":id", $id);

        $result = $statement->execute();

        echo $result ? "Updated successfully." : "Updating failed";
    }
    public function deleteShop($id)
    {
        $date = date("Y-m-d H:m:s");
        $statement = $this->db->prepare("DELETE FROM shops WHERE id=:id");
        $statement->bindParam(":id", $id);

        $result = $statement->execute();

        echo $result ? "Deleted successfully." : "Deletion failed";
    }
    public function joinData($shopid)
    {
        $statement = $this->db->prepare(
        "SELECT
            sh.name as name,
            sh.ipadd as ipadd,
            SUM(od.price * od.amount) as total
        FROM
            shops as sh
        LEFT JOIN
            orders as od
        ON 
            od.shopid = sh.id
        WHERE
            sh.id = :id AND sh.state = 1
        ");
        $statement->bindParam(":id", $shopid);
        $statement->execute();
        $statement->bindColumn("name", $name);
        $statement->bindColumn("ipadd", $ipadd);
        $statement->bindColumn("total", $total);
        $result = $statement->fetchObject();

        echo $result->name . "<br>";
        echo $result->ipadd . "<br>";
        echo $result->total . "<br>";

    }
}
