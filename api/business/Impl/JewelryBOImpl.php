<?php
require_once __DIR__."/../JewelryBO.php";
require_once __DIR__."/../../core/Jewelry.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/Impl/JewelryRepoImpl.php";
class JewelryBOImpl implements JewelryBO
{

    public function addJewelry(Jewelry $jewelry): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $jewelryRepo=new JewelryRepoImpl();
        $jewelryRepo->setConnection($connection);
        return $jewelryRepo->addJewelry($jewelry);
    }

    public function updateJewelry(Jewelry $jewelry): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $jewelryRepo=new JewelryRepoImpl();
        $jewelryRepo->setConnection($connection);
        return $jewelryRepo->updateJewelry($jewelry);
    }

    public function deleteJewelry(string $id): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $jewelryRepo=new JewelryRepoImpl();
        $jewelryRepo->setConnection($connection);
        return $jewelryRepo->deleteJewelry($id);
    }

    public function searchJewelry(string $id): array
    {
        return array();
    }

    public function getAllJewelry(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $jewelryRepo=new JewelryRepoImpl();
        $jewelryRepo->setConnection($connection);
        return $jewelryRepo->getAllJewelry();
    }
}