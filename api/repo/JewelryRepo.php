<?php
require_once __DIR__."/../core/Jewelry.php";

interface JewelryRepo
{
    public function setConnection(mysqli $connection): void;
    public function addJewelry(Jewelry $jewelry): bool;
    public function updateJewelry(Jewelry $jewelry): bool;
    public function deleteJewelry(string $id): bool;
    public function searchJewelry(string $id): array;
    public function getAllJewelry(): array;
}