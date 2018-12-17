<?php
require_once __DIR__."/../core/JewelryType.php";

interface JewelryTypeRepo
{
    public function setConnection(mysqli $connection): void;
    public function addJewelryType(JewelryType $jewelryType): bool;
    public function updateJewelryType(JewelryType $jewelryType): bool;
    public function deleteJewelryType(string $id): bool;
    public function searchJewelryType(string $id): array;
    public function getAllJewelryTypes(): array;
}