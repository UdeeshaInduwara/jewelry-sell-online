<?php
require_once __DIR__ . "/../JewelryRepo.php";
require_once __DIR__ . "/../../core/Jewelry.php";

class JewelryRepoImpl implements JewelryRepo
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


    public function addJewelry(Jewelry $jewelry): bool
    {
        $res=$this->connection->query("INSERT INTO jewelry values ('{$jewelry->getJewelryId()}','{$jewelry->getMetal()}',{$jewelry->getCarat()},{$jewelry->getWeight()},{$jewelry->getSize()},{$jewelry->getPrice()},'{$jewelry->getJewTypeId()}','{$jewelry->getImgPath()}','{$jewelry->getJewDescription()}')");
        return $res;
    }

    public function updateJewelry(Jewelry $jewelry): bool
    {
        $res=$this->connection->query("UPDATE jewelry SET metal='{$jewelry->getMetal()}',carat={$jewelry->getCarat()},weight={$jewelry->getWeight()},jewelrySize={$jewelry->getSize()},price={$jewelry->getPrice()},imgPath='{$jewelry->getImgPath()}',jewDescription='{$jewelry->getJewDescription()}' where jewId='{$jewelry->getJewelryId()}'");
        return $res;
    }

    public function deleteJewelry(string $id): bool
    {
        $res=$this->connection->query("DELETE FROM jewelry WHERE jewId='{$id}'");
        return $res;
    }

    public function searchJewelry(string $id): array
    {
        $res=$this->connection->query("SELECT * FROM jewelry WHERE jewId='{$id}'");
        return $res->fetch_all();
    }

    public function getAllJewelry(): array
    {
        $rst=$this->connection->query("SELECT jewId,metal,carat,weight,jewelrySize,price,j.jewTId,imgPath,jewDescription,jt.name FROM jewelry j,jewelrytype jt where j.jewTId=jt.jewTId");
        return $rst->fetch_all();
    }
}