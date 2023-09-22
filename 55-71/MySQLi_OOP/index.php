<?php

use app\database\DBGen;

require_once "vendor/autoload.php";

class IND{
    private $db;
    public function __construct()
    {
        $shops = [
            ["Nola", "192.268.0.106", "Kon", "443", 1],
            ["Ching", "192.268.0.108", "Chong", "999", 1],
            ["Wala", "192.268.0.109", "Wala", "4", 1],
            ["Bing", "192.268.0.107", "Bong", "43", 1]
        ];
        $this->db = new DBGen();
        $this->db->deleteData(4);
        // $this->db->getSingleShop(2);
        // $this->db->getMultiShops(1);
        // $this->db->getAllData();
        // $this->db->insertSingleData("Blar", "192.168.0.104", "Ong", "234", 1);
    }
}
new IND();
