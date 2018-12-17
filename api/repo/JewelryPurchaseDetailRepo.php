<?php
require_once __DIR__."/../core/JewelryPurchaseDetail.php";

interface JewelryPurchaseDetailRepo
{
    public function setConnection(mysqli $connection): void;
    public function addJewelryPurchaseDetail(JewelryPurchaseDetail $jewelryPurchaseDetail): bool;
    public function updateJewelryPurchaseDetail(JewelryPurchaseDetail $jewelryPurchaseDetail): bool;
    public function deleteJewelryPurchaseDetail(string $id): bool;
    public function searchJewelryPurchaseDetail(string $id): array;
    public function getAllJewelryPurchaseDetails(): array;
}