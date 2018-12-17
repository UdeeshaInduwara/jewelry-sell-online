<?php
require_once __DIR__."/../FavouriteJewelryBO.php";
require_once __DIR__."/../../core/FavouriteJewelry.php";
require_once __DIR__."/../../repo/Impl/FavouriteJewelryRepoImpl.php";
require_once __DIR__."/../../db/DBConnection.php";

class FavouriteJewelryBOImpl implements FavouriteJewelryBO
{

    public function addFavouriteJewelry(FavouriteJewelry $favouriteJewelry): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $favJewRepo=new FavouriteJewelryRepoImpl();
        $favJewRepo->setConnection($connection);
        return $favJewRepo->addFavouriteJewelry($favouriteJewelry);
    }

    public function updateFavouriteJewelry(FavouriteJewelry $favouriteJewelry): bool
    {
        return false;
    }

    public function deleteFavouriteJewelry(string $jewid,string $custid): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $favJewRepo=new FavouriteJewelryRepoImpl();
        $favJewRepo->setConnection($connection);
        return $favJewRepo->deleteFavouriteJewelry($jewid,$custid);
    }

    public function searchFavouriteJewelry(string $id): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $favJewRepo=new FavouriteJewelryRepoImpl();
        $favJewRepo->setConnection($connection);
        return $favJewRepo->searchFavouriteJewelry($id);
    }

    public function getAllFavouriteJewelry(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $favJewRepo=new FavouriteJewelryRepoImpl();
        $favJewRepo->setConnection($connection);
        return $favJewRepo->getAllFavouriteJewelry();
    }
}