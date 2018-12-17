<?php

require_once __DIR__ . "/../JewelryTypeRepo.php";
require_once __DIR__ . "/../../core/JewelryType.php";

class JewelryTypeRepoImpl implements JewelryTypeRepo
{

    private $connection;

    public function __construct()
    {
//        $this->connection = (new DBConnection())->getDBConnection();
    }

    public function setConnection(mysqli $connection): void
    {
        $this->connection=$connection;
    }

    public function addJewelryType(JewelryType $jewelryType): bool
    {
        $res=$this->connection->query("INSERT INTO jewelrytype values ('{$jewelryType->getJewTId()}','{$jewelryType->getName()}',0)");
        return $res;
    }

    public function updateJewelryType(JewelryType $jewelryType): bool
    {
        $res=$this->connection->query("UPDATE jewelrytype SET name='{$jewelryType->getName()}' WHERE jewTId='{$jewelryType->getJewTId()}'");
        return $res;
    }

    public function deleteJewelryType(string $id): bool
    {
        $res=$this->connection->query("DELETE FROM jewelrytype WHERE jewTId='{$id}'");
        return $res;
    }

    public function searchJewelryType(string $id): array
    {
        $rst=$this->connection->query("SELECT * FROM jewelrytype WHERE jewTId='{$id}'");
        return $rst->fetch_all();
    }

    public function getAllJewelryTypes(): array
    {
        $rst=$this->connection->query("SELECT * FROM jewelrytype");
        return $rst->fetch_all();
    }
}