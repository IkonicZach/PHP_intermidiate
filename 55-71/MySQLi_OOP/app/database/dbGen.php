<?php

namespace app\database;

use mysqli;

class DBGen
{
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "restaurant";

    private $conn;
    public function __construct()
    {
        $this->conn = new mysqli(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
    }

    public function getSingleShop($id)
    {
        $statement = $this->conn->prepare("SELECT * FROM shops WHERE id=?");
        $statement->bind_param('i', $id);
        $result = $statement->execute();
        $statement->bind_result($id, $name, $ipadd, $username, $pass, $state, $created_at);

        while ($statement->fetch()) {
            echo $id . "<br>" . $name . "<br>" . $ipadd . "<br>" . $username . "<br>" . $pass . "<br>" . $state . "<br>" . $created_at . "<hr>";
        }
    }
    public function getMultiShops($state)
    {
        $statement = $this->conn->prepare("SELECT * FROM shops WHERE state=?");
        $statement->bind_param('i', $state);
        $result = $statement->execute();
        $statement->bind_result($id, $name, $ipadd, $username, $pass, $state, $created_at);

        while ($statement->fetch()) {
            echo $id . "<br>" . $name . "<br>" . $ipadd . "<br>" . $username . "<br>" . $pass . "<br>" . $state . "<br>" . $created_at . "<hr>";
        }
    }
    public function getAllData()
    {
        $result = $this->conn->query("SELECT * FROM shops");
        while ($row = $result->fetch_object()) {
            echo $row->name . "<br>";
        }
    }
    public function insertSingleData($name, $ipadd, $user, $pass, $state)
    {
        $date = date("Y-m-d H:m:s");
        $statement = $this->conn->prepare("INSERT INTO shops (name, ipadd, username, password, state, created_at) VALUES (?,?,?,?,?,?)");
        $statement->bind_param('ssssis', $name, $ipadd, $user, $pass, $state, $date);
        $result = $statement->execute();
        echo $result ? "Data inserted successfully." : "Data insertion Failed.";
    }
    public function insertMultiData($shops)
    {
        $date = date("Y-m-d H:m:s");
        $statement = $this->conn->prepare("INSERT INTO shops (name, ipadd, username, password, state, created_at) VALUES (?,?,?,?,?,?)");
        foreach ($shops as $shop) {
            $statement->bind_param('ssssis', $shop[0], $shop[1], $shop[2], $shop[3], $shop[4], $date);
            $result = $statement->execute();
            $lastInsertedID = $statement->insert_id;
            echo "Successfully insertrd " . $shop[0] . " with ID of " . $lastInsertedID . "<br>";
        }
    }
    public function updateData($shopid, $name)
    {
        $statement = $this->conn->prepare("UPDATE shops SET name=? WHERE id=?");
        $statement->bind_param("si", $name, $shopid);
        $result = $statement->execute();
        echo $result ? "Data updated successfully." : "Data updating Failed.";
    }
    public function deleteData($shopid)
    {
        $statement = $this->conn->prepare("DELETE FROM shops WHERE id=?");
        $statement->bind_param("i", $shopid);
        $result = $statement->execute();
        echo $result ? "Data deleted successfully." : "Data deletion Failed.";
    }
}
