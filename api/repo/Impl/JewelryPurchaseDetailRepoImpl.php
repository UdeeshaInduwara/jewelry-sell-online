<?php
require_once __DIR__ . "/../JewelryPurchaseDetailRepo.php";
require_once __DIR__ . "/../../core/JewelryPurchaseDetail.php";

class JewelryPurchaseDetailRepoImpl implements JewelryPurchaseDetailRepo
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

    public function addJewelryPurchaseDetail(JewelryPurchaseDetail $jewelryPurchaseDetail): bool
    {
        $res = $this->connection->query("INSERT INTO jewelrypurchasedetail(resId, jewId, metal, carat, weight, jewelrySize, price, jewTId) VALUES (
'{$jewelryPurchaseDetail->getResId()}',
'{$jewelryPurchaseDetail->getJewId()}',
'{$jewelryPurchaseDetail->getMetal()}',
{$jewelryPurchaseDetail->getCarat()},
{$jewelryPurchaseDetail->getWeight()},
{$jewelryPurchaseDetail->getSize()},
{$jewelryPurchaseDetail->getPrice()},
'{$jewelryPurchaseDetail->getJewTypeId()}')");
        return $res;
    }

    public function updateJewelryPurchaseDetail(JewelryPurchaseDetail $jewelryPurchaseDetail): bool
    {
        return false;
    }

    public function deleteJewelryPurchaseDetail(string $id): bool
    {
        return false;
    }

    public function searchJewelryPurchaseDetail(string $id): array
    {
        return array();
    }

    public function getAllJewelryPurchaseDetails(): array
    {
        return array();
    }
}