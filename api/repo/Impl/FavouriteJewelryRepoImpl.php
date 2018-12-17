<?php
require_once __DIR__ . "/../FavouriteJewelryRepo.php";
require_once __DIR__ . "/../../core/FavouriteJewelry.php";

class FavouriteJewelryRepoImpl implements FavouriteJewelryRepo
{
    private $connection;
    public function __construct()
    {
        $this->connection = (new DBConnection())->getDBConnection();
    }

    public function setConnection(mysqli $connection): void
    {
//        $this->connection=$connection;
    }

    public function addFavouriteJewelry(FavouriteJewelry $favouriteJewelry): bool
    {
        $res=$this->connection->query("INSERT INTO favouritejewelry(custId, jewId, selectedDate, status) VALUES ('{$favouriteJewelry->getCustId()}','{$favouriteJewelry->getJewId()}',current_date ,'{$favouriteJewelry->getStatus()}')");
        return $res;
    }

    public function updateFavouriteJewelry(FavouriteJewelry $favouriteJewelry): bool
    {
        return false;
    }

    public function deleteFavouriteJewelry(string $jewid,string $custid): bool
    {
        $res=$this->connection->query("DELETE FROM favouritejewelry WHERE jewId='{$jewid}' AND custId='{$custid}'");
        return $res;
    }

    public function searchFavouriteJewelry(string $id): array
    {
        $rst=$this->connection->query("SELECT j.jewId,j.metal,j.carat,j.weight,j.jewelrySize,j.price,j.jewTId,j.imgPath FROM favouritejewelry fj,jewelry j where fj.jewId=j.jewId and fj.status='selected' and fj.custId='{$id}'");
        return $rst->fetch_all();
    }

    public function getAllFavouriteJewelry(): array
    {
        $rst=$this->connection->query("SELECT * FROM favouritejewelry");
        return $rst->fetch_all();
    }
}