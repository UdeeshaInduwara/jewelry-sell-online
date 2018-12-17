<?php
require_once __DIR__."/../core/FavouriteJewelry.php";

interface FavouriteJewelryRepo
{
    public function setConnection(mysqli $connection): void;
    public function addFavouriteJewelry(FavouriteJewelry $favouriteJewelry): bool;
    public function updateFavouriteJewelry(FavouriteJewelry $favouriteJewelry): bool;
    public function deleteFavouriteJewelry(string $jewid,string $custid): bool;
    public function searchFavouriteJewelry(string $id): array;
    public function getAllFavouriteJewelry(): array;
}