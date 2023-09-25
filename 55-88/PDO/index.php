<?php
require_once "database/DAL.php";

class index
{
    public function __construct()
    {
    //    $db = DBGen::getInstance()->getConn();
        $dal = new DAL();
        // $dal->getAll(1);
        // $dal->singleInsert("June", "192.168.0.119", "KgKg", "3332", 1);

        $shops = [
            ["Geee", "192.168.0.109", "Jesus", "79", 1],
            ["LOAN", "192.168.0.120", "Nyrr", "32", 1],
            ["Beratie", "192.168.0.121", "Sanji", "223", 1],
            ["Smooth", "192.168.0.123", "Cake", "123134", 1],
            ["Krane", "192.168.0.122", "Jonathan", "32", 1]
        ];
        // $dal->deleteShop(6);
        $dal->joinData(1);
    }
}
new index();